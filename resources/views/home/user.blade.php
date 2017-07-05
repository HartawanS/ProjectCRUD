<title>User Manager</title>
@extends('layouts.home')

@section('content')

  <div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo" >
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
        <li class="active"><a href="#"><i class="fa fa-user"></i> <span>User</span></a></li>
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

              <h3 class="box-title">Manage Users</h3>
              <div class="box-tools">
                <div class="pull-right">
                  <a class="btn btn-success" href="{{ route('master.add') }}"> Add User</a>

                </div>
              </div>
            </div>
            

            <!-- /.box-header -->
            <div class="box-body">
              <!-- <ul class="todo-list ui-sortable"> -->
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="50px" style="text-align: center">No</th>
                    
                    <th>
                      <a href="javascript:ajaxLoad('product/list?field=name&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">Name</a>
                    <i style="font-size: 12px"
                    class="glyphicon  {{ Session::get('product_field')=='name'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}"></i>
                    </th>
        
                    <th>
                      <a href="javascript:ajaxLoad('product/list?field=unitprice&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">Email</a>
                      <i style="font-size: 12px"
                        class="glyphicon  {{ Session::get('product_field')=='unitprice'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}"></i>
                    </th>
                    
                    <th>
                      <a href="javascript:ajaxLoad('product/list?field=unitprice&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">Password</a>
                      <i style="font-size: 12px"
                        class="glyphicon  {{ Session::get('product_field')=='unitprice'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}"></i>
                    </th>

                    <th>
                      <a href="javascript:ajaxLoad('product/list?field=unitprice&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')">Time Join</a>
                      <i style="font-size: 12px"
                        class="glyphicon  {{ Session::get('product_field')=='unitprice'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}"></i>
                    </th>

                    <th width="140px"></th>
                  </tr>
                </thead>

                <tbody>
                  <?php $i = 1;?>
                  @foreach($Master as $MU)
                    <tr>
                      <td align="center">{{$i++}}</td>
                      <td>{{$MU->name}}</td>
                      <td>{{$MU->email}}</td>
                      <td>{{$MU->password}}</td>
                      <td>{{$MU->created_at}}</td>
                      <td><a href="{{ route('master.edit', $MU->id)}}" class="label label-warning"> Edit </a>
                      <a href="{{ route('master.delete', $MU->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')"> Delete </a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- 
              @foreach($Master as $MU)
                <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>

                  <span class="text"><a href="{{ route('master.detail', $MU->id)}}">{{$MU->name}}</a></span>
                  <small class="label label-default"><i class="fa fa-clock-o"> Joined </i> {{$MU->created_at->format('d/m/Y')}}</small>
                  <div class="tools">
                    <a href="{{ route('master.edit', $MU->id)}}" class="label label-warning"> Edit </a>
                    <a href="{{ route('master.delete', $MU->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')"> Delete </a>
                  </div>
                </li>
              @endforeach -->

              <!-- </ul> -->
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