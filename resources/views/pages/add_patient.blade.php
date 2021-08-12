@extends('layouts.main')
@section('content')

    <div class="row">
            <!-- left column -->
        <div class="col-xl-9 col-lg-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Patient</h3>
                </div>

                <form role="form" class="form-element" action="{{ route('add_patient_action') }}" method="post">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="username">First Name</label>
                            <input type="username" class="form-control" id="exampleInputEmail1" placeholder="Enter the user firstname" name="username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword">Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password" name="password">
                        </div>

                        {{-- <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">

                            <p class="help-block text-red">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="basic_checkbox_1">
                            <label for="basic_checkbox_1">Check me out</label>
                        </div> --}}
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
