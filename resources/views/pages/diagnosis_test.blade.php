@extends('layouts.main')
@section('content')
<div class="col-md-12 col-lg-12">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="card-title">Diagnosis Test For {{ $user->username }}</h3>
            <h6 class="card-subtitle">Head Test <code>vtabs & tabs-vertical</code></h6>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <!-- Nav tabs -->
            <div class="vtabs">
                <ul class="nav nav-tabs tabs-vertical" role="tablist">
                    @foreach($head_tests as $head_test)

                        <li class="nav-item">
                            @if($head_test->id==1)
                                <a class="nav-link active" data-toggle="tab" href="#test{{ $head_test->id }}" role="tab">
                            @else
                                <a class="nav-link" data-toggle="tab" href="#test{{ $head_test->id }}" role="tab">
                            @endif
                                <span
                                    class="hidden-sm-up"><i class="ion-home"></i>
                                </span>
                                <span
                                    class="hidden-xs-down">{{ $head_test->head_test_name }}
                                </span>
                            </a>
                        </li>

                    @endforeach


                    <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile4" role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down">Profile</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages4" role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages5" role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">Messages</span></a> </li> -->
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    @foreach($head_tests as $head_test)
                    @if($head_test->id==1)
                        <div class="tab-pane active" id="test{{ $head_test->id }}" role="tabpanel">
                    @else
                        <div class="tab-pane pad" id="test{{ $head_test->id }}" role="tabpanel">
                    @endif
                            <div class="pad">
                                <h3>{{ $head_test->head_test_name }}</h3>
                                <a href="{{ URL::to('head_test_action') }}/{{ $head_test->id}}/{{ $diagnosis_id }}" class="btn btn-success btn-lg"> Positive</a><br>

                                <p class="head_test_tab_select">* Please, Selelect the next Tab if the result is negative</p>
                                {{-- <h4>you can use it with the small code</h4>
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                    rhoncus ut, imperdiet a.</p> --}}
                            </div>
                        </div>
                    @endforeach
                    <div class="tab-pane pad" id="profile4" role="tabpanel">2</div>
                    <div class="tab-pane pad" id="messages4" role="tabpanel">3</div>
                    <div class="tab-pane pad" id="messages5" role="tabpanel">message 5</div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
@endsection
