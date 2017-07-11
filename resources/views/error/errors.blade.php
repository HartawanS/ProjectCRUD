
              @if(count($errors))
              {{--  $errors->any()--}}
              <div class="form-group">
               <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach()
              </div>
              </div>
              @endif
              @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
              @endif
              @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
              @endif