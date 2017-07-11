<title>PT.DOT | Login</title>
@extends('layouts.home')
<body class="hold-transition login-page">
<div class="container">
@section('content')
@include('layouts.navbar')
{{-- Login Box --}}
<div class="login-box">
{{-- Login Header --}}

  <div class="login-logo">
    <a href="https://dot.co.id"><b>PT.DOT</b>Indonesia</a>
  </div>
  {{-- Login Header Ends --}}
  <div class="box box-info ">
            <div class="box-header">
              <i class="fa fa-user"></i>

              <h3 class="box-title">Login</h3>
<hr>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="{{ route('login') }}" method="post">
{{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>


                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" >Password</label>

                            
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                       

          <div class="row">
        <div class="col-xs-8">
        
              {{-- <input type="checkbox" {{ old('remember') ? 'checked' : '' }}> Remember Me
 --}}
              <a href="{{ route('password.request') }}">I forgot my password</a><br>
              <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
              </form>
            </div>
{{--             <div class="box-footer clearfix">
              <a href="{{ route('password.request') }}">I forgot my password</a><br>
              <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
            </div> --}}
  </div>
  </div>
  {{-- Login Box Ends --}}

@include('layouts.footer')         
@endsection
</div>
</body>