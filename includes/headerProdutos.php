<?php 
//inicializa uma sessão, onde é possivel salvar valores na paginas a qual poderam ser acessadas em todo o projeto.em qualquer pagina a qual seja necessario manipular variaveis de sessão é necessario adicionar este comando.
session_start();
//session_unset();
//recupera a variavel de sessão logado
// $logado=$_SESSION['logado'];
//se ela for falsa retorna a pagina de login pois ele não se logou
// if(!$logado){
//     header('Location:login.php');
// }
//verifica se a variavel de sessão está vazia e se o contador dos produtos também esta 
if (empty($_SESSION['cart']) && empty($_SESSION['cont'])) {
    //inicializa o carrinho e o contador
    $_SESSION['cart'] = array();
    $_SESSION['cont'] = 0;
} else {
    //senão inplementa +1 no contador
    $_SESSION['cont']++;
}
