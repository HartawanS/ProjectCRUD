<title>User Manager</title>
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
        <small>Manage User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> User</a></li>
        <li class="active">Manage User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box box-primary">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-user"></i>

              <h3 class="box-title">Users</h3>
              <div class="box-tools">
{{--                 <div class="pull-right">
                  <a class="btn btn-success" href="{{ route('master.add') }}"><i class="fa fa-plus-circle"></i> <span>Add User</span></a>

                </div> --}}
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
                    <th>Email</th>
                    <th>Type</th>
                    <th width="30%">Join At</th>
                  </tr>
                </thead>

                <tbody>
{{--                 @if($Master->isEmpty())
                  <div class="form-group">
               <div class="well well-sm">
                        <b> Empty set</b> no any users to view
              </div>
              </div>
              @endif --}}

                  <?php $i = 1;?>
                  @foreach($Master as $MU)
                    <tr class="" onclick="location.href='{{route('master.detail', $MU->id)}}'" style="cursor: hand;">
                      <td align="center">{{$i++}}</td>
                      <td>{{$MU->name}}</td>
                      <td>{{$MU->email}}</td>
                      <td>{{$MU->type}}</td>
                      <td>
                      <div class="col-md-6">
                      {{$MU->created_at->toFormattedDateString()}}
                      </div>
                     {{--  <div class="col-md-6 pull-right " style="margin: 5px 0px;">
                          <a href="{{ route('master.edit', $MU->id)}}" class="btn btn-xs btn-warning" ><i class="fa fa-pencil"></i> <span> Edit </span></a>
                          <a href="{{ route('master.delete', $MU->id) }}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete?')"> <i class="fa fa-trash"></i> <span> Delete </span></a>
                      </div> --}}
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

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