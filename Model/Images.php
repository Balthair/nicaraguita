<?php
class Image extends AppModel {
    public $name = 'Image';
    public $actsAs = array(
		'MeioUpload.MeioUpload' => array( 
	        'filename' => array( 
	            'dir' => 'files{DS}{ModelName}', 
	        )
	    ) 
    );  
}
?>