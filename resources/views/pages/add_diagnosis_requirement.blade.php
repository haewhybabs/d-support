@extends('layouts.main')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <div class="row">
            <!-- left column -->
        <div class="col-xl-9 col-lg-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Diagnosis Requirement</h3>
                </div>

                <form role="form" class="form-element" action="{{ route('add_diagnosis_requirement_action') }}" method="post">
                    @csrf
                    <div class="box-body">
                        <div class="form-group" id="diagnosisTest">
                            <label for="sel1">Diagnosis Test</label>
                            <select class="form-control" id="sel1" name="diagnosis_id">
                                <option>Select Test</option>
                                @foreach($diagnosisTests as $diagnosis)
                                    <option value="{{ $diagnosis->id }}">{{ $diagnosis->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" id="question">
                            <label for="sel1">Diagnosis Question</label>
                            <select class="form-control" id="selectquestion" name="question_id">
                                <option>Select Question</option>
                                @foreach($questions as $question)
                                    <option value="{{ $question->id }}">{{ $question->question }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" id="outcome">
                            <label for="sel1">Diagnosis Required Option</label>
                            <select class="form-control" id="selectoption" name="option_id">
                                <option>Select Question Option</option>
                            </select>
                        </div>

                        <div class="form-group" id="alternativeQuestion">
                            <label for="sel1">Alternative Diagnosis Question</label>
                            <select class="form-control" id="selectAlternativeQuestion" name="alternative_question_id">
                                <option value="">Select Question</option>
                                @foreach($questions as $question)
                                    <option value="{{ $question->id }}">{{ $question->question }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" id="alternative">
                            <label for="sel1">Diagnosis Alternative Option</label>
                            <select class="form-control" id="selectalternative" name="alternative_outcome">
                                <option value="">Select Question Option</option>
                            </select>
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
            $('#question').hide();
            $('#outcome').hide();
            $('#alternativeQuestion').hide();
            $('#alternative').hide();

            $('#diagnosisTest').change(function(){
                $('#question').show();

            });

            $('#selectquestion').change(function(e){
                e.preventDefault();

                if($(this).val() != '' )
                {
                    var value= $(this).val();
                    $.ajax({
                        url: "{{ route('getQuestionOption') }}",
                        method:"GET",
                        data:{value:value},
                        dataType:"json",

                        success:function(result)

                        {
                            $('#outcome').show();
                            $('#selectoption').html(result);
                            $('#alternativeQuestion').show();

                        }
                    })
                }

            });

            $('#selectAlternativeQuestion').change(function(e){
                e.preventDefault();

                if($(this).val() != '' )
                {
                    var value= $(this).val();
                    $.ajax({
                        url: "{{ route('getQuestionOption') }}",
                        method:"GET",
                        data:{value:value},
                        dataType:"json",

                        success:function(result)

                        {
                            $('#alternative').show();
                            $('#selectalternative').html(result);

                        }
                    })
                }

            });
        });
    </script>

@endsection
