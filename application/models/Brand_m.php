<?php

class Brand_m extends CI_Model
{

    private $table = 'brands';

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
}
