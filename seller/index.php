<?php 
session_start();  
if (!isset($_SESSION['seller_id'])) {
  header("location:login.php");
}

include "./linker/top.php"; 

?>
 
<?php include "./linker/navbar.php"; ?>

<div class="container-fluid">
  <div class="row">
    
    <?php include "./linker/sidebar.php"; ?>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <h2>Seller List</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
             
            </tr>
          </thead>
          <tbody id="seller_list">
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

<?php include "./linker/footer.php"; ?>

<script type="text/javascript" src="./js/seller.js"></script>
