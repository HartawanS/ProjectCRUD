<title>Project Manager</title>
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
          <li><a href="home.user"><i class="fa fa-user"></i> <span>User</span></a></li>
          <li><a href="#"><i class="fa fa-files-o"></i> <span>Projects</span></a></li>
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
        Projects
        <small>Manage Project</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i> Projects</a></li>
        <li class="active">Manage Project</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box box-primary">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-files-o"></i>

              <h3 class="box-title">Manage Projects</h3>
              <div class="box-tools">
              <div class="pull-right">
                <a class="btn btn-success" href="{{ route('project.add') }}"> New Project</a>
            </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="todo-list ui-sortable">
              
             
                  @foreach($projectlists as $project)

                        <li>
                          <span class="handle ui-sortable-handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                         
                          <span class="text"><a href="{{ route('project.buildlist', $project->idproject) }}">{{$project->project_name}}</a></span>
                  
                        <div class="tools">
                          <a href="{{ route('project.edit', $project->idproject) }}" class="label label-warning"> Edit </a>
                          <a href="{{ route('project.delete', $project->idproject) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')"> Delete </a>
                        </div>
                      </li>
                    @endforeach
              </ul>
            </div>
            <!-- /.box-body -->

            <div class="box-footer clearfix no-border  pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">«</a></li>
                  <li><a href="#">1</a></li>
{{--                   <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li> --}}
                  <li><a href="#">»</a></li>
                </ul>
              </div>
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