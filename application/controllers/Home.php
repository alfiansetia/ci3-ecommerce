<?php

/**
 * 
 */
class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model(['Product_m', 'Category_m', 'Brand_m']);
	}

	public function index()
	{
		$input = $this->input->get(NULL, TRUE);
		if (isset($input['category']) && $input['category'] != '') {
			$data['products'] = $this->Product_m->getByCategory($input['category']);
		} elseif (isset($input['brand']) && $input['brand'] != '') {
			$data['products'] = $this->Product_m->getByBrand($input['brand']);
		} else {
			$data['products'] = $this->Product_m->getByActive();
		}
		$data['category'] = $this->Category_m->getByActive();
		$data['brands'] = $this->Brand_m->getAll();
		$this->load->view('body/header');
		$this->load->view('body/nav', $data);
		$this->load->view('product/product', $data);
		$this->load->view('body/footer');
	}

	public function detail($slug = null)
	{
		$data['products'] = $this->Product_m->getByActive();
		$data['category'] = $this->Category_m->getByActive();
		$data['brands'] = $this->Brand_m->getAll();
		$data['product'] = $this->Product_m->getBySlug($slug);
		if ($slug != null && $data['product'] != null) {
			$data['relates'] = $this->Product_m->getByCategory($data['product']->product_category);
			$this->load->view('body/header');
			$this->load->view('body/nav', $data);
			$this->load->view('product/detail', $data);
			$this->load->view('body/footer');
		} else {
			show_404();
		}
	}

	public function about()
	{
		$data['category'] = $this->Category_m->getByActive();
		$data['brands'] = $this->Brand_m->getAll();
		$this->load->view('body/header');
		$this->load->view('body/nav', $data);
		$this->load->view('pages/about');
		$this->load->view('body/footer');
	}

	public function contact()
	{
		$data['category'] = $this->Category_m->getByActive();
		$data['brands'] = $this->Brand_m->getAll();
		$this->load->view('body/header');
		$this->load->view('body/nav', $data);
		$this->load->view('pages/contact');
		$this->load->view('body/footer');
	}

	public function faq()
	{
		$data['category'] = $this->Category_m->getByActive();
		$data['brands'] = $this->Brand_m->getAll();
		$this->load->view('body/header');
		$this->load->view('body/nav', $data);
		$this->load->view('pages/faq');
		$this->load->view('body/footer');
	}
}
