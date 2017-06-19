<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_customer extends CI_Model {

	public function getCustomer()
	{
		$sql =  "
		SELECT
		id,
		CONCAT(
		(CASE gender
		WHEN 'M' THEN 'นาย'
		WHEN 'F' THEN 'นางสาว'
		END),' ',first_name,' ',last_name)
		AS customer_name,
		email,
		phone,
		fax,
		country_code,
		CONCAT(CASE enabled
		WHEN 0 THEN 'ปิดใช้งาน'
		WHEN 1 THEN 'เปิดใช้งาน'
		END) AS status,
		CONCAT(DATE_FORMAT(created_at,'%d/%m/'),DATE_FORMAT(created_at,'%Y')+543)AS create_date,
		CONCAT(DATE_FORMAT(created_at,'%H:%i'))AS time_created
		FROM xcustomer ORDER BY id DESC
		";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function getCustomerID($id)
	{
		$sql =  "
		SELECT
		id,
		gender,
		first_name,
		last_name,
		email,
		phone,
		fax,
		country_code,
		enabled
		FROM xcustomer
		WHERE
		id = '".$id."'
		";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function saveAdd()
	{
		$data = array(
			// 'id' => '',
			'gender' => $this->input->post('gender'),    //xss_clean
			'first_name' => $this->input->post('firstname'),    //xss_clean
			'last_name' => $this->input->post('lastname'),    //xss_clean
			'email' => $this->input->post('email'),    //xss_clean
			'phone' => $this->input->post('phone'),    //xss_clean
			'fax' => $this->input->post('fax'),    //xss_clean
			'country_code' => $this->input->post('country_code'),    //xss_clean
			'enabled' => $this->input->post('enabled'),
			'created_at' => date('Y-m-d H:i:s'),    //xss_clean
			'updated_at' => date('Y-m-d H:i:s'),
			);
		$this->db->insert('xcustomer',$this->security->xss_clean($data));
	}

	public function saveEdit($id)
	{
		$data = array(
			'gender' => $this->input->post('gender'),    //xss_clean
			'first_name' => $this->input->post('firstname'),    //xss_clean
			'last_name' => $this->input->post('lastname'),    //xss_clean
			'email' => $this->input->post('email'),    //xss_clean
			'phone' => $this->input->post('phone'),    //xss_clean
			'fax' => $this->input->post('fax'),    //xss_clean
			'country_code' => $this->input->post('country_code'),    //xss_clean
			'enabled' => $this->input->post('enabled'),
			// 'created_at' => date('Y-m-d H:i:s'),    //xss_clean
			'updated_at' => date('Y-m-d H:i:s'),
			);
		$this->db->where('id',$id);
		$this->db->update('xcustomer',$this->security->xss_clean($data));
	}

	public function deleteCustomer($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('xcustomer');
	}

}

/* End of file mdl_customer.php */
/* Location: ./application/models/mdl_customer.php */