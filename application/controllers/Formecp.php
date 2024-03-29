<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formecp extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('formecpmodel');
	}

	public function index(){
		$this->load->view('welcome_message');
	}

	public function form(){
		$result = $this->formecpmodel->getData($this->session->userdata('id'));
		$this->load->view('employee_resign', $result);
	}

	public function employeeAjax(){
		$result = $this->formecpmodel->getEmployee();
		header('Content-Type: application/json');
		echo json_encode($result);
	}

	public function employeeResign(){
		$data = [
			'emp_number' => $_POST['emp_number'],
			'leave_date' => $_POST['leave_date']
		];
	 	$this->formecpmodel->employeeResign($data);
		$this->session->set_userdata('id', $data['emp_number']);
		redirect('/form');
	}

	public function owningCompany(){
		$table = 'owningCompany';
		$data = [
			'emp_number' => $_POST['emp_number'],
			'owned' => $_POST['owned']
		];
		if($data['owned']){
			$data['amount'] = $_POST['amount'];
		}
		$id = $this->formecpmodel->insertTo($table, $data);
		$this->uploadImage($table, $id);
		redirect('/form');
	}

	public function itEquipment(){
		$table = 'itEquipment';
		$data = [
			'emp_number' => $_POST['emp_number'],
			'laptop' => $_POST['laptop'],
			'mobile' => $_POST['mobile'],
			'ipad' => $_POST['ipad'],
			'door' => $_POST['door'],
			'other' => $_POST['other']
		];
		$id = $this->formecpmodel->insertTo($table, $data);
		$this->uploadImage($table, $id);
		redirect('/form');
	}

	public function emailClose(){
		$table = 'emailClose';
		$data = [
			'email' => $_POST['email'],
			'emp_number' => $_POST['emp_number']
		];
		$this->formecpmodel->insertTo($table, $data);
		redirect('/form');
	}

	public function phoneAccount(){
		$table = 'phoneAccount';
		$data = [
			'emp_number' => $_POST['emp_number'],
			'transfer' => $_POST['transfer'],
			'terminate' => $_POST['terminate'],
			'retain' => $_POST['retain']
		];
		$id = $this->formecpmodel->insertTo($table, $data);
		$this->uploadImage($table, $id);
		redirect('/form');
	}

	public function vehicle(){
		$table = 'vehicle';
		$data = [
			'emp_number' => $_POST['emp_number'],
			'status' => $_POST['status']
		];
		$id = $this->formecpmodel->insertTo($table, $data);
		$this->uploadImage($table, $id);
		redirect('/form');
	}

	public function personalProtective(){
		$table = 'personalProtective';
		$data = [
			'emp_number' => $_POST['emp_number'],
			'uniform' => $_POST['uniform'],
			'helmet' => $_POST['helmet'],
			'glasses' => $_POST['glasses'],
			'shoes' => $_POST['shoes']
		];
		$id = $this->formecpmodel->insertTo($table, $data);
		$this->uploadImage($table, $id);
		redirect('/form');	
	}

	public function accessCard(){
		$table = 'accessCard';
		$data = [
			'emp_number' => $_POST['emp_number'],
			'building' => $_POST['building'],
			'locker' => $_POST['locker'],
			'insurance' => $_POST['insurance'],
			'badge' => $_POST['badge']
		];
		$id = $this->formecpmodel->insertTo($table, $data);
		$this->uploadImage($table, $id);
		redirect('/form');
	}

	public function storeEquipment(){
		$table = 'storeEquipment';
		$data = [
			'emp_number' => $_POST['emp_number'],
			'equipment' => $_POST['equipment'],
			'out_item' => $_POST['item']
		];
		$id = $this->formecpmodel->insertTo($table, $data);
		$this->uploadImage($table, $id);
		redirect('/form');
	}

	public function companyInspected(){
		$table = 'companyInspected';
		$data = [
			'emp_number' => $_POST['emp_number'],
			'company' => $_POST['company'],
			'inspect_by' => $_POST['inspect_by'],
			'amount' => $_POST['amount']
		];
		$id = $this->formecpmodel->insertTo($table, $data);
		$this->uploadImage($table, $id);
		redirect('/form');
	}

	public function owningCompanyApprove(){
		$table = 'owningCompany';
		$id = $_GET['emp_number'];
		$this->formecpmodel->approveTo($table, $id);
		redirect('/form');
	}

	public function itEquipmentApprove(){
		$table = 'itEquipment';
		$id = $_GET['emp_number'];
		$this->formecpmodel->approveTo($table, $id);
		redirect('/form');
	}

	public function phoneAccountApprove(){
		$table = 'phoneAccount';
		$id = $_GET['emp_number'];
		$this->formecpmodel->approveTo($table, $id);
		redirect('/form');
	}

	public function vehicleApprove(){
		$table = 'vehicle';
		$id = $_GET['emp_number'];
		$this->formecpmodel->approveTo($table, $id);
		redirect('/form');
	}

	public function personalProtectiveApprove(){
		$table = 'personalProtective';
		$id = $_GET['emp_number'];
		$this->formecpmodel->approveTo($table, $id);
		redirect('/form');	
	}

	public function accessCardApprove(){
		$table = 'accessCard';
		$id = $_GET['emp_number'];
		$this->formecpmodel->approveTo($table, $id);
		redirect('/form');
	}

	public function storeEquipmentApprove(){
		$table = 'storeEquipment';
		$id = $_GET['emp_number'];
		$this->formecpmodel->approveTo($table, $id);
		redirect('/form');
	}

	public function companyInspectedApprove(){
		$table = 'companyInspected';
		$id = $_GET['emp_number'];
		$this->formecpmodel->approveTo($table, $id);
		redirect('/form');
	}

	private function uploadImage($table, $id){
		if($_FILES['image']['error'] == 0){
			$config['upload_path'] = FCPATH . 'public/assets/images';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['encrypt_name'] = true;

			$this->load->library('upload', $config);
			if($this->upload->do_upload('image')){
				$data = [
					'image' => $this->upload->data('file_name'),
					'approve_status' => true
				];
				$this->formecpmodel->updateTo($table, $data, $id);
				return true;
			}
			show_error('jpg, png and jpeg format only!', 422, 'Bad Input');
		}
	}
}
