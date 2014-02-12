<?php 
App::uses('AppController', 'Controller');

/**
* 
*/
class HomeController extends AppController {

	public $components = array('Image');

	public $uses = array('Package');
	
	public function index() {
		$packages =  $this->Package->find(
            'all',
            array(
                'conditions' => array(
                    'recomendado' => 0
                ),
                'limit'=>4
            )
        );
        $recomendados = $this->Package->find(
            'all',
            array(
                'conditions' => array(
                    'recomendado' => 1
                ),
                'limit'=>3
            )
        );
        $this->set(
            array(
                'title_for_layout' => 'Nicaraguita Tours',
                'packages' => $packages,
                'recomendados' => $recomendados
            )
        );
	}

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index'); // Letting users register themselves
    }

}

?>