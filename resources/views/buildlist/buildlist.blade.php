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
        <small>Manage Builds</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i> Project</a></li>
        <li class="">{{$projectname->name}}</li>
        <li class="active">Manage Builds</li>
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

                    <h3 class="box-title">Manage Builds</h3>
                    <div class="box-tools">
{{--                       <a class="btn btn-primary" href="{{ route('home') }}"><i class="fa fa-angle-double-left"></i><span> Back</span></a> --}}
                      <a class="btn btn-success" href="{{ route('buildlist.add',$id) }}"><i class="fa fa-plus-circle"></i> <span>New Build</span></a>
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
                          <th width="30%">Created At</th>
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