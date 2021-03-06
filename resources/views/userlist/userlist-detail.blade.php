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
          <li class=""><a href="#"><i class="fa fa-user"></i> <span>User</span></a></li>
          <li  class="active"><a href="{{ route('home') }}"><i class="fa fa-files-o"></i><span>Project</span></a></li>
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

        {{$projectname->name}}
        <small>User Detail</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i> Project</a></li>
        <li class="">{{$projectname->name}}</li>
        <li class="active">{{$userlist->type}}</li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li><a href="{{route('buildlist.index',$id)}}">Build List</a></li>
              <!--data-toggle="tab"-->
              <li class="active"><a href="#tab_2" data-toggle="tab">Users</a></li>

            </ul>
            <div class="tab-content">
              <div class="tab-pane " id="tab_1">

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane active" id="tab_2">




            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-user"></i>


              <h3 class="box-title">User Detail - {{$projectname->name}} - {{$userlist->type}}</h3>

              <div class="box-tools">
               
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="col-md-6">
                <div class="box box-solid">
                  <div class="box-header with-border">
                    <i class="fa fa-list-alt"></i>


                    <h3 class="box-title">{{ $userlist->type }}
                        <small class="label label-default"><i class="fa fa-clock-o"> Updated at </i> {{$userlist->updated_at->diffForHumans()}}</small>
                    </h3>

                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <dl class="dl-horizontal">


                      <dt>Name</dt>
                      <dd>{{ $userlist->name }}</dd>
                      <dt>Email</dt>
                      <dd>{{ $userlist->email }}</dd>
                      <dt>Type</dt>
                      <dd>{{ $userlist->type }}</dd>
                      
                    </dl>
                     <div class="tools">
                    <a class="btn btn-xs btn-primary pull-right" href="{{ route('userlist.index',$userlists->idproject)}}"> Back</a>

                  </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>

            </div>
            <!-- /.box-body -->


              </div>
              
            </div>
            <!-- /.tab-content -->
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