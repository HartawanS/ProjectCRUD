<title>Project Manager</title>
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
        <small>Manage Project</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i> Project</a></li>
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

              <h3 class="box-title">Manage Project</h3>
              <div class="box-tools">
                <div class="pull-right">
                  <a class="btn btn-success" href="{{ route('project.add') }}"><i class="fa fa-plus-circle"></i> <span>New Project</span></a>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <!-- <ul class="todo-list ui-sortable"> -->
              <table id="sortable" class="table table-bordered table-hover table-striped">
                
                <thead>
                  <tr>

                    <th width="10%" style="text-align: center">No</th>
                    <th>Name</th>
                    <th>Created at</th>
                  
                  </tr>
                </thead>

                <tbody>
                  <?php $i = 1;?>
                  @foreach($projectlists as $project)
                    <tr class="" onclick="location.href='{{route('buildlist.index', $project->idproject)}}'" style="cursor: hand;">
                      
                      <td align="center">{{$i++}}</td>
                      <td>{{$project->name}}</td>
                      <td>
                        <div class="col-md-6">
                          {{$project->created_at->toFormattedDateString()}}
                        </div>
                        
                        <div class="col-md-6 pull-right " style="margin: 5px 0px;">
                          <a href="{{ route('project.edit', $project->idproject)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> <span> Edit </span> </a>
                          <a href="{{ route('project.delete', $project->id) }}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to remove?')"><i class="fa fa-trash"></i> <span> Delete</span></a>
                        </div>
                      </td>

                    </tr>
                  @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->

             <!-- @if($projectlists->isEmpty())
                  <div class="form-group">
               <div class="well well-sm">
                        <b> Empty set</b> no any projects to view
              </div>
              </div>
              @endif -->
              <!-- <ul class="todo-list ui-sortable">
              
             
                  @foreach($projectlists as $project)

                        <li>
                          <span class="handle ui-sortable-handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                          </span>
                         
                          <span class="text"><a href="{{ route('buildlist.index', $project->id) }}">{{$project->name}}</a></span>
                          <small class="label label-default"><i class="fa fa-clock-o"> Start at </i> {{$project->created_at->format('d/m/Y')}}</small>
                  
                        <div class="tools">
                          <a href="{{ route('project.edit', $project->id) }}" class="label label-warning"> Edit </a>
                          <a href="{{ route('project.delete', $project->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')"> Delete </a>
                        </div>
                      </li>
                    @endforeach
              </ul> -->
            
            <!-- <div class="box-footer clearfix no-border  pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">«</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li> 
                  <li><a href="#">»</a></li>
                </ul>
              </div>
          </div> -->
        
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
