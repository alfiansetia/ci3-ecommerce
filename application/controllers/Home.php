<?php

/**
 * 
 */
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Product_m');
	}

	public function index()
	{
		$data['product'] = $this->Product_m->getAll();
		$this->load->view('body/header');
		$this->load->view('body/nav');
		$this->load->view('product/product', $data);
		$this->load->view('body/footer');
	}
}