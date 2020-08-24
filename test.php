<?php

    require './Session.php';


    //init session
    $sesion = new Session();
    
    //set
    $sesion->set('key', 'value');

    $sesion->set('key2',  array(
        'key' => 'value'
    ));

    //get
    $sesion->get('key');
    $sesion->get('key2');

    //destroy
    $sesion->destroy();

    
    