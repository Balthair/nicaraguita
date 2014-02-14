<div class="box_skitter box_skitter_large">
    <ul>
        <li>
            <?php
            echo $this->Html->image(
                '/files/package/1.png',
                array(
                    'url' => '#'
                )
            );
            ?>
            <div class="label_text">
                <div class="center">
                    Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id.
                </div>
            </div>
        </li>
        <li>
            <?php
            echo $this->Html->image(
                '/files/package/1.png',
                array(
                    'url' => '#'
                )
            );
            ?>
            <div class="label_text">
                <div class="center">
                    Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id.
                </div>
            </div>
        </li>
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
    <a href="#" class="categoria">
        <?php 
        echo $this->Html->image(
            'hotel.png'
        );
         ?>
        <div class="categoriaLabel">
            Internacional
        </div>
    </a>
    <a href="#" class="categoria">
        <?php 
        echo $this->Html->image(
            'mokul.png'
        );
         ?>
        <div class="categoriaLabel">
            Nacionales
        </div>
    </a>
    <a href="#" class="categoria">
        <?php 
        echo $this->Html->image(
            'boletos.png'
        );
         ?>
        <div class="categoriaLabel">
            Boletos
        </div>
    </a>
    <a href="#" class="categoria">
        <?php 
        echo $this->Html->image(
            'mapa.png'
        );
         ?>
        <div class="categoriaLabel">
            Circuitos
        </div>
    </a>
    <a href="#" class="categoria">
        <?php 
        echo $this->Html->image(
            'servicios.png'
        );
         ?>
        <div class="categoriaLabel">
            Servicios
        </div>
    </a>

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
                    $src = $this->Html->url(
                        "/files/dependencias/logos/".$p["Images"]["id"].".".$p["Images"]["extension"],
                        true
                    );

                    $this->Image->image($src);

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
                    <a href="" class="mas">
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
                echo $this->Html->link('','#',array('class'=>'next'));
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
            echo $this->Form->input('salida', array('class'=>'input inputMin','placeholder'=>'Fecha Salida'));
            echo $this->Form->input('regreso', array('class'=>'input inputMin','placeholder'=>'Fecha Regreso'));
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
    

</div>