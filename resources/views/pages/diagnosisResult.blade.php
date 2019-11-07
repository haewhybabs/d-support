@extends('layouts.main')
@section('content')
<div>
    <div class="col-md-12 col-lg-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Low Back Pain Preliminary Diagnosis Result</h3>
            </div>
            <div class="row">
                <div class="col-sm-6">

                    <div class="box-body">
                        <div class="container">
                            <?php $x=0;?>
                            @foreach($userOption as $answer)
                                <div class="row">
                                    <div class="col-xs-2 number">
                                        {{ $x+1 }}.
                                    </div>
                                    <div class="col-xs-10">
                                        <p class="question">
                                            {{ $answer->question }}
                                        </p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-xs-10">
                                        <p class="option">
                                            {{ $answer->outcome }}
                                        </p>
                                    </div>
                                </div>
                                <?php $x++;?>

                            @endforeach

                            @foreach($userResponse as $answer)
                                <div class="row">
                                    <div class="col-xs-2 number">
                                        {{ $x+1 }}.
                                    </div>
                                    <div class="col-xs-10">
                                        <p class="question">
                                            {{ $answer->question }}
                                        </p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-xs-10">
                                        <p class="option">
                                            {{ $answer->response }}
                                        </p>
                                    </div>
                                </div>
                                <?php $x++;?>

                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-sm-6">

                    <div class="box-header text-center ">
                        <h3 class="box-title result">Diagnosis Result</h3>
                    </div>
                    @foreach($results as $result)
                        <div class="row text-center">
                            <div class="col-sm-12">

                                <input type="checkbox" id="basic_checkbox_2" class="chk-col-red" checked />
                                <label for="basic_checkbox_2">{{ $result->name }}</label>

                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
