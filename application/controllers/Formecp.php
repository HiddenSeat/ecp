<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formecp extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('formecpmodel');
	}

	public function index(){
		$this->load->view('welcome_message');
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
	}

	public function owningCompany(){
		$table = 'owningCompany';
		$data = [
			'emp_number' => $_POST['emp_number'],
			'owned' => $_POST['owned'],
			'amount' => $_POST['amount'],
		];
		$id = $this->formecpmodel->insertTo($table, $data);
		
		$this->uploadImage($table, $id);
	}

	public function itEquipment(){
		$table = 'itEquipment';
		$data = [
			'laptop' => $_POST['laptop'],
			'mobile' => $_POST['mobile'],
			'ipad' => $_POST['ipad'],
			'door' => $_POST['door'],
			'other' => $_POST['other']
		];
		$id = $this->formecpmodel->insertTo($table, $data);
		$this->uploadImage($table, $id);
	}

	public function emailClose(){
		$table = 'emailClose';
		$data = [
			'email' => $_POST['email']
		];
		$this->formecpmodel->insertTo($table, $data);
	}

	public function phoneAccount(){
		$table = 'phoneAccount';
		$data = [
			'transfer' => $_POST['transfer'],
			'terminate' => $_POST['terminate'],
			'retain' => $_POST['retain']
		];
		$id = $this->formecpmodel->insertTo($table, $data);
		$this->uploadImage($table, $id);
	}

	public function vehicle(){
		$table = 'vehicle';
		$data = [
			'status' => $_POST['status']
		];
		$id = $this->formecpmodel->insertTo($table, $data);
		$this->uploadImage($table, $id);
	}

	public function personalProtective(){
		$table = 'personalProtective';
		$data = [
			'uniform' => $_POST['uniform'],
			'helmet' => $_POST['helmet'],
			'glasses' => $_POST['glasses'],
			'shoes' => $_POST['shoes']
		];
		$id = $this->formecpmodel->insertTo($table, $data);
		$this->uploadImage($table, $id);
		
	}

	public function accessCard(){
		$table = 'accessCard';
		$data = [
			'building' => $_POST['building'],
			'locker' => $_POST['locker'],
			'other' => $_POST['other']
		];
		$id = $this->formecpmodel->insertTo($table, $data);
		$this->uploadImage($table, $id);
	}

	public function storeEquipment(){
		$table = 'outItem';
		$data = [
			'equipment' => $_POST['equipment'],
			'outItem' => $_POST['item']
		];
		$id = $this->formecpmodel->insertTo($table, $data);
		$this->uploadImage($table, $id);
	}

	public function companyInspected(){
		$table = 'companyInspected';
		$data = [
			'inspect_by' => $_POST['inspect_by'],
			'amount' => $_POST['amount']
		];
		$id = $this->formecpmodel->insertTo($table, $data);
		$this->uploadImage($table, $id);
	}

	private function uploadImage($table, $id){
		if($_FILES['image']['error'] == 0){
			$config['upload_path'] = FCPATH . 'public/assets/images';
			$config['allowed_types'] = 'jpg|png|jpeg';

			$this->load->library('upload', $config);
			if($this->upload->do_upload('image')){
				$data = [
					'image' => $this->upload->data('file_name'),
					'approve_status' => true
				];
				$this->formecpmodel->updateTo($table, $data, $id);
				return true;
			}
			show_error('jpg, png and jpeg only!', 422, 'Bad Input');
		}
		show_error('Image is broken, please change to other image', 422, 'Image Error');
	}
}
