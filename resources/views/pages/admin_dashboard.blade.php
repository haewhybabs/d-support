@extends('layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-6 col-xl-3">
                <!-- small box -->
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3>255</h3>

                        <p>Diagnosis</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-shopping-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-6 col-xl-3">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>67</h3>

                        <p>Patients</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-bar-chart"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-6 col-xl-3">
                <!-- small box -->
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3>78</h3>

                        <p>Audit</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-6 col-xl-3">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Therapist</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-pie-chart"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">

        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

@endsection
