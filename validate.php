<?php

    session_start();

    $authenticate = false;
    $id_user = null;
    $user_profile = null;

    $profile = array(1 => 'Administrativo', 2 => 'Usuário');

    $users = [
        array('id' => 1, 'email' => 'admin@gmail.com', 'pass' => '123456', 'perfil' => 1),
        array('id' => 2, 'email' => 'teste@gmail.com', 'pass' => '123456', 'perfil' => 1 ),
        array('id' => 3, 'email' => 'user@gmail.com', 'pass' => '123456', 'perfil' => 2),
    ];

    foreach ( $users as $user ) 
    {
        if ( $user['email'] == $_POST['email'] && $user['pass'] == $_POST['pass'] ) 
        {
            $authenticate = true;
            $id_user = $user['id'];
            $user_profile = $user['perfil'];
        }
    }

    if ( $authenticate ) 
    {
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $id_user;
        $_SESSION['perfil'] = $user_profile;
        header('Location: home.php');
    }

    else 
    {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }
?>