      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('template/dist/img/user.jpg')}}" class="img-circle" style="margin: 5px 0px;" alt="User Image">
        </div>
        <div class="pull-left info ">
          <p> {{ Auth::user()->name }} </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
        <div class="profile-edit">
              <a href="#" class="profile-edit-btn"><i class="fa fa-gear"></i></a>
              <ul>
                <li><a href="{{ route('changepassword') }}">Edit Password</a></li>
                <li><a href="{{ route('changeprofile') }}">Edit Profile</a></li>
              </ul>
          </div>
      </div>