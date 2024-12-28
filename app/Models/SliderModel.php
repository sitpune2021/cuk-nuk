<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class SliderModel extends Model
{
      
    public function insertSlider($sliderData)
    {
       $db = db_connect('default');
       $builder = $db->table('tbl_slider');
       $builder->insert($sliderData);
       $last_insert_id = $db->insertID();
       return $last_insert_id;
    }
    
    public function getSliderhList()
    {
        $query = $this->db->query("SELECT * FROM `tbl_slider` where active=1 order by id desc ");
		return $query->getResultArray();
	}
	
    public function getSliderList($index)
    {
        $query = $this->db->query("SELECT * FROM `tbl_slider` where active=1 and index_no='$index' order by id desc LIMIT 5");
		return $query->getResultArray();
	}

    public function getSliderList2($index)
    {
        $query = $this->db->query("SELECT * FROM `tbl_slider` where active=1 and index_no='$index' order by id desc LIMIT 1");
		return $query->getResultArray();
	}

 	public function getSliderById($id)
    {
        $query = $this->db->query("SELECT * FROM `tbl_slider` where id='$id' ");
		return $query->getRowArray();
	}
	
	 public function updateSlider($sliderData,$editId) {
        return $this->db
                    ->table('tbl_slider')
                    ->where(["id" => $editId])
                    ->set($sliderData)
                    ->update();
	}
	
	public function DeleteSliderById($ID)
    {
         $this->db->table('tbl_slider')->delete(['id' => $ID]);
    }
    
     public function getSliderCount()
    {
        $query = $this->db->query("SELECT COUNT(id) AS slider_count FROM `tbl_slider`");
        $result = $query->getRow();
        return $result->slider_count;
    }

    public function getBannerById($id)
    {
        $query = $this->db->query("SELECT * FROM `tbl_banner` where id='$id' ");
		return $query->getRowArray();
	}

    public function updateBanner($bannerData,$editId) {
        return $this->db
                    ->table('tbl_banner')
                    ->where(["id" => $editId])
                    ->set($bannerData)
                    ->update();
	}

    public function getBannerIndex($index)
    {
        $query = $this->db->query("SELECT * FROM `tbl_banner` where index_no=$index order by id desc ");
		return $query->getRowArray();
	}

    public function getBannerList()
    {
        $query = $this->db->query("SELECT * FROM `tbl_banner` order by id desc ");
		return $query->getResultArray();
	}
}