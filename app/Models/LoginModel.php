<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class LoginModel extends Model
{
  public function check_login($username, $password)
  {
        $db = \Config\Database::connect();
        $LoginName = $db->table('tbl_login_master');
        $data_array = array('username' => $username,'password' => $password);
        return $loginD = $LoginName->select('*')
        ->where($data_array)
        ->get()->getRowArray();
    }
  
    
    public function checkUsernamePass() {
		$username = $_POST['username'];
	    $password = $_POST['password'];
	    $db = \Config\Database::connect();
	    $LoginName = $db->table('tbl_login_master');
	    $data_array = array('username' => $username,'password' => $password);
       return $loginD = $LoginName->select('*')
		    ->where($data_array)
		    ->get()->getRowArray();

	}
    
}


    

?>

 


