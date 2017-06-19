<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->ctl = 'customer';
		$this->load->model('mdl_customer');
	}

	public function index($addFalse='')
	{
		$this->data['title'] = 'ข้อมูลพนักงาน';
		$PAGE = 'index';
		$this->data['addFalse'] =($addFalse == '')?'':$addFalse;
		$this->data['getCustomer'] = $this->mdl_customer->getCustomer();
		$this->data['FormCustomerAdd'] = base_url().'index.php/'.$this->ctl.'/FormCustomerAdd/';
		$this->data['FormCustomerEdit'] = base_url().'index.php/'.$this->ctl.'/FormCustomerEdit/';
		$this->data['urldelete'] = base_url().'index.php/'.$this->ctl.'/deleteCustomer/';
		$this->data['FormCustomerView'] = base_url().'index.php/'.$this->ctl.'/FormCustomerView/';
		$this->libload->loadView($PAGE,$this->data);
	}

	public function FormCustomerView($id)
	{
		$this->data['dataCustomer'] = array();
		$getCustomerID = $this->mdl_customer->viewCustomerID($id);
		foreach ($getCustomerID as $rowCustomer) {
			$this->data['dataCustomer'] = array(
				// 'id' => $rowCustomer['id'],
				'name' => $rowCustomer['customer_name'],
				'email' => $rowCustomer['email'],
				'phone' => $rowCustomer['phone'],
				'fax' => $rowCustomer['fax'],
				'country_code' => $rowCustomer['country_code'],
				'enabled' => $rowCustomer['status']
				);
		}
		// print_r($this->data);
		$this->load->view('customer/FormCustomerView', $this->data);
	}

	public function FormCustomerAdd()
	{
		$this->data['title'] = " เพิ่มพนักงาน";
		$this->data['saveAdd']  = base_url().'index.php/'.$this->ctl.'/saveAdd/';
		$this->libload->loadView('customer/FormCustomerAdd',$this->data);
	}

	public function saveAdd()
	{
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('firstname','firstname','required',array('required' => '<span class="text-danger" style="margin-bottom:1xp;">** Plast Enter Your Firestname </span>'));
		$this->form_validation->set_rules('lastname','lastname','required',array('required' => '<span class="text-danger" style="margin-bottom:1xp;">** Plast Enter Your LASTNAME </span>'));
		$this->form_validation->set_rules('email','email','required',array('required' => '<span class="text-danger" style="margin-bottom:1xp;">** Plast Enter Your EMILE </span>'));
		$this->form_validation->set_rules('phone','phone','required|min_length[9]',array('required' => '<span class="text-danger" style="margin-bottom:1xp;">** Plast Enter Your PHONE </span>'));
		$this->form_validation->set_rules('fax','fax','required',array('required' => '<span class="text-danger" style="margin-bottom:1xp;">** Plast Enter Your FAX </span>'));
		$this->form_validation->set_rules('country_code','country_code','required',array('required' => '<span class="text-danger" style="margin-bottom:1xp;">** Plast Enter Your COUNTRY CODE </span>'));
		$this->form_validation->set_rules('enabled','enabled','required',array('required' => '<span class="text-danger" style="margin-bottom:1xp;">** Plast Enter Your SATATUS </span>'));

		if ($this->form_validation->run() === FALSE)
		{
			$this->FormCustomerAdd();
		}else{
			$this->mdl_customer->saveAdd();
			redirect($this->ctl,'refresh');
		}
	}

	public function FormCustomerEdit($id)
	{
		$this->data['title'] = " แก้ไขข้อมูลพนักงาน";
		$this->data['saveEdit'] = base_url().'index.php/'.$this->ctl.'/saveEdit/';
		$PAGE = "customer/FormCustomerEdit";
		$this->data['dataCustomer'] = array();
		$getCustomerID = $this->mdl_customer->getCustomerID($id);
		foreach ($getCustomerID as $rowCustomer) {
			$this->data['dataCustomer'] = array(
				'id' => $rowCustomer['id'],
				'gender' => $rowCustomer['gender'],
				'first_name' => $rowCustomer['first_name'],
				'last_name' => $rowCustomer['last_name'],
				'email' => $rowCustomer['email'],
				'phone' => $rowCustomer['phone'],
				'fax' => $rowCustomer['fax'],
				'country_code' => $rowCustomer['country_code'],
				'enabled' => $rowCustomer['enabled']
				);
		}
		$this->libload->loadView($PAGE, $this->data);
	}

	public function saveEdit()
	{
		$id = $this->input->post('id');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('firstname','firstname','required',array('required' => '<span class="text-danger" style="margin-bottom:1xp;">** Plast Enter Your Firestname </span>'));
		$this->form_validation->set_rules('lastname','lastname','required',array('required' => '<span class="text-danger" style="margin-bottom:1xp;">** Plast Enter Your LASTNAME </span>'));
		$this->form_validation->set_rules('email','email','required',array('required' => '<span class="text-danger" style="margin-bottom:1xp;">** Plast Enter Your EMILE </span>'));
		$this->form_validation->set_rules('phone','phone','required|min_length[9]',array('required' => '<span class="text-danger" style="margin-bottom:1xp;">** Plast Enter Your PHONE </span>'));
		$this->form_validation->set_rules('fax','fax','required',array('required' => '<span class="text-danger" style="margin-bottom:1xp;">** Plast Enter Your FAX </span>'));
		$this->form_validation->set_rules('country_code','country_code','required',array('required' => '<span class="text-danger" style="margin-bottom:1xp;">** Plast Enter Your COUNTRY CODE </span>'));
		$this->form_validation->set_rules('enabled','enabled','required',array('required' => '<span class="text-danger" style="margin-bottom:1xp;">** Plast Enter Your SATATUS </span>'));

		if ($this->form_validation->run() === FALSE)
		{
			$this->FormCustomerEdit($id);
		}else{
			$this->mdl_customer->saveEdit($id);
			redirect($this->ctl,'refresh');
		}
	}

	public function deleteCustomer()
	{
		$id = $this->input->post('id');
		$this->mdl_customer->deleteCustomer($id);
	}

}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */