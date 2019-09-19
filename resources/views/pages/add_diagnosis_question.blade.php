@extends('layouts.main')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <div class="row">
            <!-- left column -->
        <div class="col-xl-9 col-lg-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Diagnosis Question</h3>
                </div>

                <form role="form" class="form-element" action="{{ route('add_diagnosis_question_action') }}" method="post">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Question</label>
                            <input type="text" class="form-control" placeholder="Diagnosis Question" name="question">
                        </div>

                        <div class="text-center">
                            <input type="button" value="Add Option" class="btn btn-warning" id="clickable">
                            <input type="button" value="Use Label" class="btn btn-info" id="uselabel">
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">

                                    <div id="messages"></div><span id="remove"></span>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">

                                    <div id="label"></div>
                                </div>
                            </div>

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

    <script>
        $(function(){
            $('#clickable').click(function(){
                $('#messages').append('<input type="text" name="options[]" placeholder="Option" class="form-control" /><br>');

            });

            $('#uselabel').click(function(){
                $('#label').append('<input type="text" name="label" placeholder="Label" class="form-control" /><br>');
                $('#uselabel').hide();

            });


        });
    </script>
@endsection
