<?php

    $validao = false;
    //usarios base
    $usuarios = [
        array('email' => 'andreson.glin@gmail.com', 'senha' => '123'),
        array('email' => 'izabel.vaz@gmail.com', 'senha' => '123456')
    ];

    //percorrendo array dados dos usuarios
    foreach($usuarios as $user){
 
        if($user['email'] == $_GET['email'] && $user['senha'] == $_GET['senha']) {
            $validao = true;
        }
    }

        if($validao){
            echo 'Acesso Liberado';
        }else {
            header('location: index.php?login=erro');
        }


?>