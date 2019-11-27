<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Diagnosis as Diagnosis;
use Illuminate\Support\Facades\Auth;

class Diagnosis_support extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('secure');

    }

    public function index(){

        $diagnosis=DB::table('patient_diagnosis')
        ->join('users','patient_diagnosis.user_id', '=', 'users.id')->where('patient_diagnosis.diagnosis_status',2)
        ->orWhere('patient_diagnosis.diagnosis_status','0')
        ->select('users.*','patient_diagnosis.id AS diagnosis_id','patient_diagnosis.appointment_time',
        'patient_diagnosis.diagnosis_status','patient_diagnosis.user_id','patient_diagnosis.pqt_summary_id','patient_diagnosis.created_at')->get();

        $attended=DB::table('patient_diagnosis')
        ->join('users','patient_diagnosis.user_id','=', 'users.id')
        ->join('patient_test_summary','patient_diagnosis.id','=','patient_test_summary.diagnosis_id')
        ->where('patient_diagnosis.diagnosis_status',1)
        ->select('users.*','patient_diagnosis.*','patient_test_summary.*')
        ->get();

        $data=array(
            'diagnosis'=>$diagnosis,
            'attended'=>$attended
        );




      return view('pages.patient_diagnosis')->with($data);

    //    var_dump($data['diagnosis']);
    //    foreach($diagnosis as $d){
    //        echo $d->diagnosis_id;
    //    }
    }

    public function diagnosis_test($id,$user_id){

        $user=User::where('id',$user_id)->first();
        $head_test=DB::table('head_test_tbl')->get();
        $data=array(
            'user'=>$user,
            'head_tests'=>$head_test,
            'diagnosis_id'=>$id,
        );
        return view('pages.diagnosis_test')->with($data);


    }

    public function head_test_action($id,$diagnosis_id){

        $user=DB::table('patient_diagnosis')->where('id',$diagnosis_id)->first();
        $insert_summary=array(
            'stage'=>1,
            'head_test_id'=>$id,
            'user_id'=>$user->user_id,
            'diagnosis_id'=>$diagnosis_id,
            'therapist_id'=>Auth::user()->id
        );
        DB::table('patient_test_summary')->insert($insert_summary);
        $current=DB::table('patient_test_summary')->orderBy('summary_id','desc')->where('user_id',$user->user_id)->where('head_test_id',$id)->first();

        $insert_detail=array(
            'summary_id'=>$current->summary_id,
            'sub_test_id'=>$id,
            'status'=>1,
        );

        DB::table('patient_test_detail')->insert($insert_detail);

        DB::table('patient_diagnosis')->where('id',$diagnosis_id)
        ->update(['diagnosis_status'=>2]);

        $task='Performed Head Test Diagnosis';
        $this->audit($task);
        $new_stage=2;
        $status=1;
        // $next_test=$this->workflow($new_stage,$id,$status);

        return redirect('sub_test_flow/'.$diagnosis_id);


    }

    public function sub_test_flow($id){

        $diagnosis_summary=DB::table('patient_test_summary')->where('diagnosis_id',$id)->first();

        $latest_diagnosis_detail=DB::table('patient_test_detail')
        ->where('summary_id',$diagnosis_summary->summary_id)->orderBy('detail_id','desc')
        ->first();


        $all_detail=DB::table('patient_test_detail')
        ->join('sub_test_tbl','patient_test_detail.sub_test_id', '=', 'sub_test_tbl.sub_test_id')

        ->where('patient_test_detail.summary_id',$diagnosis_summary->summary_id)
        ->select('patient_test_detail.*','sub_test_tbl.*')
        ->get();

        $stage=$diagnosis_summary->stage+1;
        $depending=$latest_diagnosis_detail->sub_test_id;
        $status=$latest_diagnosis_detail->status;
        // print_r($stage.$depending.$status);

        $next_test=$this->workflow($stage,$depending,$status,$id);

        $data=array(
            'data'=>$next_test,
            'diagnosis_summary'=>$diagnosis_summary,
            'diagnosis_detail'=>$latest_diagnosis_detail,
            'all_detail'=>$all_detail,
            'diagnosis_id'=>$id
        );
        return view('pages.sub_test_diagnosis')->with($data);


    }

    public function sub_test_flow_action(Request $request){

        $diagnosis_id=$request->input('diagnosis_id');
        $summary_id=$request->input('summary_id');

        $diagnosis=DB::table('patient_diagnosis')->where('id',$diagnosis_id)->first();

        if($diagnosis->diagnosis_status==1){
            return redirect('success_diagnosis/'.$summary_id);
        }


        $sub_test_id=$request->input('sub_test_id');
        $stage=$request->input('stage');

        $status=$request->input('status');



        $detail=array(
            'summary_id'=>$summary_id,
            'sub_test_id'=>$sub_test_id,
            'status'=>$status,
        );
        DB::table('patient_test_detail')->insert($detail);
        DB::table('patient_test_summary')->where('summary_id',$summary_id)->update(['stage'=>$stage+1]);

        $task='A new test is Performed';
        $this->audit($task);

        return redirect()->back()->with('success', 'disease diagnoses result succesful');



    }

    public function workflow($stage,$depending,$status,$id){

        $current_test=DB::table('test_flow_tbl')->where('stage',$stage)->where('sub_test_depending_id',$depending)
        ->where('previous_status',$status)->first();

        $new_sub_test=$current_test->sub_test_id;

        if($current_test->sub_test_id==16){
            $new_sub_test=1;
            $stage=-1;

        }
        elseif($current_test->sub_test_id==12){
            $new_sub_test=2;
            $stage=-1;
        }
        elseif($current_test->sub_test_id==19){
            $new_sub_test=1;
            $stage=-1;
        }
        else{
            $stage=$stage-1;
        }
        $get_test=DB::table('sub_test_tbl')
        ->join('head_test_tbl','sub_test_tbl.head_test_id','=','head_test_tbl.id')
        ->select('sub_test_tbl.*','head_test_tbl.*')
        ->where('sub_test_tbl.sub_test_id',$new_sub_test)->first();

        if($current_test->final_diagnosis==1){
            $final_status=true;
        }
        else{
            $final_status=false;
        }

        $data=array(
            'new_test'=>$get_test,
            'final_status'=>$final_status,
            'stage'=>$stage,
        );

        return $data;


    }

    public function sub_test_flow_final(Request $request){

        $sub_test_id=$request->input('sub_test_id');
        $stage=$request->input('stage');
        $summary_id=$request->input('summary_id');
        $status=$request->input('status');
        $diagnosis_id=$request->input('diagnosis_id');

        $detail=array(
            'summary_id'=>$summary_id,
            'sub_test_id'=>$sub_test_id,
            'status'=>$status,
        );
        DB::table('patient_test_detail')->insert($detail);
        DB::table('patient_test_summary')->where('summary_id',$summary_id)->update(['stage'=>$stage+1]);
        DB::table('patient_diagnosis')->where('id',$diagnosis_id)->update(['diagnosis_status'=>1]);

        return redirect('success_diagnosis/'.$summary_id);
        // $request->session()->flash('message', 'Thank You, The diagnosis test has been completed');
        // return view('pages.final_test_page');

    }

    public function success_diagnosis($id){

        $all_details=DB::table('patient_test_detail')
        ->join('sub_test_tbl','patient_test_detail.sub_test_id', '=', 'sub_test_tbl.sub_test_id')

        ->where('patient_test_detail.summary_id',$id)
        ->select('patient_test_detail.*','sub_test_tbl.*')
        ->get();
        $get_user=DB::table('patient_test_summary')->where('summary_id',$id)->first();
        $user=User::where('id',$get_user->user_id)->first();
        $data=array(
            'all_details'=>$all_details,
            'user'=>$user
        );

        return view('pages.final_test_page')->with($data);

    }


    public function dsettings(){
        $all_test=DB::table('sub_test_tbl')->get();
        $data=array(
            'tests'=>$all_test,
            'test_detail'=>null,
        );
        return view('pages.test_setup')->with($data);
    }

    public function test_details(Request $request){

        $id=$request->input('test');
        return $this->test_action($id);



    }
    public function test_action($id){

        $all_test=DB::table('sub_test_tbl')->get();
        $get_details=DB::table('sub_test_tbl')->where('sub_test_id',$id)->first();
        $data=array(
            'tests'=>$all_test,
            'test_detail'=>$get_details,
        );

        return view('pages.test_setup')->with($data);

    }
    public function test_update_action(Request $request){

        $validator=Validator::make($request->all(),[
            'detail'=>'required',
            'test_name'=>'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->with('error', 'Please Fill the detail field');

        }
        $id=$request->input('id');

        $data=array(

            'detail'=>$request->input('detail'),
            'sub_test_name'=>$request->input('test_name'),
        );
        DB::table('sub_test_tbl')->where('sub_test_id',$id)->update($data);

        return $this->test_action($id);
    }

    // public function test(){

    //     $random=substr(str_shuffle("abcdefghizl"),0,5);
    // }





}
