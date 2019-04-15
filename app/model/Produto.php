<?php 

/**
 * 
 */
class Produto {
	
	private $idProduto;
	private $nomeProduto;
	private $qtdProduto;
	private $precoUnidade;

    /**
     * @return mixed
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * @param mixed $idProduto
     *
     * @return self
     */
    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }

    /**
     * @param mixed $nomeProduto
     *
     * @return self
     */
    public function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtdProduto()
    {
        return $this->qtdProduto;
    }

    /**
     * @param mixed $qtdProduto
     *
     * @return self
     */
    public function setQtdProduto($qtdProduto)
    {
        $this->qtdProduto = $qtdProduto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrecoUnidade()
    {
        return $this->precoUnidade;
    }

    /**
     * @param mixed $precoUnidade
     *
     * @return self
     */
    public function setPrecoUnidade($precoUnidade)
    {
        $this->precoUnidade = $precoUnidade;

        return $this;
    }
}

