@extends('layouts.main')
@section('content')
<div>
    <div class="col-md-12 col-lg-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Diagnosis Question</h3>
            </div>
            <div class="text-right">
                <a href="{{route('add_diagnosis_question')}}" class="btn btn-success">Add Question</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example"
                    class="table table-bordered table-hover display nowrap margin-top-10 table-responsive">
                    <thead>

                        <tr>
                            <th>S/N</th>
                            <th>Question</th>
                            <th>Outcomes</th>
                            <th>Label</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $x=1;?>

                        @foreach($questions as $detail)
                        <tr>
                            <td>{{ $x }}</td>
                            <td>{{ $detail->question}}</td>
                            <td>
                                outcomes
                            </td>
                            <td>{{ $detail->label }}</td>
                            <td>
                                <a href="#" class="btn btn-info">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>

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




