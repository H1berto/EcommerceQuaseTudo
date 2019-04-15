<?php
session_start();
 $logado = $_SESSION['logado'];
 if (!$logado) {
     header('Location:login.php');
 } 
$pontos = $_SESSION['pontos'];
?>

<html>

<head>
    <Title> Carrinho </title>
    <link href="..\assets\css\estilo.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="shortcut icon" href="..\imagens\favicon.ico" type="image/x-icon" />
    <meta charset="UTF-8">
</head>

<body>
    <header>
      
    <header>
         <div class="topo">
            <div>
                <img id="img_topo" src="../imagens/11697.jpg" >
            </div>
            <div>
                <h1 id="titulo">MINI MERCADO QUASE TUDO</h1>
                <h2 id="subtitulo">Aqui você economiza de verdade!!</h2>
            </div>
        </div>

        <br>
        <div class="nav_bar">
            <table class="nav_content"  border=1 bgcolor=#ffcc00 cellpadding=0 cellspacing= 0 width=100% >
                <tr>
                    <th class="nav_item"> <a href="index.html">Inicio</a> </th>
                    <th class="nav_item"> <a href="promocoes.php">Promoções</a> </th>
                    <th class="nav_item"> <a href="produtos.php">Produtos</a> </th>
                    <th class="nav_item"> <a href="carrinho.php">Meu Carrinho</a></th>
                    <th class="nav_item"> <a href="login.php">Login</a> </th>
                </tr>
            </table>
        </div>
    </header>
    </header>

    <main style="text-align: center;">
    <?php
        if(isset($_POST['comprar'])){
            $_SESSION['cart'] = array();
            echo "<h2>COMPRA EFETUADA COM SUCESSO</h2><br>";
            $valor=intval($_POST['valor']);
            var_dump($valor);
            if ($valor>0) {
                echo "<b><p>Você acaba de ganhar ".$valor." pontos de fidelidade em nosso supermercado!</p></b><br>";
                echo "<p>Agradecemos a preferencia! Lembrando que a cada R$10 em compras você ganha<br> 
                        1 ponto de fidelidade.Entre em contato com a nossa equipe para que possamos explicar<br> seus bonus acumulando esses pontos!</p>";
            }else{
                echo "<p>Agradecemos a preferencia! Lembrando que a cada R$10 em compras você ganha<br> 
                        1 ponto de fidelidade.Entre em contato com a nossa equipe para que possamos explicar<br> seus bonus acumulando esses pontos!</p>";
            }
            
        }else{
            header('Location:produtos.php');
        }

    ?>
</main>

</body>

</html>