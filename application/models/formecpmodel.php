<?php 
class FormEcpModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function getEmployee(){
		$query = $this->db->like('emp_number', $_GET['emp_number'])->get('employee', 5);
		return $query->result();
	}

	public function employeeResign($data){
		$update = $this->db->update('employee', ['leave_date' => $data['leave_date']], ['emp_number' => $data['emp_number']]);

		$relations = [
			'employee',
			'accesscard',
			'companyinspected',
			'emailclose',
			'itequipment',
			'owningcompany',
			'personalprotective',
			'phoneaccount',
			'storeequipment'
		];
		$result = [];
		foreach($relations as $relation){
			$result[$relation] = $this->db->get_where($relation, ['emp_number' => $data['emp_number']])->result();
		}
		return $result;
	}

	public function insertTo($table, $data){
		$this->employeeValidation($data['emp_number']);
		$checkIfExists = $this->db->get_where($table, ['emp_number' => $data['emp_number']]);
		if(!$checkIfExists->result()){
			$insert = $this->db->insert($table, $data);
			return $data['emp_number'];
		}
		$this->updateTo($table, $data, $data['emp_number']);
		return $data['emp_number'];
	}

	public function updateTo($table, $data, $id){
		$this->db->update($table, $data, ['emp_number' => $id]);
	}

	private function employeeValidation($emp_number){
		$checkIfExists = $this->db->get_where('employee', ['emp_number' => $emp_number]);
		if(!$checkIfExists->result()){
			show_error('Employee Number '. $emp_number .' dont exists', 422, 'Bad Input');
		}
	}
}
