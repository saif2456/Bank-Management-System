<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * summary
 */
class Transaction extends CI_Controller {
	/**
	 * summary
	 */
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	/**deposite page**/
	public function depositemoney() {
		$this->load->helper('url');
		$this->load->model('First_model');
		$account      = $this->session->account;
		$data         = array();
		$result       = $this->First_model->account_info($account);
		$data['data'] = $result;
		$this->load->view('pages/depositemoney', $data);
	}
	/**deposite transaction controller**/
	public function depositemoney_done() {
		$this->load->helper('url');
		$this->load->model('First_model');
		$account = $this->session->account;
		/**deposite modal**/
		$this->First_model->deposite_done($account);
		redirect('index.php/depositemoney');
	}
	/**sendmoney transaction controller**/
	public function sendmoney_done() {
		$this->load->helper('url');
		$this->load->model('First_model');
		$account = $this->session->account;
		$this->First_model->sendmoney_done($account);
		redirect('index.php/sendemoney');
	}
	/**send money page**/
	public function sendemoney() {
		$this->load->helper('url');
		$this->load->model('First_model');
		$account      = $this->session->account;
		$data         = array();
		$result       = $this->First_model->account_info($account);
		$data['data'] = $result;
		$this->load->view('pages/sendemoney', $data);
	}
	/**help page**/
	public function help() {
		$this->load->helper('url');
		$this->load->view('pages/help');
	}
	/**about us page**/
	public function aboutus() {
		$this->load->helper('url');
		$this->load->view('pages/aboutus');
	}
	/**transaction history page**/
	public function transaction_history() {
		$this->load->helper('url');
		$this->load->model('First_model');
		$account      = $this->session->account;
		$data         = array();
		$result       = $this->First_model->transaction_history($account);
		$data['data'] = $result;
		$this->load->view('pages/transaction_history', $data);
	}
}

?>