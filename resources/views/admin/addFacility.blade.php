@extends('admin.layout.master')

@section('title')
Facility
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Sport Facility
        <small>Administration</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Facility</li>
      </ol>
    </section>
    <section class="content">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div>
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="facilityName" name="facilityName" placeholder="Facility Name . . .">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <input type="text" class="form-control" id="facilityAddress" name="facilityAddress" placeholder="Facility Address . . .">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone</label>
                      <input type="text" class="form-control" id="facilityAddress" name="facilityAddress" placeholder="Facility Phone . . .">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Open Hour</label>
                      <input type="text" class="form-control" id="facilityOpen" name="facilityOpen" placeholder="Open Hour . . .">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Close Hour</label>
                      <input type="text" class="form-control" id="facilityClose" name="facilityClose" placeholder="Close Hour . . .">
                    </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
  </section>
</div>
@endsection
