<?php
    include_once('../includes/headerCarrinho.php');
    include_once('../app/controllers/ProdutoDAO.php');

if (isset($_POST['excluir'])&&isset($_POST['id'])) {
    //crio um objeto da classe controller produtoDAO
    $dao = new ProdutoDAO;
    $result= $dao->excluir($_POST);
}

if (isset($_POST['resetCart'])) {
    $_SESSION['cart'] = array();
    header('Location:carrinho.php');
}


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

    <h2>Lista de produtos:</h2>
    <?php
    //se a variavel de sessão cart não estiver vazia
    if (!empty($_SESSION['cart'])) {
        //variavel a qual irá armazenar o carrinho para manipulação
        $produtos = $_SESSION['cart'];

        //subtotal dos produtos
        $total = 0;
        ?>
        <table class="produtos" border=1 bgcolor=#ffcc00 cellpadding=0 cellspacing= 0 width=100%>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preco unitario</th>
                <th>Subtotal</th>
                <th>Ação</th>
            </tr>
            <?php
            //foreach é uma estrutura de repetição especifica para manipulação de arrays, onde manipulamos os valores inseridos deles por identificadores de chave => valor 
            foreach ($produtos as $subKey => $subArray) :
                if (isset($subArray['idProduto'])) {
                    ?>
                    <tr>
                        <th><img style="width: 100px;height: 100px;" src="<?php echo "{$subArray['imagemProduto']}"; ?>" class="imagens"></th>
                        <th><?php echo $subArray['nomeProduto']; ?></th>
                        <th><?php echo intval($subArray['qtdProduto']); ?></th>
                        <th><?php echo floatval($subArray['precoUnidade']); ?></th>
                        <th><?php echo (intval($subArray['qtdProduto']) * floatval($subArray['precoUnidade'])); ?></th>
                        <th>
                            <form action="carrinho.php" method="post">
                                <input type="submit" name="excluir" value="Excluir">
                                <input type="hidden" name="id" value="<?php echo "{$subArray['id']}"; ?>">
                            </form>
                        </th>
                    </tr>
                    <?php
                    $total += (intval($subArray['qtdProduto']) * floatval($subArray['precoUnidade']));
                }
            endforeach;
            ?>

            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <form action="carrinho.php" method="post">
                        <input type="submit" name="resetCart" value="Limpar Carrinho">
                    </form>
                </th>
            </tr>
        </table>
        <br>
        <table class="pagar" border=1 bgcolor=#ffcc00 cellpadding=0 cellspacing= 0 width=35%>
            <tr>
                <th id="subtotal"><b>SUBTOTAL DOS PRODUTOS:&nbsp;&nbsp;<?php echo $total; ?></b></th>
            </tr>
            <tr>                
                <th id="total"><b>TOTAL DOS PRODUTOS:&nbsp;&nbsp;<?php echo $total; ?></b></th>
            </tr>   
            <tr>   
                <th><h3><b><?php if ($total>6) {
                                $parcela=($total/6);
                                $parcela = number_format($parcela, 2, '.', '');
                                echo "6x de ".$parcela;
                            }else{
                                echo "1x de ".$total;
                            } ?></b></h3>
                    <p>sem juros no cartão</p><br>
                </th>
            </tr>
            <tr> 
                <th>
                    <h3><b><?php if($total>50){
                                $desconto = (0.95*$total);
                                echo "á vista ".$desconto;
                            }else{
                                echo "á vista".$total;
                            } ?></b></h3>
                    <p>no boleto com 5% de desconto para compras acima que R$50</p>
                </th>
            </tr>
        
            <th>
                <form action="compra.php" method="post">
                    <input type="hidden" name="valor" value="<?php echo "intval($total/10)"; ?>">
                    <input type="submit" name="comprar" value="Comprar">
                </form>
            </th>
        </table>
    <?php
} else {
    ?>
        <p style="text-align: center;">Não há produtos no carrinho!!</p>
    <?php
    $logado = $_SESSION['logado'];
    if (!$logado) {
     ?>
        <p style="text-align: center;">Faça login para aproveitar das melhores ofertas!!</p>
     <?php   
    }
}
?>


</body>

</html>