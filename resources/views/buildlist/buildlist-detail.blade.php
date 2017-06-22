<title>Project Manager | Detail Buildlist</title>
@extends('layouts.home')

@section('content')

  <div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
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
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('template/dist/img/user.jpg')}}" class="img-circle" style="margin: 5px 0px;" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{'Admin'}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
             <li class=""><a href="{{ route('master.index') }}"> <i class="fa fa-user"></i> <span>User</span></a></li>
             <li class="active"><a href="{{ route('home') }}"><i class="fa fa-files-o"></i><span>Project</span></a></li>
             <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> <span >Logout</span></a></li>
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
        <small>Build List Detail</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i> Projects</a></li>
        <li class="">Manage Project</li>
        <li class="">{{$projectname->name}}</li>
        <li class="active">{{$buildlist->type}}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box box-primary">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-files-o"></i>

              <h3 class="box-title">Build List Detail - {{$projectname->name}} - {{$buildlist->type}}</h3>
              <div class="box-tools">
              
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <div class="col-md-6">
                <div class="box box-solid">
                  <div class="box-header with-border">
                    <i class="fa fa-list-alt"></i>

                    <h3 class="box-title">{{ $buildlist->type }}
                        <small class="label label-default"><i class="fa fa-clock-o"> Updated at </i> {{$buildlist->updated_at->diffForHumans()}}</small>
                    </h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <dl class="dl-horizontal">
                      <dt>Type</dt>
                      <dd>{{ $buildlist->type }}</dd>
                      <dt>Link File APK</dt>
                      <dd>{{ $buildlist->link_file_APK }}</dd>
                      <dt>Note</dt>
                      <dd>{{ $buildlist->note }}</dd>
                      
                    </dl>
                     <div class="tools">
                   <a href="{{ route('buildlist.edit', $buildlist->id) }}" class="label label-warning"> Edit </a>
                    <a href="{{ route('buildlist.delete', $buildlist->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')"> Delete </a>
                    <a class="pull-right label label-primary" href="{{ route('buildlist.index',$buildlist->idproject)}}"> Back</a>
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

@endsection