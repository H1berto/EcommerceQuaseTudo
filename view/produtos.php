<?php
include_once('../includes/headerProdutos.php');
include_once('../app/controllers/ProdutoDAO.php');
$duplicado = false;
//se existir uma variavel POST de alguma requisição com o nome adicionar
if (isset($_POST['adicionar'])) {
    //recupera a variavel de sessão logado
    $logado=$_SESSION['logado'];
    //se ela for falsa retorna a pagina de login pois ele não se logou
    if(!$logado){
        header('Location:login.php');
    }else{
        //verificamos se o produto que iremos cadastrar já não está no carrinho, assim só alteramos a quantidade
        //crio um objeto da classe controller produtoDAO
        $dao = new ProdutoDAO;
        //se a variavel de sessão cart não estiver vazia
        if (!empty($_SESSION['cart'])) { 
            //faço a chamada da função login da controller
            $duplicado = $dao->verificarDuplicado($_POST);     
        }
        //adicionamos normalmente caso o produto seja unico e novo no carrinho
        //se o produto não for duplicado
        if ($duplicado == false) {
            $result = $dao->adicionar($_POST);     
        }
    }
}
?>
<html>
<head>
    <Title>Produtos</title>
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
                    <th class="nav_item"> <a href="html.php">Inicio</a> </th>
                    <th class="nav_item"> <a href="promocoes.php">Promoções</a> </th>
                    <th class="nav_item"> <a href="produtos.php">Produtos</a> </th>
                    <th class="nav_item"> <a href="carrinho.php">Meu Carrinho</a></th>
                    <th class="nav_item"> <a href="login.php">Login</a> </th>
                </tr>
            </table>
        </div>
    </header>
    </header>

    <main>
        <section>
            <!-- HIGIENE -->
            <article>
                <h2>Produtos de Higiene</h2>
                <table class="produtos" border=1 bgcolor=#ffcc00 cellpadding=0 cellspacing= 0 width=100%>
                    <tr>
                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="3">
                                <img class="img-produto" src="http://atualembalagens.com.br/wp-content/uploads/2015/06/6-1.png">
                                <input type="hidden" name="imagem" value="http://atualembalagens.com.br/wp-content/uploads/2015/06/6-1.png">
                                <br>Papel Higiênico
                                <input type="hidden" name="produto" value="Papel Higiênico">
                                <br>Preço: R$ 10,99 Pct.
                                <input type="hidden" name="preco" value="10.99">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option>5
                                </select><br>
                                <br><br>
                                <input type="submit" name="adicionar" value="Adicionar ao Carrinho">
                                <br><br>
                            </form>
                        </th>
                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="4">
                                <img class="img-produto" src="https://superprix.vteximg.com.br/arquivos/ids/173174-600-600/PDP-Large-Colgate-Total-Whitening.png?v=636135349392900000">
                                <input type="hidden" name="imagem" value="https://superprix.vteximg.com.br/arquivos/ids/173174-600-600/PDP-Large-Colgate-Total-Whitening.png?v=636135349392900000">
                                <br>Creme Dental Colgate
                                <input type="hidden" name="produto" value="Creme Dental Colgate">
                                <br>Preço: R$ 1,67 Un.
                                <input type="hidden" name="preco" value="1.67">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br>
                                <input type="submit" name="adicionar" value="Adicionar ao Carrinho">
                                <br><br>
                            </form>
                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="5">
                                <img class="img-produto" src="https://superprix.vteximg.com.br/arquivos/ids/175295-600-600/Sabonete-Johnson-s-Relaxe-Oleos-Essenciais-de-Lavanda-e-Alecrim-90g.png?v=636306981266300000">
                                <input type="hidden" name="imagem" value="https://superprix.vteximg.com.br/arquivos/ids/175295-600-600/Sabonete-Johnson-s-Relaxe-Oleos-Essenciais-de-Lavanda-e-Alecrim-90g.png?v=636306981266300000">
                                <br>Sabonete Johnsons
                                <input type="hidden" name="produto" value="Sabonete Johnsons">
                                <br>Preço: R$ 0,65 Un.
                                <input type="hidden" name="preco" value=" 0.65">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br>
                                <input type="submit" name="adicionar" value="Adicionar ao Carrinho">
                                <br><br>
                            </form>
                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="6">
                                <img class="img-produto" src="http://dicasodonto.com.br/wp-content/uploads/2018/07/Escova_Dental_OralB_Indicator_Plus_.png">
                                <input type="hidden" name="imagem" value="http://dicasodonto.com.br/wp-content/uploads/2018/07/Escova_Dental_OralB_Indicator_Plus_.png">

                                <br>Escova de Dente
                                <input type="hidden" name="produto" value="Escova de Dente">
                                <br>Preço: R$ 4,50 Un.
                                <input type="hidden" name="preco" value="4.50">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>
                    </tr>
                </table>
            </article>
            <!-- BEBIDAS -->
            
            <article>
                <h2>Bebidas</h2>
                <table class="produtos" border=1 bgcolor=#ffcc00 cellpadding=0 cellspacing= 0 width=100%>
                    <tr>
                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="7">
                                <img class="img-produto" src="http://www.portalbebidas.com.br/wp-content/uploads/2017/11/absolut-vodka.png">
                                <input type="hidden" name="imagem" value="http://www.portalbebidas.com.br/wp-content/uploads/2017/11/absolut-vodka.png">
                                <br>Vodka Absolut
                                <input type="hidden" name="produto" value="Vodka Absolut">
                                <br>Preço: R$ 145,99 Un.
                                <input type="hidden" name="preco" value="145.99">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="8">
                                <img class="img-produto" src="https://ciashopper.com.br/wp-content/uploads/2018/06/coca-2-litros-600x435.png">
                                <input type="hidden" name="imagem" value="https://ciashopper.com.br/wp-content/uploads/2018/06/coca-2-litros-600x435.png">
                                <br>Coca Cola 2L
                                <input type="hidden" name="produto" value="Coca Cola 2L">
                                <br>Preço: R$ 7,65 Un.
                                <input type="hidden" name="preco" value="7.65">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="9">
                                <img class="img-produto" src="https://superprix.vteximg.com.br/arquivos/ids/173852-600-600/Suco-Natural-One-Laranja-da-Fazenda-900ml.png?v=636168892100430000">
                                <input type="hidden" name="imagem" value="https://superprix.vteximg.com.br/arquivos/ids/173852-600-600/Suco-Natural-One-Laranja-da-Fazenda-900ml.png?v=636168892100430000">
                                <br>Suco Nature One
                                <input type="hidden" name="produto" value="Suco Nature One">
                                <br>Preço: R$ 3,99 Un.
                                <input type="hidden" name="preco" value="3.99">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="10">
                                <img class="img-produto" src="http://store.jackdaniels.co.uk/media/catalog/product/cache/1/image/750x/040ec09b1e35df139433887a97daa66f/j/a/jack-daniels-tennessee-whiskey-silhouette-giftbox-bottle-front.png">
                                <input type="hidden" name="imagem" value="http://store.jackdaniels.co.uk/media/catalog/product/cache/1/image/750x/040ec09b1e35df139433887a97daa66f/j/a/jack-daniels-tennessee-whiskey-silhouette-giftbox-bottle-front.png">
                                <br>Jack Daniels
                                <input type="hidden" name="produto" value="Jack Daniels">
                                <br>Preço: R$ 140,50 Un.
                                <input type="hidden" name="preco" value="140.50">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>
                    </tr>
                </table>
            </article>
            <!-- CEREAIS -->
            <article>
                <h2>Cereais</h2>
                <table class="produtos" border=1 bgcolor=#ffcc00 cellpadding=0 cellspacing= 0 width=100%>

                    <tr>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="11">
                                <img class="img-produto" src="http://www.sclance.com/pngs/fruit-loops-png/fruit_loops_png_540442.png">
                                <input type="hidden" name="imagem" value="http://www.sclance.com/pngs/fruit-loops-png/fruit_loops_png_540442.png">
                                <br>Froot Loops
                                <input type="hidden" name="produto" value="Froot Loops">
                                <br>Preço: R$ 14,99 Un.
                                <input type="hidden" name="preco" value="14.99">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="12">
                                <img class="img-produto" src="http://www.criatives.com.br/wp-content/uploads/2016/02/0002673_flocos-de-milho-com-acucar-kelloggs-sucrilhos-original-300g.png">
                                <input type="hidden" name="imagem" value="http://www.criatives.com.br/wp-content/uploads/2016/02/0002673_flocos-de-milho-com-acucar-kelloggs-sucrilhos-original-300g.png">
                                <br>Sucrilhos
                                <input type="hidden" name="produto" value="Sucrilhos">
                                <br>Preço: R$ 8,65 
                                <input type="hidden" name="preco" value="8.65">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="13">
                                <img class="img-produto" src="https://www.nestle.com.br/images/default-source/produtos/cereal-snow-flakes7fca7c788d1f4e1282c0512b4e6e9c90.png?sfvrsn=3343770c_2">
                                <input type="hidden" name="imagem" value="https://www.nestle.com.br/images/default-source/produtos/cereal-snow-flakes7fca7c788d1f4e1282c0512b4e6e9c90.png?sfvrsn=3343770c_2">
                                <br>Snow flakes
                                <input type="hidden" name="produto" value="Snow flakes">
                                <br>Preço: R$ 9,50 Un.
                                <input type="hidden" name="preco" value="9.50">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="14">
                                <img class="img-produto" src="https://www.nestle.com.br/images/default-source/produtos/cereal-matinal-nescau.png?sfvrsn=cc56e3a2_6">
                                <input type="hidden" name="imagem" value="https://www.nestle.com.br/images/default-source/produtos/cereal-matinal-nescau.png?sfvrsn=cc56e3a2_6">
                                <br>Nescau Cereal
                                <input type="hidden" name="produto" value="Nescau Cereal">
                                <br>Preço: R$ 14,50 Un.
                                <input type="hidden" name="preco" value="14.50">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>
                    </tr>
                </table>
            </article>
            <!-- Limpeza -->
            <article>
                <h2>Limpeza</h2>
                <table class="produtos" border=1 bgcolor=#ffcc00 cellpadding=0 cellspacing= 0 width=100%>

                    <tr>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="15">
                                <img class="img-produto" src="https://scjdmcdn.azureedge.net/~/media/mrmuscle/products/product-pack-shots/kitchen_total_orange.png?h=624&w=491&la=pt-BR&hash=819A4FEE74DA6E424D5CB48876FD483D8ACFFE9C">
                                <input type="hidden" name="imagem" value="https://scjdmcdn.azureedge.net/~/media/mrmuscle/products/product-pack-shots/kitchen_total_orange.png?h=624&w=491&la=pt-BR&hash=819A4FEE74DA6E424D5CB48876FD483D8ACFFE9C">
                                <br>Mr. Músculo
                                <input type="hidden" name="produto" value="Mr. Músculo">
                                <br>Preço: R$ 14,99 Un.
                                <input type="hidden" name="preco" value="14.99">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="16">
                                <img class="img-produto" src="https://media-services.digital-rb.com/s3/live-productcatalogue/sys-master/images/h4f/h6d/8851475890206/SQUEEZE%20BANHEIRO%20SCLORO.png?width=1280&height=1280">
                                <input type="hidden" name="imagem" value="https://media-services.digital-rb.com/s3/live-productcatalogue/sys-master/images/h4f/h6d/8851475890206/SQUEEZE%20BANHEIRO%20SCLORO.png?width=1280&height=1280">
                                <br>Veja
                                <input type="hidden" name="produto" value="Veja">
                                <br>Preço: R$ 7,50 Un.
                                <input type="hidden" name="preco" value="7.50">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="17">
                                <img class="img-produto" src="https://www.deliveryextra.com.br/img/uploads/1/274/562274.png?type=product">
                                <input type="hidden" name="imagem" value="https://www.deliveryextra.com.br/img/uploads/1/274/562274.png?type=product">
                                <br>Lava Louças Ypê
                                <input type="hidden" name="produto" value="Lava Louças Ypê">
                                <br>Preço: R$ 2,50 Un.
                                <input type="hidden" name="preco" value="2.50">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>

                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="18">
                                <img class="img-produto" src="https://pngimage.net/wp-content/uploads/2018/05/bombril-png-4.png">
                                <input type="hidden" name="imagem" value="https://pngimage.net/wp-content/uploads/2018/05/bombril-png-4.png">
                                <br>BomBril
                                <input type="hidden" name="produto" value="BomBril">
                                <br>Preço: R$ 6,50 Un.
                                <input type="hidden" name="preco" value="6.50">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>

                        </th>
                    </tr>
                </table>
            </article>
            <!--ENLATADOS -->
            <article>
                <h2>Enlatados</h2>
                <table class="produtos" border=1 bgcolor=#ffcc00 cellpadding=0 cellspacing= 0 width=100%>

                    <tr>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="19">
                                <img class="img-produto" src="https://www.paodeacucar.com/img/uploads/1/378/565378.png?type=product">
                                <input type="hidden" name="imagem" value="https://www.paodeacucar.com/img/uploads/1/378/565378.png?type=product">
                                <br>Atum Enlatado
                                <input type="hidden" name="produto" value="Atum Enlatado">
                                <br>Preço: R$ 4,50 Un.
                                <input type="hidden" name="preco" value="4.50">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>

                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="20">
                                <img class="img-produto" src="http://www.shopsempre.com.br//media/catalog/product/cache/1/image/424x/9df78eab33525d08d6e5fb8d27136e95/m/i/milho_200g-p.png">
                                <input type="hidden" name="imagem" value="http://www.shopsempre.com.br//media/catalog/product/cache/1/image/424x/9df78eab33525d08d6e5fb8d27136e95/m/i/milho_200g-p.png">
                                <br>Milho Enlatado
                                <input type="hidden" name="produto" value="Milho Enlatado">
                                <br>Preço: R$ 2,10 Un.
                                <input type="hidden" name="preco" value="2.10">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>

                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="21">
                                <img class="img-produto" src="https://superprix.vteximg.com.br/arquivos/ids/172892-600-600/ervilha-quero-200g.png?v=636119724926530000">
                                <input type="hidden" name="imagem" value="https://superprix.vteximg.com.br/arquivos/ids/172892-600-600/ervilha-quero-200g.png?v=636119724926530000">
                                <br>Ervilha Enlatada
                                <input type="hidden" name="produto" value="Ervilha Enlatada">
                                <br>Preço: R$ 1,90 Un.
                                <input type="hidden" name="preco" value="1.90">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>

                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="22">
                                <img class="img-produto" src="https://www.snsuper.com.br/wp-content/uploads/2017/08/7896031224088.png">
                                <input type="hidden" name="imagem" value="https://www.snsuper.com.br/wp-content/uploads/2017/08/7896031224088.png">
                                <br>Feijoada Enlatada
                                <input type="hidden" name="produto" value="Feijoada Enlatada">
                                <br>Preço: R$ 6,50 Un.
                                <input type="hidden" name="preco" value="6.50">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>
                    </tr>
                </table>
            </article>

            <!--Frutas-->
            <article>
                <h2>Frutas</h2>
                <table class="produtos" border=1 bgcolor=#ffcc00 cellpadding=0 cellspacing= 0 width=100%>

                    <tr>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="23">
                                <img class="img-produto" src="http://pngimg.com/uploads/banana/banana_PNG846.png">
                                <input type="hidden" name="imagem" value="http://pngimg.com/uploads/banana/banana_PNG846.png">
                                <br>Banana
                                <input type="hidden" name="produto" value="Banana">
                                <br>Preço: R$ 4,00 Kg.
                                <input type="hidden" name="preco" value="4.00">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>

                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="24">
                                <img class="img-produto" src="http://www.pngmart.com/files/8/Watermelon-PNG-Transparent-Background.png">
                                <input type="hidden" name="imagem" value="http://www.pngmart.com/files/8/Watermelon-PNG-Transparent-Background.png">
                                <br>Melancia
                                <input type="hidden" name="produto" value="Melancia">
                                <br>Preço: R$ 11,65 Un.
                                <input type="hidden" name="preco" value="11.65">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>

                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="25">
                                <img class="img-produto" src="https://superprix.vteximg.com.br/arquivos/ids/175190-600-600/Maca-Gala-Nacional--1-unidade-aprox.-200g-.png?v=636294186498800000">
                                <input type="hidden" name="imagem" value="https://superprix.vteximg.com.br/arquivos/ids/175190-600-600/Maca-Gala-Nacional--1-unidade-aprox.-200g-.png?v=636294186498800000">
                                <br>Maçã
                                <input type="hidden" name="produto" value="Maçã">
                                <br>Preço: R$ 6,00 Kg.
                                <input type="hidden" name="preco" value="6.00">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>

                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="26">
                                <img class="img-produto" src="http://www.qualiver.com.br/assets/media/produtos/product-featured__limao.png">
                                <input type="hidden" name="imagem" value="http://www.qualiver.com.br/assets/media/produtos/product-featured__limao.png">
                                <br>Limão
                                <input type="hidden" name="produto" value="Limão">
                                <br>Preço: R$ 3,50 Kg.
                                <input type="hidden" name="preco" value="3.50">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>

                        </th>
                    </tr>
                </table>
            </article>
            <!--FRIOS -->
            <article>
                <h2>Frios</h2>
                <table class="produtos" border=1 bgcolor=#ffcc00 cellpadding=0 cellspacing= 0 width=100%>

                    <tr>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="27">
                                <img class="img-produto" src="https://www.deliveryextra.com.br/img/uploads/1/335/573335.png?type=product">
                                <input type="hidden" name="imagem" value="https://www.deliveryextra.com.br/img/uploads/1/335/573335.png?type=product">
                                <br>Queijo Mussarela
                                <input type="hidden" name="produto" value="Queijo Mussarela">
                                <br>Preço: R$ 7,99 Un.
                                <input type="hidden" name="preco" value="7.99">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="28">
                                <img class="img-produto" src="http://www.frimesa.com.br/upload/image/subproduct/presuntofatiado4-103-10.png">
                                <input type="hidden" name="imagem" value="http://www.frimesa.com.br/upload/image/subproduct/presuntofatiado4-103-10.png">
                                <br>Presunto
                                <input type="hidden" name="produto" value="Presunto">
                                <br>Preço: R$ 7,65 Un.
                                <input type="hidden" name="preco" value="7.65">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>

                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="29">
                                <img class="img-produto" src="http://www.coopsantaclara.com.br/upload/product/1541097988_mortadela_fatiada_200g_2018.png">
                                <input type="hidden" name="imagem" value="http://www.coopsantaclara.com.br/upload/product/1541097988_mortadela_fatiada_200g_2018.png">
                                <br>Mortadela
                                <input type="hidden" name="produto" value="Mortadela">
                                <br>Preço: R$ 2,50 Un.
                                <input type="hidden" name="preco" value="2.50">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>

                        </th>

                        <th>
                            <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="30">
                                <img class="img-produto" src="https://superprix.vteximg.com.br/arquivos/ids/175423-600-600/Queijo-Prato-President-Fatiado-150g.png?v=636319867005570000">
                                <input type="hidden" name="imagem" value="https://superprix.vteximg.com.br/arquivos/ids/175423-600-600/Queijo-Prato-President-Fatiado-150g.png?v=636319867005570000">
                                <br>Quejo Prato
                                <input type="hidden" name="produto" value="Quejo Prato">
                                <br>Preço: R$ 8,50 Un.
                                <input type="hidden" name="preco" value="8.50">
                                <br> <br><select name="quantidade">
                                    <option>1
                                    <option>2
                                    <option>3
                                    <option>4
                                    <option> 5
                                </select><br>
                                <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>
                    </tr>
                </table>
            </article>

            <!--LATICINIOS -->
            <article>
                <h2>Laticínios</h2>
                <table class="produtos" border=1 bgcolor=#ffcc00 cellpadding=0 cellspacing= 0 width=100%>

                    <tr>

                        <th>
                        <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="31">
                            <img class="img-produto" src="https://www.snsuper.com.br/wp-content/uploads/2018/06/7891025101598.png">
                            <input type="hidden" name="imagem" value="https://www.snsuper.com.br/wp-content/uploads/2018/06/7891025101598.png">
                            <br>Leite Paulista
                            <input type="hidden" name="produto" value="Leite Paulista">
                            <br>Preço: R$ 2,99 Un.
                            <input type="hidden" name="preco" value="2.99">
                            <br> <br><select name="quantidade">
                                <option>1
                                <option>2
                                <option>3
                                <option>4
                                <option> 5
                            </select><br>
                            <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>

                        </th>

                        <th>
                        <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="32">
                            <img class="img-produto" src="https://superprix.vteximg.com.br/arquivos/ids/175755-600-600/AF_3D_TODDY_400G.png?v=636365153078570000">
                            <input type="hidden" name="imagem" value="https://superprix.vteximg.com.br/arquivos/ids/175755-600-600/AF_3D_TODDY_400G.png?v=636365153078570000">
                            <br>Achocolatado Toddy
                            <input type="hidden" name="produto" value="Achocolatado Toddy">
                            <br>Preço: R$ 7,65 Un.
                            <input type="hidden" name="preco" value="7.65">
                            <br> <br><select name="quantidade">
                                <option>1
                                <option>2
                                <option>3
                                <option>4
                                <option> 5
                            </select><br>
                            <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>

                        <th>
                        <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="33">
                            <img class="img-produto" src="https://www.nestle.com.br/images/default-source/produtos/iogurte-nestle-natural-integral.png?sfvrsn=e8779b4d_2">
                            <input type="hidden" name="imagem" value="https://www.nestle.com.br/images/default-source/produtos/iogurte-nestle-natural-integral.png?sfvrsn=e8779b4d_2">
                            <br>Iogurte Nestlé
                            <input type="hidden" name="produto" value="Iogurte Nestlé">
                            <br>Preço: R$ 5,50 Un.
                            <input type="hidden" name="preco" value="5.50">
                            <br> <br><select name="quantidade">
                                <option>1
                                <option>2
                                <option>3
                                <option>4
                                <option> 5
                            </select><br>
                            <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>

                        <th>
                        <form action="produtos.php" method="post">
                                <input type="hidden" name="idProduto" value="34">
                                <img class="img-produto" src="https://www.clubeextra.com.br/img/uploads/1/154/564154.png?type=product">
                                <input type="hidden" name="imagem" value="https://www.clubeextra.com.br/img/uploads/1/154/564154.png?type=product">
                            <br>Danoninho
                            <input type="hidden" name="produto" value="Danoninho">
                            <br>Preço: R$ 6,50 Un.
                            <input type="hidden" name="preco" value="6.50">
                            <br> <br><select name="quantidade">
                                <option>1
                                <option>2
                                <option>3
                                <option>4
                                <option> 5
                            </select><br>
                            <br><br><input type="submit" name="adicionar" value="Adicionar ao Carrinho"><br><br>
                            </form>
                        </th>
                    </tr>
                </table>
            </article>
        </section>
    </main>
</body>

</html>