<!-- Edit Profile -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			<h4 class="modal-title"><b>Update Account</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="profile_edit.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="first_name" class="col-sm-3 control-label">First Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $loggedin['first_name']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="last_name" class="col-sm-3 control-label">Last Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $loggedin['last_name']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="email" name="email" value="<?php echo $loggedin['email']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" value="<?php echo $loggedin['password']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="mobile" class="col-sm-6 control-label">Phone Number</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $loggedin['mobile']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address1" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="address1" name="address1"><?php echo $loggedin['address1']; ?></textarea>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
                
                <hr>
                
                <div class="form-group">
                    <label for="curr_password" class="col-sm-6 control-label">Current Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="input current password to save changes" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>