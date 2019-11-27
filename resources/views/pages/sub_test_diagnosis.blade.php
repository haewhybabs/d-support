@extends('layouts.main')
@section('content')
<div class="card-control">
    <h2 class="card-title">{{ $data['new_test']->sub_test_name }}</h2>

    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="box box-default">
                @if($data['new_test']->image==null)
                    <img class="card-img-top img-responsive" src="{{ asset('admin/images/card/img1.jpg')}}" alt="Card image cap">
                @else
                    <img class="card-img-top img-responsive" src="{{ asset('images')}}/{{ $data['new_test']->image }}" alt="Card image cap">
                @endif
                <div class="box-body">
                    <h4 class="card-title">{{ $data['new_test']->sub_test_name }} <span class="head-span">on {{ $data['new_test']->head_test_name }}</span></h4>
                    @if($data['final_status']==true)
                        <h5><strong>Final Diagnosis</strong></h5>
                    @endif
                    <div class="card-text">
                        <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="detail">
                            {{ $data['new_test']->detail }}
                        </textarea>
                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            @if($data['final_status']==true)
                                <form method="post" action="{{ route('sub_test_flow_final') }}">
                            @else
                                <form method="post" action="{{ route('sub_test_flow_action') }}">
                            @endif
                                @csrf
                                <input type="hidden"  name="sub_test_id" value="{{ $data['new_test']->sub_test_id }}">
                                <input type="hidden"  name="status" value="1">
                                <input type="hidden" name="summary_id" value="{{ $diagnosis_summary->summary_id }}">
                                <input type="hidden" name="stage" value="{{ $data['stage']}}">
                                <input type="hidden" name="diagnosis_id" value="{{$diagnosis_id }}">
                                @if($data['final_status']==true)
                                @else
                                <input type="submit" value="Positive" class="btn btn-primary">
                                @endif
                            </form>
                        </div>
                        <div class="col-sm-3">
                            @if($data['final_status']==true)
                                <form method="post" action="{{ route('sub_test_flow_final') }}">
                            @else
                                <form method="post" action="{{ route('sub_test_flow_action') }}">
                            @endif
                                @csrf
                                <input type="hidden"  name="sub_test_id" value="{{ $data['new_test']->sub_test_id }}">
                                <input type="hidden"  name="status" value="0">
                                <input type="hidden" name="summary_id" value="{{ $diagnosis_summary->summary_id }}">
                                <input type="hidden" name="stage" value="{{ $data['stage'] }}">
                                <input type="hidden" name="diagnosis_id" value="{{$diagnosis_id }}">
                                @if($data['final_status']==true)
                                @else
                                    <input type="submit" value="Negative" class="btn btn-danger">
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Previous Test</h3>
                    <h6 class="box-subtitle">Diagnosis Test</h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example"
                        class="table table-bordered table-hover display nowrap margin-top-10 table-responsive">
                        <thead>

                            <tr>
                                <th>S/N</th>
                                <th>Test Name</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $x=1;?>
                            @foreach($all_detail as $detail)
                                <tr>
                                    <td>{{ $x }}</td>
                                    <td>{{ $detail->sub_test_name}}</td>
                                    <td>
                                        @if($detail->status==1)
                                            <button class="btn btn-success">Positive</button>
                                        @else
                                            <button class="btn btn-danger">Negative</button>
                                        @endif
                                    </td>
                                    <td>{{ $detail->created_at }}</td>
                                </tr>
                                <?php $x++;?>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
</div>
@endsection
