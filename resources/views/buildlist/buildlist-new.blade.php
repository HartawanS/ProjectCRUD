<title>Project Manager | Edit Buildlist</title>
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
             <li class=""><a href="{{ route('master.index') }}"> <i class="fa fa-user"></i> <span>User</span></a></li>
             <li class="active"><a href="{{ route('home') }}"><i class="fa fa-files-o"></i><span>Project</span></a></li>
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
        <small>New Builds</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i> Project</a></li>
        <li class="">{{$projectname->name}}</li>
        <li class="active">New Builds</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Builds</a></li>
              <li><a href="{{route('userlist.index',$id)}}" >Users</a></li>
              <!--data-toggle="tab"-->
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">

                  <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-files-o"></i>

              <h3 class="box-title">{{$projectname->name}} - New Builds</h3>
              <div class="box-tools">
              
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
@include('error.errors')

              <form class="col-md-4 col-md-offset-4 " action="{{route('buildlist.insert',$id)}}" method="post">
              {{csrf_field()}}

              <input type="hidden" name="idproject" value="{{$id}}" >
              <input type="hidden" name="version" value="1" >
                <div class="form-group">
                  <select name="type" class="form-control">
                   {{--  <option selected disabled hidden>Type</option> --}}
                    <option value="Development" selected>Development</option>
                    <option value="Staging">Staging</option>
                    <option value="Production">Production</option>
                  </select>
                </div>

                <div class="form-group">
                  <input type="text" value="{{ old('link_file_APK') }}" class="form-control" name="link_file_APK"  placeholder="File Link" >
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="note" placeholder="Note">{{ old('note') }}</textarea>
                </div>

                <div class="pull-right">
                <a  class=" btn btn-primary" href="{{ route('buildlist.index',$id)}}">Back </a>
                <button type="submit" class=" btn btn-success" id="create">Create</button>
                </div>
              </form>

            </div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">

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