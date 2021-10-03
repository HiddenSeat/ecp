<?php 
class FormEcpModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function getEmployee(){
		$query = $this->db->get('employee', 5);
		return $query->result();
	}

	public function employeeResign($data){
		$update = $this->db->update_string('employee', ['leave_date' => $data['leave_date']], 'emp_number = "'.$data['emp_number'].'"');
		$this->db->query($update);
	}

	public function insertTo($table, $data){
		$this->employeeValidation($data['emp_number']);
		$checkIfExists = $this->db->get_where($table, ['emp_number' => $data['emp_number']]);
		if(!$checkIfExists->result()){
			$insert = $this->db->insert($table, $data);
			return $this->db->insert_id();
		}
		$this->updateTo($table, $data, $data['emp_number']);
		return $data['emp_number'];
	}

	public function updateTo($table, $data, $id){
		$update = $this->db->update_string($table, $data, 'emp_number = "'.$id.'"');
		$this->db->query($update);
	}

	private function employeeValidation($emp_number){
		$checkIfExists = $this->db->get_where('employee', ['emp_number' => $emp_number]);
		if(!$checkIfExists->result()){
			show_error('Employee Number '. $emp_number .' dont exists', 422, 'Bad Input');
		}
	}
}
