<?php 
	function restrict($iduser, $idproject){
		$result = \DB::table('userlist')->where('iduser',$iduser)->where('idproject',$idproject)->count();
		if($result > 0){
			return true;
		}
		return false;
	}
?>