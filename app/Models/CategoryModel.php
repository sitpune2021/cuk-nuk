<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class CategoryModel extends Model
{
      
    public function insertCategory($CategoryData)
    {
       $db = db_connect('default');
       $builder = $db->table('tbl_category');
       $builder->insert($CategoryData);
       $last_insert_id = $db->insertID();
       return $last_insert_id;
    }
    
    public function getCategoryList()
    {
        $query = $this->db->query("SELECT * FROM `tbl_category` order by id desc");
		return $query->getResultArray();
	}
	
	public function getCategoryListHome()
    {
        $query = $this->db->query("SELECT * FROM `tbl_category` where is_active='1' order by id desc");
		return $query->getResultArray();
	}
	
    public function getCategory()
    {
        $query = $this->db->query("SELECT id,category_name FROM `tbl_category` where is_active=1 ORDER BY id DESC LIMIT 5");
		return $query->getResultArray();
	}

	public function getCategoryById($id)
    {
        $query = $this->db->query("SELECT * FROM `tbl_category` where id='$id'");
		return $query->getRowArray();
	}
	
	 public function updateCategory($CategoryData,$editId) {
        return $this->db
                    ->table('tbl_category')
                    ->where(["id" => $editId])
                    ->set($CategoryData)
                    ->update();
	}
	
	  public function DeleteCategoryById($ID)
    {
         $this->db->table('tbl_category')->delete(['id' => $ID]);
    }
    

    public function updateStatus($is_active,$id)
    {
        $sql="UPDATE tbl_category SET is_active = '$is_active' WHERE id = $id";
        $query = $this->db->query($sql);
        return true;
    }
    
    public function getSpecialCategoryList()
    {
        $query = $this->db->query("select * from tbl_category where is_active = 1 order by id desc LIMIT 8");
        return $query->getResultArray();
	}

    public function getCategoryName($id)
    {
        $query = $this->db->query("SELECT category_name FROM `tbl_category` Where id=$id");
		return $query->getRowArray();
	}
    
    public function getCategoryCount()
    {
        $query = $this->db->query("SELECT COUNT(id) AS category_count FROM `tbl_category`");
        $result = $query->getRow();
        return $result->category_count;
    }
}