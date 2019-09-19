@extends('layouts.main')
@section('content')
<div>
    <div class="col-md-12 col-lg-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Diagnosis Summary</h3>
                <h6 class="box-subtitle">{{ $user->username }}</h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example"
                    class="table table-bordered table-hover display nowrap margin-top-10 table-responsive">
                    <thead>

                        <tr>
                            <th>S/N</th>
                            <th>Test Name</th>
                            <th>Result</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $x=1;?>

                        @foreach($all_details as $detail)
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
                            <td>
                                {{ $detail->created_at }}
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
