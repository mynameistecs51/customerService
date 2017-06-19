<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->ctl = "product";
		$this->load->model('mdl_product');
	}

	public function index()
	{
		$this->data['title'] = '<i class="fa fa-product" aria-hidden="true"></i>  ข้อมูลสินค้า';
		$this->data['getProductAll'] = $this->mdl_product->getProductAll();
		$this->data['FormProductView'] = base_url().'index.php/'.$this->ctl.'/FormProductView/';
		$this->data['FormProductAdd'] = base_url().'index.php/'.$this->ctl.'/FormProductAdd/';
		$this->data['saveAdd'] = base_url().'index.php/'.$this->ctl.'/saveAdd/';
		$this->data['FormProductEdit'] = base_url().'index.php/'.$this->ctl.'/FormProductEdit/';
		$this->data['saveEdit'] = base_url().'index.php/'.$this->ctl.'/saveEdit/';
		$this->data['productDelete'] = base_url().'index.php/'.$this->ctl.'/productDelete/';
		$this->libload->loadView('product/index',$this->data);
	}

	public function FormProductView($id)
	{
		$this->data['rowProduct'] = array();
		$dataProduct = $this->mdl_product->getProductAll($id);
		foreach ($dataProduct as $keyProduct => $rowProduct) {
			$this->data['rowProduct'] = array(
				'id' => $rowProduct['id'],
				'name' => $rowProduct['name'],
				'description' => $rowProduct['description'],
				'price_normal' => $rowProduct['price_normal'],
				'price_sale' => $rowProduct['price_sale'],
				'published' => $rowProduct['published'],
				'created_at' => $rowProduct['created_at'],
				'updated_at' => $rowProduct['updated_at']
				);
		}
		$this->load->view('product/FormProductView',$this->data);
	}

	public function FormProductAdd()
	{
		$this->load->view('product/FormProductAdd');
	}

	public function saveAdd()
	{
		$this->mdl_product->saveAdd();
		redirect($this->ctl,'refresh');
	}

	public function FormProductEdit($id)
	{
		$this->data['rowProduct'] = array();
		$dataProduct = $this->mdl_product->getProductID($id);
		foreach ($dataProduct as $keyProduct => $rowProduct) {
			$this->data['rowProduct'] = array(
				'id' => $rowProduct['id'],
				'name' => $rowProduct['name'],
				'description' => $rowProduct['description'],
				'price_normal' => $rowProduct['price_normal'],
				'price_sale' => $rowProduct['price_sale'],
				'published' => $rowProduct['published'],
				'created_at' => $rowProduct['created_at'],
				'updated_at' => $rowProduct['updated_at']
				);
		}
		$this->load->view('product/FormProductEdit',$this->data);
	}

	public function saveEdit()
	{
		$id = $this->input->post('id');
		$this->mdl_product->saveEdit($id);
		redirect($this->ctl,'refresh');
	}

	public function productDelete()
	{
		$id = $this->input->post('id');
		$this->mdl_product->productDelete($id);
	}
}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */