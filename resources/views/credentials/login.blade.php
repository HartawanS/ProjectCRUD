@extends('layouts.home')

@section('content')
<div class="col-md-4 col-md-offset-4">
  <div class="box box-info ">
            <div class="box-header">
              <i class="fa fa-user"></i>

              <h3 class="box-title">Login</h3>
<hr>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="subject" placeholder="Password">
                </div>

              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-primary" id="login">Login
               </button>
            </div>
          </div>
          
@endsection