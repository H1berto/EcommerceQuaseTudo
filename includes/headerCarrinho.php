<?php 
session_start();
// $logado = $_SESSION['logado'];
// if (!$logado) {
//     header('Location:login.php');
// } else {
    if (empty($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
// }	
  	