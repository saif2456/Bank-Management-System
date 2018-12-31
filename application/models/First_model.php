<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * summary
 */
class First_model extends CI_Model {
	/**
	 * summary
	 */
	public function __construct() {
		parent::__construct();
	}

	/**register new user **/
	public function save_user($account, $password) {
		$this->load->database();
		$pass             = md5($password);
		$data             = array();
		$data['account']  = $account;
		$data['password'] = $pass;
		$this->db->insert('register', $data);
		$this->db->insert('account_details', $data);
	}
	/**login profile modal **/
	public function login_profile($account, $password) {
		$this->load->database();
		$pass   = md5($password);
		$query  = $this->db->query("select * from register WHERE account = '$account' and password = '$pass'");
		$result = $query->result_array();
		print($this->db->last_query());
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}

	}
	/**update information modal**/
	public function changeaccountinfo($account, $password) {
		$this->load->database();
		$data             = array();
		$data['name']     = $this->input->post('name', true);
		$data['l_name']   = $this->input->post('l_name', true);
		$data['age']      = $this->input->post('age', true);
		$data['dob']      = $this->input->post('dob', true);
		$data['gender']   = $this->input->post('gender', true);
		$data['nid']      = $this->input->post('nid', true);
		$data['branch']   = $this->input->post('branch', true);
		$data['city']     = $this->input->post('city', true);
		$data['zip']      = $this->input->post('zip', true);
		$data['religion'] = $this->input->post('religion', true);
		$data['address']  = $this->input->post('address', true);
		$data['nation']   = $this->input->post('nation', true);
		$this->db->where('account', $account);
		$this->db->update('account_details', $data);
	}
	/**image upload model**/
	public function imageupload($path, $account) {
		$this->load->database();
		$data = array(
			'img' => $path,
		);
		$this->db->where('account', $account);
		$this->db->update('account_details', $data);

	}

	//login user profile//

	public function profiledetails($account) {
		$this->load->database();
		$query  = $this->db->query("select * from register where account = '$account'");
		$result = $query->result_array();
		return $result;

	}
	//select all info
	public function account_info($account) {
		$this->load->database();
		$query  = $this->db->query("select * from account_details WHERE account = '$account'");
		$result = $query->result_array();
		return $result;

	}

	/**deposite modal**/
	public function deposite_done($account) {
		$this->load->database();
		//insert deposite data
		$data                = array();
		$data['account_one'] = $this->session->account;
		$data['account_two'] = $this->input->post('account_two', true);
		$data['money']       = $this->input->post('money', true);
		$data['tran_id']     = uniqid();
		$data['type']        = "Deposite";
		$this->db->insert('transaction', $data);
		//insert deposite data

		//Sub deposite money from own account//
		$query = $this->db->query("select * from total_amount WHERE account='$account'");
		$data  = $query->result_array();

		foreach ($data as $row) {
			$totalmoney = $row['money'];
		}
		$present_money_own = $totalmoney-$this->input->post('money', true);
		$data2             = array();
		$data2['money']    = $present_money_own;
		$this->db->where('account', $this->session->account);
		$this->db->update('total_amount', $data2);
		//Sub deposite money from own account//

		//Add deposite money into other account//
		$second_account = $this->input->post('account_two', true);
		$query          = $this->db->query("select * from total_amount WHERE account='$second_account'");
		$data3          = $query->result_array();

		foreach ($data3 as $row) {
			$totalmoney2 = $row['money'];
		}
		$present_money_second = $totalmoney2+$this->input->post('money', true);
		$data4                = array();
		$data4['money']       = $present_money_second;
		$this->db->where('account', $second_account);
		$this->db->update('total_amount', $data4);
		//Add deposite money into other account//
	}

	//Send Money
	public function sendmoney_done($account) {
		$this->load->database();
		//insert deposite data
		$data                = array();
		$data['account_one'] = $this->session->account;
		$data['account_two'] = $this->input->post('account_two', true);
		$data['money']       = $this->input->post('money', true);
		$data['tran_id']     = uniqid();
		$data['type']        = "Send Money";
		$this->db->insert('transaction', $data);
		//insert deposite data

		//Sub deposite money from own account//
		$query = $this->db->query("select * from total_amount WHERE account='$account'");
		$data  = $query->result_array();

		foreach ($data as $row) {
			$totalmoney = $row['money'];
		}
		$present_money_own = $totalmoney-$this->input->post('money', true);
		$data2             = array();
		$data2['money']    = $present_money_own;
		$this->db->where('account', $this->session->account);
		$this->db->update('total_amount', $data2);
		//Sub deposite money from own account//

		//Add deposite money into other account//
		$second_account = $this->input->post('account_two', true);
		$query          = $this->db->query("select * from total_amount WHERE account='$second_account'");
		$data3          = $query->result_array();

		foreach ($data3 as $row) {
			$totalmoney2 = $row['money'];
		}
		$present_money_second = $totalmoney2+$this->input->post('money', true);
		$data4                = array();
		$data4['money']       = $present_money_second;
		$this->db->where('account', $second_account);
		$this->db->update('total_amount', $data4);
		//Add deposite money into other account//
	}

	//transaction history
	public function transaction_history($account) {
		$this->load->database();
		$query = $this->db->query("select * from transaction where account_one ='$account'");
		$data  = $query->result_array();
		return $data;
	}

}

?>/