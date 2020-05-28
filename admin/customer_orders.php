<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Customers</h2>
      	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Order #</th>
              <th>Product Id</th>
              <th>Product Name</th>
              <th>Quantity</th>
              <th>Transaction Id</th>
              <th>Payment Status</th>
			  <th>Shipping Process</th>
			  <th>Action</th>
            </tr>
          </thead>
          <tbody id="customer_order_list">
            <tr>
              <td>1</td>
			  <td>1</td>
              <td>10001</td>
              <td>Name</td>
              <td>1</td>
              <td>Transaction ID</td>
			  <td>Successful</td>
			  <td>Pending</td>
			  <td>Action</td>
			</tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>



<!-- Edit Shipping Modal -->
<div class="modal fade" id="edit_shipping_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Shipping</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-shipping-form" enctype="multipart/form-data">
			<div class="row">
			<div class="col-12">
				<input type="hidden" name="order_id">
				<div class="form-group">
					<label>Shipping Process</label>
					<input type="text" name="e_s_process" class="form-control" placeholder="Update Shipping Process">
				</div>
		  </div>
			<input type="hidden" name="edit_shipping_process" value="1">
			<div class="col-12">
              <button type="button" class="btn btn-primary edit-shipping-btn">Update Shipping Process</button>
			</div>
         </div>
          
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Shipping Modal -->

<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/customers.js"></script>