<title>Edit Project</title>
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
          <li class="active"><a href="#"><i class="fa fa-files-o"></i> <span>Project</span></a></li>
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
        Project
        <small>Edit Project</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i> Project</a></li>
        <li class="">Edit Project</li>
        <li class="active">{{$projectlist->name}}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box box-primary">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-files-o"></i>

              <h3 class="box-title">Edit Project - {{$projectlist->name}}</h3>
              <div class="box-tools">
              
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
@include('error.errors')

              <form class="col-md-4 col-md-offset-4 " action="{{ route('project.update', $projectlist->id) }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" class="form-control" name="name" value="{{ $projectlist->name }}" placeholder="Project Name" >
                </div>
                
                <div class="pull-right">
                <a  class=" btn btn-primary" href="{{ route('home')}}">Back </a>
                <button type="submit" class=" btn btn-success" id="create">Save</button>
                </div>
              </form>

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