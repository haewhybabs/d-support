@extends('layouts.main')
@section('content')

    <div class="row">
            <!-- left column -->
        <div class="col-xl-9 col-lg-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Diagnosis Result</h3>
                </div>

                <form role="form" class="form-element" action="{{ route('add_possible_diagnosis_action') }}" method="post">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Diagnosis Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter the diagnosis name" name="diagnosis">
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
