<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_product extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->dtNow =  $this->libload->DateNow();
	}

	public function getProductAll()
	{
		$sql = "
		SELECT
		id,
		name,
		description,
		price_normal,
		price_sale,
		published,
		created_at,
		updated_at
		FROM
		xproduct
		ORDER BY id DESC;
		";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getProductID($id)
	{
		$sql = "
		SELECT
		id,
		name,
		description,
		price_normal,
		price_sale,
		published,
		created_at,
		updated_at
		FROM
		xproduct
		WHERE id = '".$id."'
		";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function saveAdd()
	{
		$data = array(
			'name' => $this->input->post('productName'),
			'description' => $this->input->post('description'),
			'price_normal' => $this->input->post('priceNarmol'),
			'price_sale' => $this->input->post('priceSale'),
			'published' => $this->input->post('published'),
			'created_at' => $this->dtNow,
			'updated_at' => $this->dtNow,
			);
		$this->db->insert('xproduct',$this->security->xss_clean($data));
	}

	public function saveEdit($id)
	{
		$data = array(
			'name' => $this->input->post('productName'),
			'description' => $this->input->post('description'),
			'price_normal' => $this->input->post('priceNarmol'),
			'price_sale' => $this->input->post('priceSale'),
			'published' => $this->input->post('published'),
			// 'created_at' => $this->dtNow,
			'updated_at' => $this->dtNow,
			);
		$this->db->where('id', $id);
		$this->db->update('xproduct',$this->security->xss_clean($data));
	}

	public function productDelete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('xproduct');
	}

}

/* End of file Mdl_product.php */
/* Location: ./application/models/Mdl_product.php */