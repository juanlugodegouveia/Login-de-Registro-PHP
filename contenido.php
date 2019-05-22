<?php session_start();

if (isset($_SESSION['usuario'])) { //Validar para que solo puedan iniciar al contenido con sesión iniciada.
  require 'views/contenido.view.php';
} else {
    header('Location: login.php');
}

require 'views/contenido.view.php';

 ?>
