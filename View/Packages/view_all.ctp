 <div id="lastPaquetes" class="center">
 	<div id="title">
        <div class="title">Paquetes</div>
        <div class="headTitle">
           
        </div>
    </div>
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