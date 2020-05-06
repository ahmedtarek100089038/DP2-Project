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
		$query = $this->con->query("SELECT `id`, `name`, `email`, `is_active` FROM `admin` WHERE 1");
		$ar = [];
		if ($query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'No Admin'];
	}
	
	

	public function deleteAdmin($bid = null){
		if ($bid != null) {
			$q = $this->con->query("DELETE FROM admin WHERE id = '$bid'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Admin removed'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid admin id'];
		}

	}
	
	
	

	public function updateAdmin($post = null){
		extract($post);
		if (!empty($id) && !empty($e_admin_title)) {
			$q = $this->con->query("UPDATE admin SET is_active = '$e_admin_title' WHERE id = '$id'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Admin Approval updated'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed to run query'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid admin id'];
		}

	}


}


if (isset($_POST['GET_ADMIN'])) {
	$a = new Admin();
	echo json_encode($a->getAdminList());
	exit();
	
}


if (isset($_POST['DELETE_ADMIN'])) {
	if (!empty($_POST['bid'])) {
		$p = new Admin();
		echo json_encode($p->deleteAdmin($_POST['bid']));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}

if (isset($_POST['edit_admin'])) {
	if (!empty($_POST['id'])) {
		$p = new Admin();
		echo json_encode($p->updateAdmin($_POST));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}



?>