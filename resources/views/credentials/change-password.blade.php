<title>Change Password</title>
@extends('layouts.home')

@section('content')

  <div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>DOT</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" ><b>PT.DOT</b>
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->

  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
@include('layouts.user_panel')
   
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
          <li><a href="{{ route('master.index') }}"><i class="fa fa-user"></i> <span>User</span></a></li>
          <li><a href="{{ route('home') }}"><i class="fa fa-files-o"></i> <span>Project</span></a></li>
          <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{$Master->name}}
        <small>Change Password</small>
      </h1>
{{--       <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i> Project</a></li>
        <li class="active">Manage Project</li>
      </ol> --}}
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->

      <div class="row">
        <div class="box box-primary">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-files-o"></i>

              <h3 class="box-title">Change Password - {{ $Master->name }}</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @include('error.errors')
            <!-- <ul class="todo-list ui-sortable"> -->
             <form class="col-md-4 col-md-offset-4 " action="{{ route('changepassword.update', $Master->id) }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                  <input type="password" class="form-control" name="oldpassword" placeholder="Old Password" required>
                </div>
                
                <div class="form-group">
                  <input type="password" class="form-control" name="newpassword"  placeholder="New Password" required>
                </div>

                <div class="form-group">
                  <input type="Password" class="form-control" name="newpassword_confirmation" placeholder="Confirmation Password" required>
                </div>

                <div class="pull-right">
                <button type="submit"  class=" btn btn-success" id="create"> Save Change
                </div>
              </form>

            </div>
            <!-- /.box-body -->

        <!-- ./col -->
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
   
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
@include('layouts.footer')    
@endsection
