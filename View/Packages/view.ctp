<div class="center">
	<div id="paquete">
		<h1><?php echo $package['Package']['nombre'] ?></h1>
		<div id="title">
	        <div class="title"><span>$</span> <?php echo $package['Package']['precio'] ?></div>
	        <div class="headTitle">
	        	<div class="share">
					<div class="fb-like" data-href="https://www.google.com.ni/maps/@12.1976782,-86.3096156,12z" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
					<div class="twitter">
						<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>
					</div>
				</div>
	        </div>
	    </div>
		
		<?php $x = 0; ?>
		<?php foreach ($package['Image'] as $imagen): ?>
			<?php  
				$src = $this->Html->url(
	                "/files/".$imagen["seccion"]."/thumbs/".$imagen["id"].".".$imagen["extension"],true
	            ); 
	            $this->Image->imagen($src);

	            if ($this->Image->image_width == 0 or count($package['Image']) < 1) {
	                
	                $src = $this->Html->url(
	                    "/img/noimage.jpg",
	                    true
	                );

	                $this->Image->image($src);
	            }
				if ($x === 0) {
		            echo $this->Html->image(
		                $src,
		                array('style' => 'width:100%')
		            ); 
				} else {
					echo $this->Html->image(
		                $src,
		                array('style' => 'height:133px')
		            ); 
				}
				$x++;
	        ?>
		<?php endforeach ?>
		<article>
			<?php echo $package['Package']['descripcion'] ?>
		</article>
		<div id="recomendados">
	        <div id="title">
	            <div class="title">Otros Servicios</div>
	            <div class="headTitle">
	                <?php 
	                echo $this->Html->link(
	                    '',
	                    '/paquetes/vertodos',
	                    array(
	                        'class' => 'next',
	                        'style' => 'position:absolute; top:11px; right: 11px'
	                    )
	                ); ?>
	            </div>
	        </div>
	        <div class="otros">
	        	
	        </div>
	    </div>
		 <div id="pedido">
	        <div class="formPedido">
	            <?php  
	            echo $this->Form->create(
	                false,
	                array(
	                    'inputDefaults' => array(
	                        'div' => false,
	                        'label' => false,
	                        'required'
	                    ),
	                    'action' => 'pedido'
	                )
	            );
	            echo $this->Session->flash();
	            echo $this->Session->flash('auth');
	            echo $this->Form->input('nombre', array('class'=>'input inputLarge','placeholder'=>'Nombre'));
	            echo $this->Form->input('ninos', array('class'=>'input inputMin','placeholder'=>'Niños'));
	            echo $this->Form->input('adultos', array('class'=>'input inputMin','placeholder'=>'Adultos'));
	            echo $this->Form->input('email', array('class'=>'input inputLarge','placeholder'=>'Email'));
	            echo $this->Form->textarea('mensaje', array('class'=>'input inputLarge','placeholder'=>'Mensaje','style'=>'height:179px'));
	           
	            echo $this->Form->end(
	                array(
	                    'label' => 'Solicitar',
	                    'class' => 'btn'
	                )
	            );
	            ?>
	            <div class="clear"></div>
	        </div>
	    </div>
	</div>
</div>
<div class="clear" style="height:10px"></div>