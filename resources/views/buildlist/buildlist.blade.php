<title>Project Manager | Build List</title>
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
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
             <li class=""><a href="{{ route('master.index') }}"> <i class="fa fa-user"></i> <span>User</span></a></li>
             <li class="active"><a href="{{ route('home') }}"><i class="fa fa-files-o"></i><span>Project</span></a></li>
             <ul class="treeview-menu menu-open" style="display: block;">
                    <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Build List</a></li>
                    <li><a href="{{route('userlist.index',$id)}}"><i class="fa fa-circle-o"></i> User List</a></li>
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
        <small>Manage Build List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i> Projects</a></li>
        <li class="">{{$projectname->name}}</li>
        <li class="active">Manage Build List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box box-primary">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-files-o"></i>

              <h3 class="box-title">Manage Build List</h3>
              <div class="box-tools">
              <a class="btn btn-primary" href="{{ route('home') }}"><i class="fa fa-angle-double-left"></i> Back</a>
               <a class="btn btn-success" href="{{ route('buildlist.add',$id) }}"><i class="fa fa-plus-circle"></i> <span>New build list</span></a>
              </div>
            </div>
            
            
            <div class="box-body"> 
              <table id="sortable" class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th width="10%" style="text-align: center">No</th>
                    <th>Type</th>
                    <th>Version</th>
                    <th>Note</th>
                    <th>Link APK</th>
                    <th width="30%">Join At</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;?>
                  @foreach($buildlists as $BL)
                    <tr onclick="location.href='{{route('buildlist.detail', $BL->id)}}'" style="cursor: hand;">
                      <td align="center">{{$i++}}</td>
                      <td>{{$BL->type}}</td>
                      <td>{{$BL->version}}</td>
                      <td>{{$BL->note}}</td>
                      <td>{{$BL->link_file_APK}}</td>
                      <td>
                      <div class="col-md-6">
                      {{$BL->created_at->toFormattedDateString()}}
                      </div>
                      <div class="col-md-6 pull-right" style="margin: 5px 0px;">
                          <a href="{{ route('buildlist.edit', $BL->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> <span> Edit </span></a>
                          <a href="{{ route('buildlist.delete', $BL->id) }}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash"></i> <span> Delete </span></a>
                      </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
              <!-- <ul class="todo-list ui-sortable">
              
              @foreach($buildlists as $buildlist)
                <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  {{-- <input type="checkbox" value=""> --}}
                  <span class="text"> <a href="{{route('buildlist.detail',$buildlist->id)}}"> {{$buildlist->type}}</a></span>
                  <small class="label label-default"><i class="fa fa-clock-o"></i> {{$buildlist->updated_at->diffForHumans()}}</small>
                  <div class="tools">
                   <a href="{{ route('buildlist.edit', $buildlist->id) }}" class="label label-warning"> Edit </a>
                    <a href="{{ route('buildlist.delete', $buildlist->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')"> Delete </a>
                  </div>
                </li>
              @endforeach

              </ul> -->
            

            <!-- /.box-body -->

            <!-- <div class="box-footer clearfix no-border  pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">«</a></li>
                  <li><a href="#">1</a></li>
{{--                   <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li> --}}
                  <li><a href="#">»</a></li>
                </ul>
              </div> -->
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