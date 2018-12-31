<?php
/**
 * summary
 */
class Admin extends CI_Controller {
	/**
	 * summary
	 */
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');

	}
	/**admin login page **/
	public function adminLoginpage() {
		$this->load->helper('url');
		$this->load->view('admin/loginasadmin');
	}
	public function adminprofile() {
		$this->load->helper('url');
		$this->load->view('admin/adminprofile');
	}

	/**admin login process controller**/
	public function admin_login() {
		$this->load->helper('url');
		$this->load->library('encryption');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('account', 'Account', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');

		if ($this->form_validation->run()) {
			$account  = $this->input->post('account', true);
			$password = $this->input->post('password', true);

			$this->load->model('Admin_modal');
			$result = $this->Admin_modal->adminloginmodal($account, $password);
			if ($result == false) {
				$this->session->set_flashdata('error', 'Invalid Account no OR Password');
				redirect(base_url().'index.php/admin');

			} else {

				$session_data             = array();
				$session_data['account']  = $account;
				$session_data['password'] = $password;
				$this->session->set_userdata($session_data);
				redirect(base_url().'index.php/adminprofile', $session_data);

			}

		} else {

			if (form_error('account') == true) {
				$msg = form_error('account');
				$this->session->set_flashdata('account', $msg);
				redirect(base_url());
			} elseif (form_error('password') == true) {
				$msg = form_error('password');
				$this->session->set_flashdata('password', $msg);
				redirect(base_url().'index.php/admin');
			}

		}
	}
	/**update page **/
	public function update() {
		$this->load->helper('url');
		$this->load->model('Admin_modal');
		$result       = $this->Admin_modal->updatememberList();
		$data['data'] = $result;
		$this->load->view('admin/updatelist', $data);
	}
	/*delete customer*/
	public function delete() {
		$this->load->helper('url');
		$this->load->model('Admin_modal');
		$result       = $this->Admin_modal->allcustomerlist();
		$data['data'] = $result;
		$this->load->view('admin/deletelist', $data);
	}
	/**showlist **/
	public function showcustomer() {
		$this->load->helper('url');
		$this->load->model('Admin_modal');
		$result       = $this->Admin_modal->allcustomerlist();
		$data['data'] = $result;
		$this->load->view('admin/showcustomer', $data);
	}
	/**add customer money page**/
	public function addmoney() {
		$this->load->helper('url');
		$id = $this->input->get('id');
		$this->session->set_flashdata('id', $id);
		$this->load->view('admin/addmoney');

	}
	/**add money**/
	public function addmoneyprocess() {
		$this->load->helper('url');
		$amount = $this->input->post('money', true);
		$id     = $this->input->post('id', true);
		$this->load->model('Admin_modal');
		$this->Admin_modal->addmoneyprocess($amount, $id);
		redirect('index.php/adminprofile');
	}
	/**delete user**/
	public function deleteuser() {
		$this->load->helper('url');
		$id = $this->input->get('id');
		$this->load->model('Admin_modal');
		$this->Admin_modal->deleteuser($id);
		redirect('index.php/adminprofile');
	}
}

?>