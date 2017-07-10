<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#favoritesModal">
          Add to Favorites
        </button>

<div class="modal fade" id="favoritesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="favoritesModalLabel">Change Password</h4>
      </div>
      <div class="modal-body">
        <form class="col-md-4 col-md-offset-4 " action="{{ route('changepassword.update', $Master->id) }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                  <input type="password" class="form-control" name="oldpassword" placeholder="Old Password" required>
                </div>
                
                <div class="form-group">
                  <input type="password" class="form-control" name="newpassword"  placeholder="New Password" required>
                </div>

                <div class="form-group">
                  <input type="Password" class="form-control" name="newpassword_confirmation" placeholder="Confirmation Password" required>
                </div>

                <div class="pull-right">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit"  class="btn btn-primary" id="create"> Change
                </div>
              </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <span class="pull-right">
          <button type="button" class="btn btn-primary">
            Add to Favorites
          </button>
        </span> -->
      </div>
    </div>
  </div>
</div>