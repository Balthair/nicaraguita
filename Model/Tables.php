<?php  

class Tables extends AppModel {

	public $useTable = false;

	public function add($data = null) {
		$this->save($data);
	}

	public function search($tipe = null,$condition = null) {
		$this->find($tipe, $condition);
	}

}
?>