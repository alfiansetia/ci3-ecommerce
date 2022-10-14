<?php

/**
 * 
 */
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('body/header');
		$this->load->view('body/nav');
		$this->load->view('product/product');
		$this->load->view('body/footer');
	}
}