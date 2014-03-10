<?php 
App::uses('AppController', 'Controller');

/**
* 
*/
class HomeController extends AppController {

	public $components = array('Image');

	public $uses = array('Package','Categoria','Special');
	
	public function index() {
		$packages =  $this->Package->find(
            'all',
            array(
                'conditions' => array(
                    'recomendado' => 0
                ),
                'limit'=>4,
                'order' => array('Package.id'=>'DESC')
            )
        );
        $recomendados = $this->Package->find(
            'all',
            array(
                'conditions' => array(
                    'recomendado' => 1
                ),
                'limit'=>5
            )
        );

        $specials = $this->Special->find(
            'all',
            array(
                'conditions' => array(
                    'Special.titulo !=' => ''
                ),
                'limit'=>5
            )
        );

        $categorias = $this->Categoria->find('all',array('conditions'=>array('nombre !='=>'')));
        $this->layout = "temp";
        $this->set(
            array(
                'title_for_layout' => 'Nicaraguita Tours',
                'packages' => $packages,
                'recomendados' => $recomendados,
                'categorias' => $categorias,
                'specials' => $specials
            )
        );
	}

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index'); // Letting users register themselves
    }

}

?>