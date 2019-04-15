<?php 

/**
 * 
 */
class ProdutoDAO{

	/**
	 * [verificarDuplicado description]
	 * @param  [type] $idProduto  [description]
	 * @param  [type] $qtdProduto [description]
	 * @return [type]             [description]
	 */
	public function verificarDuplicado($dados){
		//recupero a variavel do carrinho e as variaveis do id do produto e quantidade
		$duplicado = false;
		$produtos = $_SESSION['cart'];
        $idProduto = intval($dados['idProduto']);
        $qtdProduto = intval($dados['quantidade']);
		//percorremos o array de produtos
        foreach ($produtos as $subKey => $subArray) :
            //se o id do produto a qual está sendo percorrido no array for igual ao id do produto a ser cadastrado
            if ($subArray['idProduto'] == $idProduto) {
                //somo a quantidade do produto a ser cadastrado a quantidade do produto que já esta no carrinho
                $qtdProduto += intval($subArray['qtdProduto']);
                //inserimos a nova quantidade no produto especifico a qual está sendo percorrido neste momento (especificamos a linha e a coluna da matriz)
                $produtos[$subKey]['qtdProduto'] = $qtdProduto;
                //indicamos que este produto é duplicado assim não efetuaremos o cadastros do mesmo sem necessidade
                $duplicado = true;
            }
        endforeach;
        //inserimos o carrinho que acabamos de manipular novamente a variavel de sessão
        $_SESSION['cart'] = $produtos;

        return $duplicado;
	}
	/**
	 * [adicionar description]
	 * @param  [type] $dados [description]
	 * @return [type]        [description]
	 */
	public function adicionar($dados){	
		//recupera todas as informações do produto a ser adicionado
		$id = $_SESSION['cont'];
        $idProduto = $dados['idProduto'];
        $nomeProduto = $dados['produto'];
        $imagemProduto = $dados['imagem'];
        $qtdProduto = $dados['quantidade'];
        $precoUnidade = $dados['preco'];  
        //adiciona em um array
        $produto = array('id' => $id, 'idProduto' => $idProduto, 'nomeProduto' => $nomeProduto, 'imagemProduto' => $imagemProduto, 'qtdProduto' => $qtdProduto, 'precoUnidade' => $precoUnidade);
        //insere este array dentro de outro array, neste caso uma variavel de sessão, formando uma matriz
        array_push($_SESSION['cart'], $produto);
	}

    public function excluir($dados){
        $produtos=$_SESSION['cart'];
        $id = $dados['id'];
        foreach($produtos as $subKey => $subArray){
                if($subArray['id'] == $id){
                    unset($produtos[$subKey]);
                } 
        }
        $_SESSION['cart']=$produtos;
        header('Location:carrinho.php');
    }
}