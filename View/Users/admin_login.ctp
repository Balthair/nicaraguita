<div id="wrapper_login">
	<div id="login_form">
		
		<?php  
		echo $this->Session->flash();
        echo $this->Session->flash('auth');
		echo $this->Form->create(
			'User',
			array(
				'inputDefaults' => array(
					'div' => false
				)
			)
		);
		echo $this->Form->input('username', array('class'=>'input form-control'));
		echo $this->Form->input('password', array('class'=>'input form-control'));

		echo $this->Form->end(
            array(
                'label' => 'Iniciar Sesión',
                'class' => 'btn btn-primary'
            )
        );
		?>
	</div>
	

</div>
