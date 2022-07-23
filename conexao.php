<?php 
try{
	
	//faz conexão com o banco de dados
	$conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo;", "root", "root");
	//echo'Conectado com sucesso';
	
}catch(PDOException $e){

	//Caso ocorra algum erro na conexão com o banco, exibe a mensagem 
	echo'Falha ao carregar com o Banco de Dados: '. $e->getMessage(); 
	
}
