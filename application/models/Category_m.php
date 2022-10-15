<?php

class Category_m extends CI_Model
{

    private $table = 'category';

    public function getByActive()
    {
        return $this->db->get_where($this->table, ['category_status' => 1])->result();
    }
}
