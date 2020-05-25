<?php 
session_start();
/**
 * 
 */
class Customers
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getCustomers(){
		$query = $this->con->query("SELECT `user_id`, `first_name`, `last_name`, `email`, `mobile`, `address1`, `address2` FROM `user_info`");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no customer data'];
	}


	public function getCustomersOrder(){
		$query = $this->con->query("SELECT o.order_id, o.product_id, o.qty, o.trx_id, o.p_status, p.product_title, p.product_image, o.ship_det FROM orders o JOIN products p ON o.product_id = p.product_id");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no orders yet'];
	}
	
	public function updateShipping($post = null){
		extract($post);
		if (!empty($shipping_id) && !empty($e_shipping_title)) {
			$q = $this->con->query("UPDATE orders SET ship_det = '$e_shipping_title' WHERE order_id = '$shipping_id'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Brand updated'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid brand id'];
		}

	}
	

}


/*$c = new Customers();
echo "<pre>";
print_r($c->getCustomers());
exit();*/

if (isset($_POST["GET_CUSTOMERS"])) {
	if (isset($_SESSION['admin_id'])) {
		$c = new Customers();
		echo json_encode($c->getCustomers());
		exit();
	}
}

if (isset($_POST["GET_CUSTOMER_ORDERS"])) {
	if (isset($_SESSION['admin_id'])) {
		$c = new Customers();
		echo json_encode($c->getCustomersOrder());
		exit();
	}
}

if (isset($_POST['edit_shipping'])) {
	if (!empty($_POST['shipping_id'])) {
		$c = new Customers();
		echo json_encode($c->updateShipping($_POST));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}


?>