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
                    <h3>20</h3>

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
                    <h3>67<sup style="font-size: 20px">%</sup></h3>

                    <p>Account</p>
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
                    <h3>50</h3>

                    <p>Total Messages</p>
                </div>
                <div class="icon">
                    <i class="fa fa-envelope"></i>
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

                    <p>User Activities</p>
                </div>
                <div class="icon">
                    <i class="fa fa-pie-chart"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>

    <div class="row">
        <!-- Left col -->
        {{-- <section class="col-xl-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs float-right clearfix">
                    <li><a class="active" href="#revenue-chart" data-toggle="tab">Growth</a></li>
                    <li><a href="#sales-chart" data-toggle="tab">Count</a></li>
                    <li class="float-left header"><i class="fa fa-bar-chart-o"></i> Sales Overview</li>
                </ul>
                <div class="tab-content no-padding">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 350px;">
                    </div>
                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 350px;">
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="col-xl-12 connectedSortable">

            <div class="box box-info">
                <div class="box-header">
                    <i class="fa fa-envelope"></i>

                    <h3 class="box-title">Contact Therapist</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-danger btn-sm" data-widget="remove" data-toggle="tooltip"
                            title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                    <!-- /. tools -->
                </div>
                <div class="box-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <div>
                            <textarea class="textarea" placeholder="Message"
                                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                    </form>
                </div>
                <div class="box-footer clearfix">
                    <button type="button" class="pull-right btn btn-blue" id="sendEmail"> Send <i
                            class="fa fa-paper-plane-o"></i></button>
                </div>
            </div>


        </section>
    </div>



</section>


@endsection
