<title>PT.DOT | Reset Password</title>
@extends('layouts.home')
<body class="hold-transition login-page">
@section('content')
@include('layouts.navbar')
{{-- Login Box --}}
<div class="login-box">
{{-- Login Header --}}
{{--   <div class="login-logo">
    <a href="https://dot.co.id"><b>PT.DOT</b>Indonesia</a>
  </div> --}}
  {{-- Login Header Ends --}}
  <div class="box box-info ">
            <div class="box-header">
              <i class="fa fa-refresh"></i>

              <h3 class="box-title">Reset Password</h3>
<hr>
              <!-- /. tools -->
            </div>
            <div class="box-body">
             @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
              <form action="{{ route('password.email') }}" method="post">
{{ csrf_field() }}

                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="name">E-Mail Address</label>

                         
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>


          <div class="row">

        <!-- /.col -->
        <div class="col-xs-8">
          <a href="{{ route('login') }}">I already have membership</a><br>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Confirm</button>
        </div>
        <!-- /.col -->
      </div>
              </form>
            </div>
{{--             <div class="box-footer clearfix">
              
            </div> --}}
  </div>
  </div>
  {{-- Login Box Ends --}}

@include('layouts.footer')         
@endsection
</body>