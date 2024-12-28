<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class UserModel extends Model
{
      
    public function insertUser($UserData)
    {
       $db = db_connect('default');
       $builder = $db->table('user');
       $builder->insert($UserData);
       $last_insert_id = $db->insertID();
       return $last_insert_id;
    }
    
     public function getUserList()
    {
        $query = $this->db->query("SELECT * FROM `user` where is_deleted=0 order by id desc ");
		return $query->getResultArray();
	}
	public function UpdateUser($userData,$editId) {
        return $this->db
                    ->table('user')
                    ->where(["id" => $editId])
                    ->set($userData)
                    ->update();
	}
	public function getUserListById($id)
    {
        $query = $this->db->query("SELECT * FROM `user` where id='$id' ");
		return $query->getRowArray();
	}
	
	public function UpdateLogin($loginData,$editId)
    {
        return $this->db
                    ->table('login_master')
                    ->where(["id" => $editId])
                    ->set($loginData)
                    ->update();
	}
/*	public function softDeleteuser($ID)
    {
         $this->db->table('user')->update(['is_deleted' => 1], ['id' => $ID]);
    }*/
     public function updateStatus($sts,$id)
    {
        
        $sql="UPDATE user SET status = '$sts' WHERE id = $id";
        $query = $this->db->query($sql);
        return true;
    }
    
    
}