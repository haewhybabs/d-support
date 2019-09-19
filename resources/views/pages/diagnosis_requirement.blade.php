@extends('layouts.main')
@section('content')
<div>
    <div class="col-md-12 col-lg-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Diagnosis Question</h3>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('requirement_exception')}}" class="btn btn-warning">Diagnosis Requirement Exception</a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{route('add_diagnosis_requirement')}}" class="btn btn-success">Add Requirement</a>
                    </div>
                </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                <table id="example"
                    class="table table-bordered table-hover display nowrap margin-top-10 table-responsive">
                    <thead>

                        <tr>
                            <th>S/N</th>
                            <th>Diagnosis Test</th>
                            <th>Question</th>
                            <th>Expected Outcome</th>
                            <th>Alternative Question</th>
                            <th>Alternative Outcome</th>
                            {{-- <th>Alternative</th> --}}

                        </tr>
                    </thead>
                    <tbody>
                        <?php $x=1;?>

                        @foreach($data as $detail)
                        <?php $alternative=DB::table('diagnosis_questions')->where('id',$detail->alternative_id)->get();
                              $altoutcome=DB::table('diagnosis_question_outcome')->where('id',$detail->alternative_outcome)->get();
                        ?>

                        <tr>
                            <td>{{ $x }}</td>
                            <td>{{ $detail->name}}</td>
                            <td>
                                    {{ $detail->question}}
                            </td>
                            <td>{{ $detail->outcome }}</td>
                            <td>
                                @foreach($alternative as $alt)
                                {{ $alt->question }}
                                @endforeach

                            </td>

                            <td>
                                @foreach($altoutcome as $out)
                                {{ $out->outcome }}
                                @endforeach

                            </td>
                            {{-- <td>
                                <a href="#" class="btn btn-info">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td> --}}

                        </tr>
                        <?php $x++;?>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection




