<?php
    $usuario= $_POST['usuario'];
    $senha= $_POST['senha'];

   $usuarios = array(
       array(1,"admin","1234"),
       array(2,"aluno","4321"),
       array(3,"secretaria","0000")
    );

    if ($usuario == $usuarios[0][1] && $senha == $usuarios[0][2]){
    	session_start();
    	$_SESSION['usuario'] = $usuario;
    	$_SESSION['senha'] = $senha;
    	header('location:restrita.php');	
    } elseif ($usuario == $usuarios[1][1] && $senha == $usuarios[1][2]){
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('location:aluno.php');
    } else{
    	unset($_SESSION['usuario']);
    	unset($_SESSION['senha']);
    	header('location:index.html');
    }
?>    