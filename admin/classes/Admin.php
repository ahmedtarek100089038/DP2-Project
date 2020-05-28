<?php

/**
 * 
 */
class Admin
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getAdminList(){
		$query = $this->con->query("SELECT `id`, `name`, `email`, `is_active` FROM `seller` WHERE 1");
		$ar = [];
		if ($query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'No Admin'];
	}
	
	public function deleteSeller($bid = null){
		if ($bid != null) {
			$q = $this->con->query("DELETE FROM seller WHERE id = '$bid'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Seller removed'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid seller id'];
		}

	}


}


if (isset($_POST['GET_ADMIN'])) {
	$a = new Admin();
	echo json_encode($a->getAdminList());	
	exit();
	
}

if (isset($_POST['DELETE_SELLER'])) {
	if (!empty($_POST['bid'])) {
		$p = new Seller();
		echo json_encode($p->deleteSeller($_POST['bid']));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}

?>