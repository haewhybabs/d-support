@extends('layouts.main')
@section('content')
<div>
    <div class="col-md-12 col-lg-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Diagnosis Result Summary</h3>
            </div>
            <div class="text-right">
                <a href="{{route('lbp_diagnosis')}}" class="btn btn-success">Diagnose LBP</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example"
                    class="table table-bordered table-hover display nowrap margin-top-10 table-responsive">
                    <thead>

                        <tr>
                            <th>S/N</th>
                            <th>status</th>
                            <th>Date</th>
                            <th>Result</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $x=1;?>

                        @foreach($summary as $detail)
                        <tr>
                            <td>{{ $x }}</td>
                            <td>initiated</td>
                            <td>{{ $detail->created_date}}</td>
                            <td>
                                <a href="{{ URL::to('view_result') }}/{{ $detail->id }}" class="btn btn-info">View</a>
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




