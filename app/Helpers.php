<?php 
	function restrict($iduser, $idproject){
		$result = \DB::table('userlist')->where('iduser',$iduser)->where('idproject',$idproject)->count();
		if($result > 0){
			return true;
		}
		return false;
	}

	function restInPiece($iduser){
		$result = \DB::table('userlist')->where('id',$iduser)->count();
		if($result > 0){
			return true;
		}
		return false;
	}
	function restInPiece_user($iduser){
		$result = \DB::table('users')->where('id',$iduser)->count();
		if($result > 0){
			return true;
		}
		return false;
	}
?>