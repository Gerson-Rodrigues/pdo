<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="estilo.css"/>
  <title>Editar</title>
</head>
<body>
<div>
<?php
include_once "conexao.php";

	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$consulta = $conectar->query("SELECT * FROM login where idlogin = '$id'");
	$linha = $consulta->fetch(PDO::FETCH_ASSOC);
?>

<form action="editar.php" method="post">

Nome: <input type="text" name="nome" value="<?php echo $linha['nome'] ?>" id="nome"/><br>
Login: <input type="text" name="login" value="<?php echo $linha['login'] ?>" id="login"/><br>
<input type="hidden" name="id" value="<?php echo $linha['idlogin']?>">
<input type="submit" value="Editar">
</form>
</div>
</body>
</html>