<title>Project Manager | Edit Buildlist</title>
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
          <img src="template/dist/img/user.jpg" class="img-circle" style="margin: 5px 0px;" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{'Username'}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="index.html"><i class="fa fa-circle-o"></i>Create User</a></li>
            <li class=""><a href="index.html"><i class="fa fa-circle-o"></i> Manage User</a></li>
          </ul>
        </li>
       <li class="active treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Projects</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="index.html"><i class="fa fa-circle-o"></i>Create Project</a></li>
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Manage Project</a></li>
          </ul>
        </li>
             <li><a href="#"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{'Project_Name'}}
        <small>Edit Build List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i> Projects</a></li>
        <li class="">Manage Project</li>
        <li class="">{{'Project_Name'}}</li>
        <li class="active">{{'BuildList_type'}}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box box-primary">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-files-o"></i>

              <h3 class="box-title">Edit Build List - {{'Project_Name'}} - {{'BuildList_Type'}}</h3>
              <div class="box-tools">
              
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
                @yield('error')

              <form class="col-md-4 col-md-offset-4 " action="#" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="username" value="{{ 'BuildList_Type' }}" placeholder="Build List Type" >
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="username" value="{{ 'BuildList_Link' }}" placeholder="File Link" >
                </div>
                <div class="form-group">
                  <label>Note : </label>
                  <textarea>{{ 'BuildList_Note' }}</textarea>
                </div>
                <button type="submit"  class="pull-right btn btn-success" id="create">Ok
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

@endsection