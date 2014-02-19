<div class="box_skitter box_skitter_large">
    <ul>
        <?php foreach ($specials as $e): ?>
            
        <li>
            <?php
            echo $this->Html->image(
                '/files/'.$e['Image']['seccion'].'/'.$e['Image']['id'].'.'.$e['Image']['extension']
            );
            ?>
            <div class="label_text">
                <div class="center">
                    <?php echo $e['Special']['titulo'] ?>
                </div>
            </div>
        </li>
        <?php endforeach ?>
    </ul>
</div>
<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        $(".box_skitter_large").skitter({
            dots: false,
            numbers: false,
            theme: 'minimalist',
            animation: 'cubeStop'
        });
    });
</script>

<div class="clear"></div>

<div class="center" id="circles">
    <?php foreach ($categorias as $categoria): ?>
        <a href="#" class="categoria">
            <?php 
            echo $this->Html->image(
                '/files/'.$categoria['Image']['seccion'].'/thumbs/'.$categoria['Image']['id'].'.'.$categoria['Image']['extension']
            );
             ?>
            <div class="categoriaLabel">
                <?php echo $categoria['Categoria']['nombre'] ?>
            </div>
        </a>
    <?php endforeach ?>
    
</div>

<div class="center" id="mainPaquetes">
    
    <div id="title">
        <div class="title">Ultimos Paquetes</div>
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
    <div id="lastPaquetes" class="center">
        <?php foreach ($packages as $p): ?>
            <div class="paquete">
                <div class="imgPaquete">
                    <?php 
                    if(isset($p["Image"][0])) {
                        $src = $this->Html->url(
                            "/files/".$p["Image"][0]["seccion"]."/thumbs/".$p["Image"][0]["id"].".".$p["Image"][0]["extension"],
                            true
                        );
                    } else {
                        $src = $this->Html->url(
                            "/img/noimage.jpg",
                            true
                        );
                    }

                    $this->Image->imagen($src);

                    if ($this->Image->image_width == 0 or count($packages) < 1) {
                        
                        $src = $this->Html->url(
                            "/img/noimage.jpg",
                            true
                        );

                        $this->Image->image($src);
                    }
                    echo $this->Html->image(
                        $src,
                        array(
                            'style' => 'height:100%'
                        )
                    ); 
                    ?>
                </div>
                <div class="infoPaquete">
                    <h2><?php echo $p['Package']['nombre'] ?></h2>
                    <article>
                        <?php echo $this->Text->truncate($p['Package']['descripcion'],380); ?>
                    </article>
                </div>
                <div class="controles">
                    <a href="<?php echo $this->Html->url('/packages/view/'.$p['Package']['id'].'-'.$p['Package']['permalink']); ?>" class="mas">
                        <?php echo $this->Html->image('mas.png'); ?>
                        Ver Más
                    </a>
                    <div class="precio">
                        <span>$</span><span><?php echo $p['Package']['precio'] ?></span>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <div id="recomendados">
        <div id="title">
            <div class="title">Recomendados</div>
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
        <?php foreach ($recomendados as $r): ?>
            <div class="recomendado">
                <span><?php echo $r['Package']['nombre'] ?></span>
                <?php 
                echo $this->Html->link('','/packages/view/'.$r['Package']['id'].'-'.$r['Package']['permalink'],array('class'=>'next'));
                ?>
            </div>
        <?php endforeach ?>
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
            echo $this->Form->input('salida', array('class'=>'input inputMin datepicker','placeholder'=>'Fecha Salida'));
            echo $this->Form->input('regreso', array('class'=>'input inputMin datepicker','placeholder'=>'Fecha Regreso'));
            echo $this->Form->input(
                'paquete',
                array(
                    'class'=>'input inputMin',
                    'options' => array(
                        1 => 'Nacionales',
                        2 => 'Internacionales',
                        3 => 'Miercoles',
                        4 => 'Jueves',
                        5 => 'Viernes',
                        6 => 'Sábado',
                        0 => 'Domingo'
                    )
                )
            );
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
    <script type="text/javascript">
        $(function() {
            $( ".datepicker" ).datepicker();
          });
    </script>
    

</div>