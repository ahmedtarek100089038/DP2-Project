<?php

/**
 * 
 */
class Seller
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getSellerList(){
		$query = $this->con->query("SELECT `id`, `name`, `email`, `is_active` FROM `seller` WHERE 1");
		$ar = [];
		if ($query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'No Seller'];
	}


}


if (isset($_POST['GET_SELLER'])) {
	$a = new Seller();
	echo json_encode($a->getSellerList());
	exit();
	
}

?>