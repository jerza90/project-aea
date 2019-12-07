@extends('layouts.app')

@section('content')
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <widget amount="150" label="New Orders" icon="ion ion-bag" href="#"></widget>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>44</h3>

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
           
            <!-- Main row -->
            <div class="row">
                
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                        <h3 class="box-title">Add New Client</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" enctype="multipart/form-data">
                            
                            <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Client Name</label>
                                            <input type="text" class="form-control" id="client_name" placeholder="Enter Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone No</label>
                                            <input type="text" class="form-control" id="client_phone_no" placeholder="Enter Phone No">
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Email</label>
                                        <input type="email" class="form-control" id="client_email placeholder" placeholder="Enter Email">
                                    </div>
                                    
                                    <div class="form-group">
                                    <label for="exampleInputFile">Country</label>
                                    <select class="form-control" name="client_country">
                                        <option value="1">Malaysia</option>
                                        <option value="1">Singapore</option>
                                        <option value="1">Indonesia</option>
                                    </select>

                                    <div class="form-group">
                                        <label for="image">Profile Image</label>
                                        <input type="file" name="user_avatar">
                                    </div>

                                    <!-- <p class="help-block">Example block-level help text here.</p> -->
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
                
            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
@endsection
