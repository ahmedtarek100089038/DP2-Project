<?php session_start(); ?>
<?php include_once("./linker/top.php"); ?>
<?php include_once("./linker/navbar1.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./linker/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Customer Orders</h2>
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
            </tr>
          </thead>
			<tr>
              <td>1</td>
			  <td>1</td>
              <td>10001</td>
              <td>Pink Checkered Skirt</td>
              <td>2</td>
              <td>9L434522M7706801A	</td>
			  <td>Successful</td>
			  <td><?php include 'ratings.php'; ?></td>
			</tr>
			
			<tr>
              <td>2</td>
			  <td>2</td>
              <td>10002</td>
              <td>Vintage Silver Necklace</td>
              <td>1</td>
              <td>7K3211222J75566801F</td>
			  <td>Pending</td>
			</tr>
        </table>
      </div>
    </main>
  </div>
</div>



<!-- Add product Modal -->
<div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-product-form" enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Name</label>
		        		<input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Brand Name</label>
		        		<select class="form-control brand_list" name="brand_id">
		        			<option value="">Select Brand</option>
		        		</select>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Category Name</label>
		        		<select class="form-control category_list" name="category_id">
		        			<option value="">Select Category</option>
		        		</select>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Description</label>
		        		<textarea class="form-control" name="product_desc" placeholder="Enter product desc"></textarea>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Price</label>
		        		<input type="number" name="product_price" class="form-control" placeholder="Enter Product Price">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Keywords <small>(eg: shirt, dress, craft)</small></label>
		        		<input type="text" name="product_keywords" class="form-control" placeholder="Enter Product Keywords">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Image <small>(format: jpg, jpeg, png)</small></label>
		        		<input type="file" name="product_image" class="form-control">
		        	</div>
        		</div>
        		<input type="hidden" name="add_product" value="1">
        		<div class="col-12">
        			<button type="button" class="btn btn-primary add-product">Add Product</button>
        		</div>
        	</div>
        	
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<?php include_once("./linker/footer.php"); ?>



<script type="text/javascript" src="./js/customers.js"></script>