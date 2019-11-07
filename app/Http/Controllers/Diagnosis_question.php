<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Diagnosis_question extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function patient_test(){
        $userID=Auth::user()->id;
        $data['summary']=DB::table('patient_question_test_summary')->where('patient_id',$userID)->get();

        $data['result'] = DB::table('diagnosis_question_result')
        ->join('patient_question_test_summary','patient_question_test_summary.id','=','diagnosis_question_result.question_summary_id')
        ->join('possible_diagnosis','possible_diagnosis.id','=','diagnosis_question_result.possible_diagnosis_id')
        ->where('patient_question_test_summary.patient_id',$userID)
        ->get();

        return view('pages.diagnosisSummary')->with($data);

    }

    public function lbp_diagnosis(){

        $data['questions'] = DB::table('diagnosis_questions')->orderBy('allow_option','desc')->get();
        return view('pages.lbp_diagnosis')->with($data);
    }

    public function lbp_diagnosis_action(Request $request){

        $userOption=$request->input('option');
        $question_id=$request->input('question_id');

        $response=$request->input('response');
        $questionResponse=$request->input('questionResponse');

        $summaryData=array(
            'patient_id'=>Auth::user()->id,
            'diagnosis_completed'=>1,
        );

        DB::table('patient_question_test_summary')->insert($summaryData);
        $summary=DB::table('patient_question_test_summary')->orderBy('id','desc')->first();

        for($i=0; $i<count($response); $i++){

            $responseData= array(
                'pqt_summary_id'=>$summary->id,
                'response'=>$response[$i],
                'question_id'=>$questionResponse[$i],
            );
            DB::table('patient_diagnosis_question_response')->insert($responseData);

        }

        for($i=0; $i<count($userOption); $i++){

            $insertData=array(
                'userOption'=>$userOption[$i],
                'question_id'=>$question_id[$i],
                'pqt_summary_id'=>$summary->id,
            );

            DB::table('patient_question_test_detail')->insert($insertData);

        }





        for($i=0; $i<count($userOption); $i++){

            $userData[]=array(
                'userOption'=>$userOption[$i],
                'question_id'=>$question_id[$i],
                'pqt_summary_id'=>$summary->id,
            );

        }



        $dataRequirement=DB::table('diagnosis_requirement')->get();
        $c=array();
        $diagnosisID=null;

        for($i=0; $i<count($dataRequirement); $i+=3){

            $future=false;

            for($j=0; $j<3; $j++){

                $p=$j;

                if($future==true){
                    $p=$j+1;
                }

                if ( ! isset($dataRequirement[$j+$i])) {

                    $dataRequirement[$j+$i]= null;
                    break;
                }
                if($dataRequirement[$i+$j]->alternative_id ==null){
                    $future=false;
                }
                else{

                    $future=true;
                }
                echo $userData[$p]['question_id'].' user '. $dataRequirement[$i+$j]->diagnosis_question_id.' database'. $dataRequirement[$i+$j]->alternative_id.' alternative <br>';

                if($userData[$p]['question_id']==$dataRequirement[$i+$j]->diagnosis_question_id){

                    if($userData[$p]['userOption']==$dataRequirement[$i+$j]->expected_outcome){
                        $c[]=$dataRequirement[$i+$j]->possible_diagnosis_id;
                    }
                    elseif($userData[$p+1]['question_id']==$dataRequirement[$i+$j]->alternative_id){

                        if($userData[$p+1]['userOption']==$dataRequirement[$i+$j]->alternative_outcome){
                            $c[]=$dataRequirement[$i+$j]->possible_diagnosis_id;


                        }
                    }

                }
            }

        }

        //print_r($c);
        $distinctTest=$this->getDistinct($c);
        $criteria=3;
        $qualifiedTest=$this->getQualifiedTest($c,$distinctTest,$criteria);

        //check exception table
        $exception=$this->checkException($userData);

        $combine=array_merge($exception,$qualifiedTest);
        $possibleDiagnosis=$this->getDistinct($combine);

        for($k=0; $k<count($possibleDiagnosis); $k++){
            $diagnosis= array(

                'question_summary_id'=>$summary->id,
                'possible_diagnosis_id'=>$possibleDiagnosis[$k],
            );

            DB::table('diagnosis_question_result')->insert($diagnosis);
        }

        $data=array(
            'user_id'=>Auth::user()->id,
            'taken_diagnosis_questions'=>1,
            'pqt_summary_id'=>$summary->id,
            'diagnosis_status'=>0,
        );
        DB::table('patient_diagnosis')->insert($data);

        return redirect('view_result/'.$summary->id)->with('message', 'Low Back Pain is successfully diagnosed');



    }

    public function getDistinct($data){

        $c=0;
        $newData=array();
        for($i=0; $i<count($data); $i++){
            if(!in_array($data[$i],$newData)){
                $newData[]=$data[$i];
            }
        }
        return $newData;
    }

    public function getQualifiedTest($data,$distinct,$criteria){

        $qualified=array();

        for($i=0;$i<count($distinct); $i++){

            $count=0;

            for($j=0; $j<count($data); $j++){

                if($data[$j]==$distinct[$i]){
                    $count=$count+1;
                }
                if($count>$criteria){
                    $qualified[]=$distinct[$i];
                    break;
                }
            }

        }
        return $qualified;
    }

    public function checkException($userData){

        $exceptionData=DB::table('diagnosis_exception_requirement')->get();
        $exception=array();
        for($i=0; $i<count($exceptionData); $i++){

            for($j=0; $j<count($userData); $j++){

                if($exceptionData[$i]->diagnosis_question_id == $userData[$j]['question_id'] && $exceptionData[$i]->expected_outcome == $userData[$j]['userOption']){
                    $exception[]=$exceptionData[$i]->possible_diagnosis_id;
                }
            }
        }

        return $exception;

    }

    public function viewResult($id){

        $userResponse= DB::table('patient_diagnosis_question_response')
        ->join('diagnosis_questions','diagnosis_questions.id','=','patient_diagnosis_question_response.question_id')
        ->join('patient_question_test_summary','patient_diagnosis_question_response.pqt_summary_id','=','patient_question_test_summary.id')
        // ->where('patient_question_test_summary.patient_id',Auth::user()->id)
        ->where('patient_diagnosis_question_response.pqt_summary_id',$id)
        ->get();

        $userOption=DB::table('patient_question_test_detail')
        ->join('diagnosis_question_outcome', 'diagnosis_question_outcome.id','=','patient_question_test_detail.userOption')
        ->join('patient_question_test_summary','patient_question_test_detail.pqt_summary_id','=','patient_question_test_summary.id')
        ->join('diagnosis_questions','diagnosis_questions.id','=','patient_question_test_detail.question_id')
        ->where('patient_question_test_detail.pqt_summary_id',$id)
        ->get();


        $result=DB::table('diagnosis_question_result')
        ->join('possible_diagnosis','possible_diagnosis.id','=','diagnosis_question_result.possible_diagnosis_id')
        ->join('patient_question_test_summary','patient_question_test_summary.id','=','diagnosis_question_result.question_summary_id')
        ->where('diagnosis_question_result.question_summary_id',$id)
        ->get();

        $data = array(
            'userResponse'=>$userResponse,
            'userOption'=>$userOption,
            'results'=>$result,
        );
        return view('pages.diagnosisResult')->with($data);
    }

}
