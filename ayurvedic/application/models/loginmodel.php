<?php

class Loginmodel extends CI_Model {

    public function admin_login_valid( $username, $password )
	{
		$q = $this->db->where(['AdminName'=>$username, 'password'=>$password])->get('admins');

		if ( $q->num_rows() ) {
		 	
		 	return $q->row()->id;
		 } else {
		 	return FALSE;
		 }
	}
}