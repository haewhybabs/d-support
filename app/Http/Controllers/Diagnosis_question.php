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

        $data['questions'] = DB::table('diagnosis_questions')->get();
        return view('pages.lbp_diagnosis')->with($data);
    }

    public function lbp_diagnosis_action(Request $request){

        $userOption=$request->input('option');
        $question_id=$request->input('question_id');

        for($i=0; $i<count($userOption); $i++){
            $userData[]=array(
                'userOption'=>$userOption[$i],
                'question_id'=>$question_id[$i],
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

        print_r($c);



    }
}
