<?php 


/**
 * 
 */
class UsuarioDAO {
	/**
	 * [login description]
	 * @param  [type] $email [description]
	 * @param  [type] $senha [description]
	 * @return [type]        [description]
	 */
	public function login($dados){
		//recupero as credencias enviadas por post
			$email = $dados['email'];
			$senha = $dados['senha'];
		if (!empty($email) && !empty($senha)) {
			if (strcmp($senha, "charles123") == 0 && (strcmp($email, "charles@bol.com") == 0 || strcmp($email,"45707492836") == 0)) {
				$logado=true;
				$_SESSION['logado']=$logado;
				$_SESSION['email']="charles@bol.com";
				$_SESSION['cpf']="45707402836";
				$_SESSION['pontos']=0;
				$_SESSION['senha']="123456";
				header('Location:produtos.php');
			} else {
				echo "<h3>Credenciais Incorretas</h3>";
			}
		}
	}
	
}