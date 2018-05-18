<?php
  if ($_SERVER["REQUEST_METHOD"]=="GET") {
  	$id="";$nm="";$ed="";$em="";
  	include_once("createGet.php");
  } else if ($_SERVER["REQUEST_METHOD"]=="POST") {
  	$MensagemErro="Aluno cadastrado";
	if (!isset($_POST["ID"]) || 
		!isset($_POST["NM"]) ||
		!isset($_POST["ED"]) ||
		!isset($_POST["EM"])
	   ) 
	{
		$MensagemErro="Parâmetros inválidos";
	}
	else
	{
		include_once("conexao.php");
		$con=abreConexao();
		$ps=mysqli_prepare($con,"INSERT INTO ALUNO VALUES(?,?,?,?)");
		mysqli_stmt_bind_param($ps,"isss",$id,$nm,$ed,$em);
		$id=$_POST["ID"];
		$nm=$_POST["NM"];
		$ed=$_POST["ED"];
		$em=$_POST["EM"];
		mysqli_stmt_execute($ps);
	}
	include_once("estilo.php");
    include_once("createPost.php");
  } else {
  	include_once("erro.php");
  }
?>

<!-- isset verifica se uma variavel existe ou nao. unset descarta a variável -->