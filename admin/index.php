<?php 
session_start();  
if (!isset($_SESSION['admin_id'])) {
  header("location:login.php");
}

include "./linker/top.php"; 

?>
 
<?php include "./linker/navbar.php"; ?>

<div class="container-fluid">
  <div class="row">
    
    <?php include "./linker/sidebar.php"; ?>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <h2>Other Admin</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Approval</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="admin_list">
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<!-- Edit admin Modal -->
<div class="modal fade" id="edit_admin_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-admin-form" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <input type="hidden" name="id">
              <div class="form-group">
                <label>Approval</label>
                <input type="text" name="e_admin_title" class="form-control" placeholder="Confirm Approval">
              </div>
            </div>
            <input type="hidden" name="edit_admin" value="1">
            <div class="col-12">
              <button type="button" class="btn btn-primary edit-admin-btn">Confirm Approval</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>

<?php include "./linker/footer.php"; ?>

<script type="text/javascript" src="./js/admin.js"></script>
