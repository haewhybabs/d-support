@extends('layouts.main')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pending Diagnosis</h3>
                <h6 class="box-subtitle">Unattended patients for diagnosis</h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example"
                    class="table table-bordered table-hover display nowrap margin-top-10 table-responsive">
                    <thead>

                        <tr>
                            <th>Name</th>
                            <th>Scheduled Appointment</th>
                            <th>Patient_Reference</th>
                            <th>Diagnosis Questions</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($diagnosis as $diagnose)
                        <tr>
                            <td>{{ $diagnose->username }}</td>
                            <td>{{ $diagnose->appointment_time }}</td>
                            <td>RF0{{ $diagnose->user_id }}0105</td>
                            <td><a href="{{ URL::to('view_result') }}/{{ $diagnose->pqt_summary_id }}" class="btn btn-warning btn-xs">View</a></td>
                            <td>
                                @if($diagnose->diagnosis_status==2)
                                    <p>Diagnosis Initiated</p>
                                @elseif($diagnose->diagnosis_status==1)
                                    <p>Diagnosis Completed</p>
                                @else
                                    <p>Not Yet Initiated</p>
                                @endif
                            </td>
                            <td>
                                @if($diagnose->diagnosis_status==2)
                                    <a href="{{ URL::to('sub_test_flow')}}/{{ $diagnose->diagnosis_id }}" class="btn btn-info btn-xs">Diagnosis Test</a>
                                @elseif($diagnose->diagnosis_status==1)
                                    <a href="{{ URL::to('success_diagnosis')}}/{{ $diagnose->diagnosis_id }}" class="btn btn-info btn-xs">Diagnosis Test</a>
                                @else
                                    <a href="{{ URL::to('diagnosis_test')}}/{{ $diagnose->diagnosis_id }}/{{ $diagnose->user_id }}" class="btn btn-info btn-xs">Diagnosis Test</a>
                                @endif
                                <a href="#" class="btn btn-info btn-xs" disabled="">Schedule Appointment</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>


            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>


<div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Treated Diagnosis</h3>
                    <h6 class="box-subtitle">Tests has been completed</h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1"
                        class="table table-bordered table-hover display nowrap margin-top-10 table-responsive">
                        <thead>

                            <tr>
                                <th>Name</th>
                                <th>Patient_Reference</th>
                                <th>Diagnosis Questions</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($attended as $diagnose)
                            <tr>
                                <td>{{ $diagnose->username }}</td>
                                <td>RF0{{ $diagnose->user_id }}0105</td>
                                <td><a href="#" class="btn btn-warning btn-xs">View</a></td>
                                <td>
                                    @if($diagnose->diagnosis_status==2)
                                        <p>Diagnosis Initiated</p>
                                    @elseif($diagnose->diagnosis_status==1)
                                        <p>Diagnosis Completed</p>
                                    @else
                                        <p>Not Yet Initiated</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ URL::to('success_diagnosis')}}/{{ $diagnose->summary_id }}" class="btn btn-info btn-xs">Diagnosis Test</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>


                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
        <!-- /.row -->

@endsection
    <!-- /.content -->
