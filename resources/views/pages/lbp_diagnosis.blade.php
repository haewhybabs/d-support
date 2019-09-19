@extends('layouts.main')
@section('content')
<div>
    <div class="col-md-12 col-lg-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Low Back Pain Preliminary Diagnosis</h3>
            </div>

            <div class="box-body">
                <?php $x=0;?>
                @foreach($questions as $question)
                <form action="{{ route('lbp_diagnosis_action') }}" method="post">
                    @csrf
                    <div class="container">
                        <div class="row">

                            <div class="col-xs-2 number">
                                {{ $x+1 }}.
                            </div>
                            <div class="col-xs-10">
                                <p class="question">
                                    {{ $question->question }}
                                    <input type="hidden" name="question_id[]" value="{{ $question->id }}">
                                </p>
                            </div>
                        </div>

                    </div>
                    <?php $options=DB::table('diagnosis_question_outcome')->where('diagnosis_question_id',$question->id)->get();?>
                    @foreach($options as $option)
                    <div class="form-group">
                        <div class="radio">
                            <input name="option[{{ $x }}]" type="radio" id="Option_{{ $option->id }}" value="{{ $option->id }}">
                            <label for="Option_{{ $option->id }}">{{ $option->outcome }}</label>
                        </div>
                    </div>
                    @endforeach
                    <?php $x++;?>
                    @endforeach
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-lg"> Submit </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
