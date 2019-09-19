<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Preliminary_model as PreModel;
use Illuminate\Support\Facades\Auth;


class Preliminary_diagnosis extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('secure');

    }

    public function possible_diagnosis(){

        $data['data']= DB::table('possible_diagnosis')->get();

        return view('pages.possible_diagnosis')->with($data);
    }

    public function add_possible_diagnosis(){

        return view('pages.add_possible_diagnosis');
    }

    public function add_possible_diagnosis_action(Request $request){

        $diagnosis= $request->input('diagnosis');

        DB::table('possible_diagnosis')->insert(['name'=>$diagnosis]);

        return redirect('possible_diagnosis')->with('message', 'diagnoses result created succesfully');

    }

    public function diagnosis_question(){

        $data['questions']=DB::table('diagnosis_questions')->get();

        return view('pages.diagnosis_question')->with($data);
    }

    public function add_diagnosis_question(){

        return view('pages.add_diagnosis_question');
    }

    public function add_diagnosis_question_action(Request $request){

        $question = $request->input('question');
        $options= $request->input('options');

        if(trim($request->input('label'))==null){
            $data=array(
                'question'=>$question
            );
            DB::table('diagnosis_questions')->insert($data);
        }
        else{
            $data=array(
                'question'=>$question,
                'label'=>$request->input('label')
            );
            DB::table('diagnosis_questions')->insert($data);
        }

        $questionID=DB::table('diagnosis_questions')->orderBy('id','desc')->first();

        for($i=0; $i<count($options); $i++){

            $data=array(
                'diagnosis_question_id'=>$questionID->id,
                'outcome'=>$options[$i]
            );

            DB::table('diagnosis_question_outcome')->insert($data);
        }

        return redirect('diagnosis_question')->with('message', 'diagnoses question added succesfully');


    }

    public function diagnosis_requirement(){

        $data['data']= DB::table('diagnosis_requirement')
        ->join('possible_diagnosis','possible_diagnosis.id','=','diagnosis_requirement.possible_diagnosis_id')
        ->join('diagnosis_questions','diagnosis_requirement.diagnosis_question_id', '=','diagnosis_questions.id')
        ->join('diagnosis_question_outcome','diagnosis_question_outcome.id','=','diagnosis_requirement.expected_outcome')
        ->get();

        return view('pages.diagnosis_requirement')->with($data);

    }

    public function add_diagnosis_requirement(){

        $data['diagnosisTests']= DB::table('possible_diagnosis')->get();

        $data['questions']=DB::table('diagnosis_questions')->where('label', '!=',null)->get();

        return view('pages.add_diagnosis_requirement')->with($data);
    }

    public function getQuestionOption(Request $request){
        $id=$request->input('value');
        $options=DB::table('diagnosis_question_outcome')->where('diagnosis_question_id',$id)->get();
        $pre='<option value="">Select Expected Outcome</option>';
        foreach($options as $option){
            $pre.=
            '
                <option value="'.$option->id.'">'.$option->outcome.'</option>
            ';

        }

        echo json_encode($pre);


    }

    public function add_diagnosis_requirement_action(Request $request){

        $testID=$request->input('diagnosis_id');
        $questionID=$request->input('question_id');
        $optionID=$request->input('option_id');
        $alternativeOutcome=$request->input('alternative_outcome');
        $alternativeID=$request->input('alternative_question_id');

        $data =array(

            'possible_diagnosis_id'=>$testID,
            'diagnosis_question_id'=>$questionID,
            'expected_outcome'=>$optionID,
            'alternative_id'=>$alternativeID,
            'alternative_outcome'=>$alternativeOutcome,

        );
        DB::table('diagnosis_requirement')->insert($data);
        return redirect('add_diagnosis_requirement')->with('message', 'diagnoses requirement added succesfully');


    }

    public function requirement_exception(){

        $data['data']= DB::table('diagnosis_exception_requirement')
        ->join('possible_diagnosis','possible_diagnosis.id','=','diagnosis_exception_requirement.possible_diagnosis_id')
        ->join('diagnosis_questions','diagnosis_exception_requirement.diagnosis_question_id', '=','diagnosis_questions.id')
        ->join('diagnosis_question_outcome','diagnosis_question_outcome.id','=','diagnosis_exception_requirement.expected_outcome')
        ->get();

        return view('pages.requirement_exception')->with($data);
    }

    public function add_requirement_exception(){

        $data['diagnosisTests']= DB::table('possible_diagnosis')->get();

        $data['questions']=DB::table('diagnosis_questions')->where('label', '!=',null)->get();

        return view('pages.add_requirement_exception')->with($data);
    }

    public function add_requirement_exception_action(Request $request){

        $testID=$request->input('diagnosis_id');
        $questionID=$request->input('question_id');
        $optionID=$request->input('option_id');

        $data =array(

            'possible_diagnosis_id'=>$testID,
            'diagnosis_question_id'=>$questionID,
            'expected_outcome'=>$optionID,

        );
        DB::table('diagnosis_requirement_exception')->insert($data);
        return redirect('add_requirement_exception')->with('message', 'diagnoses requirement exception added succesfully');
    }
}
