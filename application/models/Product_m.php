<?php
class Product_m extends CI_Model
{

    private $table = 'products';

    public function productByGender($gender)
    {
        return $this->db->get_where();
    }

    public function getByActive()
    {
        return $this->db->get_where($this->table, ['product_status' => 1])->result();
    }

    public function getBySlug($slug)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('category', 'category.category_id = products.product_category');
        $this->db->join('brands', 'brands.brand_id = products.product_brand');
        $this->db->where('product_slug', $slug);
        return $this->db->get()->row();
    }

    public function getByCategory($category)
    {
        return $this->db->get_where($this->table, ['product_category' => $category])->result();
    }

    public function getByBrand($brand)
    {
        return $this->db->get_where($this->table, ['product_brand' => $brand])->result();
    }
}
