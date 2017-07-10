<title>User | User Detail</title>
@extends('layouts.home')

@section('content')

  <div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo" >
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>DOT</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PT.DOT</b>
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
          <li class="active"><a href="#"><i class="fa fa-user"></i> <span>User</span></a></li>
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
        User
        <small>User Detail</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> User</a></li>
        <li class="">Manage User</li>
        <li class="active">{{ $MU->name }}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box box-primary">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-user"></i>

              <h3 class="box-title">User Detail - {{ $MU->name }}</h3>
              <div class="box-tools">
               
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="col-md-6">
                <div class="box box-solid">
                  <div class="box-header with-border">
                    <i class="fa fa-list-alt"></i>

                    <h3 class="box-title">{{ $MU->name }} <small class="label label-default"><i class="fa fa-clock-o"> Joined </i> {{$MU->created_at->format('d/m/Y')}}</small></h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <dl class="dl-horizontal">
                      <dt>Username</dt>
                      <dd>{{ $MU->name }}</dd>
                      <dt>Email</dt>
                      <dd>{{ $MU->email }}</dd>
                      <dt>Type</dt>
                      <dd>{{ $MU->type }}</dd>
                    </dl>
                    <div class="tools">
                   {{--  <a href="{{ route('master.edit', $MU->id)}}" class="btn btn-xs btn-warning"> Edit </a>
                    <a href="{{ route('master.delete', $MU->id) }}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete?')"> Delete </a> --}}
                    <a class="btn btn-xs btn-primary pull-right" href="{{ route('master.index')}}"> Back</a>
                  </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>

            </div>
            <!-- /.box-body -->


          </div>
        
        <!-- ./col -->
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
{{--   <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
 --}}
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