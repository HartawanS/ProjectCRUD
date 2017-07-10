<title>Project Manager | New Userlist</title>
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
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('template/dist/img/user.jpg')}}" class="img-circle" style="margin: 5px 0px;" alt="User Image">
        </div>
        <div class="pull-left info ">
          <p> {{ Auth::user()->name }} </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
        <div class="profile-edit">
              <a href="#" class="profile-edit-btn"><i class="fa fa-gear"></i></a>
              <ul>
                <li><a href="{{ route('changepassword') }}">Edit Password</a></li>
                <li><a href="#">Edit Profile</a></li>
              </ul>
          </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
             <li class=""><a href="{{ route('master.index') }}"> <i class="fa fa-user"></i> <span>User</span></a></li>
             <li class="active"><a href="{{ route('home') }}"><i class="fa fa-files-o"></i><span>Project</span></a></li>
             <ul class="treeview-menu menu-open" style="display: block;">
                <li><a href="{{route('buildlist.index',$id)}}"><i class="fa fa-circle-o"></i> Build List</a></li>
                 <li class="active"><a href="#"><i class="fa fa-circle-o"></i> User List</a></li>
             </ul>
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
        <small>New User List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i> Projects</a></li>
        <li class="">{{$projectname->name}}</li>
        <li class="active">New User List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box box-primary">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-files-o"></i>

              <h3 class="box-title">{{$projectname->name}} - New User List</h3>
              <div class="box-tools">
              
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
@include('error.errors')

              <form class="col-md-12" action="{{route('userlist.insert',$id)}}" method="post">
              {{csrf_field()}}

              <input type="hidden" name="idproject" value="{{$id}}" >
              
              <div class="box-body">
              <div class="col-md-6">
                <h2>Add Users :</h2>
              </div>
              <div class="col-md-12"> 
              <table id="sortable" class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th width="10%" style="text-align: center" ></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($Master as $MU)
                    <tr>
                      <td><input type="checkbox" name="iduser[]" value="{{$MU->id}}"></td>
                      <td>{{$MU->name}}</td>
                      <td>{{$MU->email}}</td>
                      <td>{{$MU->type}}</td>
                    </tr>
                  
                  @endforeach
                </tbody>
              </table>
              <div class="pull-right">
                  <a  class=" btn btn-primary" href="{{ route('userlist.index',$id)}}"><i class="fa fa-angle-double-left"></i><span> Back</span></a>
                  <button type="submit" class=" btn btn-success" id="create">OK</button>
                </div>
              </div>
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