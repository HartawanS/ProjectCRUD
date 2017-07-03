
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
