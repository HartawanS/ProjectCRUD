<title>503 Error Forbidden</title>
@extends('layouts.home')

@section('content')
        <div class="error-content col-md-12">
	      <div class="error-page">
        <h2 class="headline text-red"><b>:(</b> 503</h2>
<div class="col-md-12" style="height: 80%">
<hr>
          <h3><i class="fa fa-warning text-red"></i> Access Denied/Forbidden.</h3>

          <p>
            You don't have permission to access this server
          </p>

         {{--  <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-danger btn-flat"><i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form> --}}
          </div>
        </div>
      </div>

@endsection