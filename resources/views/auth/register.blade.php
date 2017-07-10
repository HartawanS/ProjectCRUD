<title>PT.DOT | Register</title>
@extends('layouts.home')
<body class="hold-transition login-page">
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
              <i class="fa fa-user-plus"></i>

              <h3 class="box-title">Register</h3>
<hr>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="{{ route('register') }}" method="post">
{{ csrf_field() }}

                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Name</label>

                         
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>


                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type">Type Address</label>
<!--                                 <input id="type" type="email" class="form-control" name="email" value="{{ old('email') }}" required> -->
                                <select name="type" class="form-control">
                                  <option value="Developer" selected>Developer</option>
                                  <option value="Tester">Tester</option>
                                  <option value="Client">Client</option>
                                </select>

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>

                            
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group">
                            <label for="password-confirm" >Confirm Password</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                        </div>

          <div class="row">

        <div class="col-xs-8">
             <a href="{{ route('login') }}">I already have membership</a><br>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
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