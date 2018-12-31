<?php
/**
 * summary
 */
class Admin_modal extends CI_Model {
	/**
	 * summary
	 */
	public function __construct() {
		parent::__construct();
	}

	/**admin profile modal **/
	public function adminloginmodal($account, $password) {
		$this->load->database();
		$query  = $this->db->query("select * from admin WHERE username = '$account' and password = '$password'");
		$result = $query->result_array();
		print($this->db->last_query());
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}

	}

	/**update member list **/
	public function updatememberList() {
		$this->load->database();
		$money = Null;
		$this->db->select('*');
		$this->db->from('account_details');
		$this->db->where('money', Null);
		$query  = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	/**all customer list **/
	public function allcustomerlist() {
		$this->load->database();
		$money = Null;
		$this->db->select('*');
		$this->db->from('account_details');
		$query  = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	/**insert money **/
	public function addmoneyprocess($amount, $id) {
		$this->load->database();
		$data = array(
			'money' => $amount,
		);
		$this->db->where('id', $id);
		$this->db->update('account_details', $data);
	}
	/**delete user model**/
	public function deleteuser($id) {
		$this->load->database();
		$this->db->where('id', $id);
		$this->db->delete('account_details');
	}
}
?>