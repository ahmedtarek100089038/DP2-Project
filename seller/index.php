<?php 
session_start();  
if (!isset($_SESSION['seller_id'])) {
  header("location:login.php");
}

include "./linker/top.php"; 

?>
 
<?php include "./linker/navbar1.php"; ?>

<div class="container-fluid">
  <div class="row">
    
    <?php include "./linker/sidebar.php"; ?>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      
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
			  <th>Ratings</th>
            </tr>
          </thead>
          
			<tr>
				<td>1</td>
				<td>1</td>
				<td>10001</td>
				<td>Name</td>
				<td>1</td>
				<td>Transaction ID</td>
				<td>Successful</td>
				<td><?php include 'ratings.php'; ?></td>
			</tr>
           
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php include "./linker/footer.php"; ?>

<script type="text/javascript" src="./js/customers.js"></script>
