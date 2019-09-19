@extends('layouts.main')
@section('content')
<div>
    <div class="col-md-12 col-lg-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Diagnosis Question</h3>
            </div>
            <div class="text-right">


                <a href="{{route('add_requirement_exception')}}" class="btn btn-success">Add Requirement Exception</a>

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
                            {{-- <th>Alternative</th> --}}

                        </tr>
                    </thead>
                    <tbody>
                        <?php $x=1;?>

                        @foreach($data as $detail)

                        <tr>
                            <td>{{ $x }}</td>
                            <td>{{ $detail->name}}</td>
                            <td>
                                    {{ $detail->question}}
                            </td>
                            <td>{{ $detail->outcome }}</td>

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




