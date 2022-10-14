<?php
class Product_m extends CI_Model
{

    private $table = 'products';

    public function productByGender($gender)
    {
        return $this->db->get_where();
    }

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
}
