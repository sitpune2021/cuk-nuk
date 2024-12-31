<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class ProductModel extends Model
{
      
    public function insertProduct($ProductData)
    {
       $db = db_connect('default');
       $builder = $db->table('tbl_product');
       $builder->insert($ProductData);
       $last_insert_id = $db->insertID();
       return $last_insert_id;
    }
    
    public function getProductList()
    {
       $query = $this->db->query("SELECT p.*, c.category_name FROM tbl_product p JOIN tbl_category c ON p.product_type = c.id ORDER BY p.id DESC;");
       return $query->getResultArray();
	}
    public function getProductListNew()
    {
       $query = $this->db->query("SELECT p.*, c.category_name FROM tbl_product p JOIN tbl_category c ON p.product_type = c.id ORDER BY p.id");
       return $query->getResultArray();
	}
	
	public function getProductById($id)
    {
        $query = $this->db->query("SELECT * FROM `tbl_product` where id='$id' ");
		return $query->getRowArray();
	}
	
	 public function updateProduct($ProductData,$editId) {
        return $this->db
                    ->table('tbl_product')
                    ->where(["id" => $editId])
                    ->set($ProductData)
                    ->update();
	}
	
	  public function DeleteProductById($ID)
    {
         $this->db->table('tbl_product')->delete(['id' => $ID]);
    }
    
    public function getImageFileNameById($ID)
    {
        $result = $this->db->table('tbl_product')->select('image')->where('id', $ID)->get()->getRowArray();
        var_dump($result);
    }
    
     public function getHydraulicProductList()
    {
        $query = $this->db->query("SELECT * FROM tbl_product WHERE active = 1 AND product_type = 'Hydraulic' ORDER BY id DESC;");
		return $query->getResultArray();
	}
	
	public function getPneumaticProductList()
    {
        $query = $this->db->query("SELECT * FROM tbl_product WHERE active = 1 AND product_type = 'Pneumatic' ORDER BY id DESC;");
		return $query->getResultArray();
	}
	
	public function getSSfittingProductList()
    {
        $query = $this->db->query("SELECT * FROM tbl_product WHERE active = 1 AND product_type = 'SSfitting' ORDER BY id DESC;");
		return $query->getResultArray();
	}
	
	public function getMSfittingProductList()
    {
        $query = $this->db->query("SELECT * FROM tbl_product WHERE active = 1 AND product_type = 'MSfitting' ORDER BY id DESC;");
		return $query->getResultArray();
	}
	
	public function getOilGreaseProductList()
    {
        $query = $this->db->query("SELECT * FROM tbl_product WHERE active = 1 AND product_type = 'Oil&Grease' ORDER BY id DESC;");
		return $query->getResultArray();
	}
	
	public function getLubricationProductList()
    {
        $query = $this->db->query("SELECT * FROM tbl_product WHERE active = 1 AND product_type = 'Lubrication' ORDER BY id DESC;");
		return $query->getResultArray();
	}
	
	public function getManualValveProductList()
    {
        $query = $this->db->query("SELECT * FROM tbl_product WHERE active = 1 AND product_type = 'ManualValve' ORDER BY id DESC;");
		return $query->getResultArray();
	}
	
	public function getAutomationValveProductList()
    {
        $query = $this->db->query("SELECT * FROM tbl_product WHERE active = 1 AND product_type = 'AutomationValve' ORDER BY id DESC;");
		return $query->getResultArray();
	}
	
	public function getPressureGuagesProductList()
    {
        $query = $this->db->query("SELECT * FROM tbl_product WHERE active = 1 AND product_type = 'PressureGuages' ORDER BY id DESC;");
		return $query->getResultArray();
	}
	
    public function getProductCount()
    {
        $query = $this->db->query("SELECT COUNT(id) AS product_count FROM `tbl_product`");
        $result = $query->getRow();
        return $result->product_count;
    }
    
    public function getProdDetailsByPer($permalink)
    {
        $sql="SELECT * FROM tbl_product WHERE permalink = '$permalink'";
        $query = $this->db->query($sql);
		return $query->getRowArray();
	}
    public function getProdectDetailsByPer($product_type)
    {
        $sql="SELECT * FROM `tbl_product` WHERE product_type=$product_type ORDER BY id desc";
        $query = $this->db->query($sql);
		return $query->getResultArray();
	}
	public function getSpecialProductList()
    {
        $query = $this->db->query("select * from tbl_product order by id desc LIMIT 9");
        return $query->getResultArray();
	}
    public function getCategoryProduct($id)
    {
		$query = $this->db->query("SELECT * FROM tbl_product WHERE product_type=$id order by id desc");
       return $query->getResultArray();
	}
	
	public function getCatewiseProduct($id)
    {
		$query = $this->db->query("SELECT * FROM tbl_product WHERE product_type IN ($id) order by id desc");
       return $query->getResultArray();
	}
    
}