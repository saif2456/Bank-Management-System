<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html


	 */
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');

	}

	/**home page function**/
	public function index() {
		$this->load->view('welcome_message');
	}

	/**sign up page function**/
	public function register() {
		$this->load->helper('url');
		$this->load->view('register');
	}

	/**get help page function**/
	public function gethelp() {
		$this->load->helper('url');
		$this->load->view('pages/gethelp');
	}

	/**about us page function**/
	public function aboutus() {
		$this->load->helper('url');
		$this->load->view('pages/aboutus');
	}
	/**about us page from profile view**/
	public function aboutus_pr() {
		$this->load->helper('url');
		$this->load->view('pages/aboutUs');
	}

	/**user login check**/
	public function user_profile() {
		$this->load->helper('url');
		$this->load->library('encryption');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('account', 'Account', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');

		if ($this->form_validation->run()) {
			$account  = $this->input->post('account', true);
			$password = $this->input->post('password', true);

			$this->load->model('First_model');
			$result = $this->First_model->login_profile($account, $password);
			if ($result == false) {
				$this->session->set_flashdata('error', 'Invalid Account no OR Password');
				redirect(base_url());

			} else {

				$session_data             = array();
				$session_data['account']  = $account;
				$session_data['password'] = $password;
				$this->session->set_userdata($session_data);
				redirect(base_url().'index.php/profile', $session_data);

			}

		} else {

			if (form_error('account') == true) {
				$msg = form_error('account');
				$this->session->set_flashdata('account', $msg);
				redirect(base_url());
			} elseif (form_error('password') == true) {
				$msg = form_error('password');
				$this->session->set_flashdata('password', $msg);
				redirect(base_url());
			}

		}
	}

	/**insert new user**/
	public function insert_user() {
		$this->load->helper('url');
		$this->load->library('encryption');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('account', 'Account', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		if ($this->form_validation->run()) {
			$account  = $this->input->post('account', true);
			$password = $this->input->post('password', true);
			$this->load->model('First_model');
			$this->First_model->save_user($account, $password);
			$this->session->set_flashdata('error', 'sign up successfully, you can login now ');
			redirect(base_url());

		} else {

			if (form_error('account') == true) {
				$msg = form_error('account');
				$this->session->set_flashdata('account', $msg);
				redirect(base_url());
			} elseif (form_error('password') == true) {
				$msg = form_error('password');
				$this->session->set_flashdata('password', $msg);
				redirect(base_url());
			}

		}

	}

	/**upload image**/
	public function imageupload() {
		$this->load->helper(array('form', 'url'));
		$config['upload_path']   = 'assets';
		$config['allowed_types'] = 'jpg|gif|png|jpeg|JPG|PNG';
		$config['max_size']      = '100000';
		$config['width']         = '150';
		$config['height']        = '150';
		$this->load->library('upload', $config);
		$account = $this->session->account;
		$this->load->model('First_model');

		if (!$this->upload->do_upload('file')) {
			echo $this->upload->display_errors('<p>', '</p>');
		} else {
			$this->First_model->imageupload($this->upload->data('file_name'), $account);
			redirect('index.php/profiledetails');
		}
	}
	/**update information controller**/
	public function changeaccountinfo() {
		$this->load->helper('url');
		$this->load->model('First_model');
		$account  = $this->session->account;
		$password = $this->session->password;
		$this->First_model->changeaccountinfo($account, $password);
		$data            = array();
		$data['message'] = 'Account Info Change Successfully';
		redirect('index.php/profiledetails');
	}
	/**user profile page**/
	public function profile() {
		$this->load->helper('url');
		$this->load->view('front/user_profile');
	}
	/**logout process**/
	public function logout() {
		$this->session->unset_userdata('account');
		$this->session->unset_userdata('password');
		$data['message'] = "logout Successfully";
		$this->session->set_userdata($data);
		redirect(base_url());

	}
	/**profile details**/
	public function profiledetails() {
		$this->load->helper('url');
		$account = $this->session->account;
		$this->load->model('First_model');
		$data         = array();
		$result       = $this->First_model->account_info($account);
		$data['data'] = $result;
		$this->load->view('front/profiledetails', $data);
	}

	public function updateinfo() {
		$this->load->helper('url');
		$this->load->view('front/updateinfo');
	}
	/**edit profile info page**/
	public function userinfochange() {
		$this->load->helper('url');
		$this->load->view('front/userinfochange');
	}
	/**foget password page**/
	public function forget_password() {
		$this->load->helper('url');
		$this->load->view('front/forget_password');
	}

}
