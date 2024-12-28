<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class ContactModel extends Model
{
      
    public function insertContact($contactData)
    {
        $db = db_connect('default');
        $builder = $db->table('tbl_contact');
        $builder->insert($contactData);
        $last_insert_id = $db->insertID();
        return $last_insert_id;
    }
    public function getContactList()
    {
        $query = $this->db->query("SELECT * FROM `tbl_contact` order by id desc ");
		return $query->getResultArray();
	}
	
	public function getContactCount()
    {
        $query = $this->db->query("SELECT COUNT(id) AS contact_count FROM `tbl_contact`");
        $result = $query->getRow();
        return $result->contact_count;
    }
}