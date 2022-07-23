<?php
include_once "conexao.php";

try {
	
	//execução da instrução SQL 
	$consulta = $conectar->query("SELECT * FROM login");
	
	echo "<a href='formCadastro.php'>Novo Cadastro</a><br><br>Listagem de Usu&aacute;rios ";
	
	echo "<table border='1'><tr><td>Nome</td><td>Login</td><td>A&ccedil;&otilde;es</td></tr>";
	
	while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
		
		echo "<tr><td>$linha[nome]</td><td>$linha[login]</td><td><a href='formEditar.php?id=$linha[idlogin]'>Editar</a> - <a href='excluir.php?id=$linha[idlogin]'>Excluir</a></td></tr>";
		
	}
	
	echo "</table>";
	
	echo $consulta->rowCount()." Registros Exibidos";
	
	
}catch(PDOException $e){

	echo $e->getMessage();
	
}

?>