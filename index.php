<?php 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilo.css"/>
	<title>Lista de cadastrados</title>
</head>
<body>
<div>
	<?php include_once "conexao.php";
	
	try {
		//execução da instrução SQL 
		$consulta = $conectar->query("SELECT * FROM login");
		
		echo "<a href='formCadastro.php'><u>Novo Cadastro</u></a><br><br>Listagem de Usu&aacute;rios ";
		
		echo "<table border='5'><tr><td align=center>Nomes</td><td align=center>Login</td><td align=center>A&ccedil;&otilde;es</td></tr>";
		
		while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
			
			echo "<tr><td>$linha[nome]</td><td>$linha[login]</td><td align=center><a href='formEditar.php?id=$linha[idlogin]'>Editar</a> - <a href='excluir.php?id=$linha[idlogin]' color='red'><b>Excluir</b></a></td></tr>";
			
		}
		echo "</table><br>";
		
		echo $consulta->rowCount()." Registros Exibidos <br>";
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	?>
	


</div>
</body>
</html>
