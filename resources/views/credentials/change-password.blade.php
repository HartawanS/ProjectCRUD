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
      <div class="user-panel profile-container">
        <div class="pull-left image">
          <img src="{{asset('template/dist/img/user.jpg')}}" class="img-circle" style="margin: 5px 0px;" alt="User Image">
        </div>
        
        <div class="pull-left info ">
          <p> {{ Auth::user()->name }} </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
        <div class="profile-edit">
              <a href="#" class="profile-edit-btn"><i class="fa fa-pencil"></i></a>
              <ul>
                <li><a href="{{ route('changepassword') }}">Edit Password</a></li>
                <li><a href="#">Edit Profile</a></li>
              </ul>
          </div>
      </div>
      <style type="text/css">
        .profile-container{
          position: relative;
          overflow: visible!important;
        }
        .profile-edit .profile-edit-btn{
          position: absolute;
          top: 15px;
          right: 10px;

        }
        .profile-edit ul{
          position: absolute;
          top: 35px;
          right: 10px;
          background: #FFF;
          padding: 10px 20px;
          z-index: 999;
          display: none;
        }
        .profile-edit ul.show{
          display: inherit;
        }
        .profile-edit ul li{
          list-style: none;
        }
        .profile-edit ul li a{
          color: #666!important;
        }
      </style>
      <script>
        $('document').ready(function(){
          $('.profile-edit-btn').click(function(){
            if($('.profile-edit ul').hasClass('show')){
              $('.profile-edit ul').removeClass('show');
            }else{
              $('.profile-edit ul').addClass('show');
            }
          })
        })
      </script>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
          <li><a href="{{ route('master.index') }}"><i class="fa fa-user"></i> <span>User</span></a></li>
          <li><a href="{{ route('home') }}"><i class="fa fa-files-o"></i> <span>Projects</span></a></li>
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

              <h3 class="box-title">Change Password</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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
                <button type="submit"  class=" btn btn-success" id="create"> Change
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
