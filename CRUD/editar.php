<?php
  include("conexao.php");
  if (!$con=abreConexao()) {
  	$MensagemErro="Erro conexao";
  	include_once("erro.php");
  } else {
  	// editar.php
  	if ($_SERVER["REQUEST_METHOD"]=="GET") {
  		$ps=mysqli_prepare($con,"select id,nome,endereco, email from aluno where id=?");
  		mysqli_stmt_bind_param($ps,"i",$id);
  		$id=$_GET["id"];
  		mysqli_stmt_execute($ps);
  		mysqli_stmt_bind_result($ps,$id,$nm,$ed,$em);
  		mysqli_stmt_fetch($ps);
  		include_once("editarGet.php");
  	} else if ($_SERVER["REQUEST_METHOD"]=="POST") {
     	$MensagemErro="Aluno alterado";
	    if (!isset($_POST["ID"]) || 
		    !isset($_POST["NM"]) ||
		    !isset($_POST["ED"])||
        !isset($_POST["EM"])
	       )  
	    {
		  $MensagemErro="Parâmetros inválidos";
		  include_once("erro.php");
	    } else {
  		  $ps=mysqli_prepare($con,"update aluno set nome=?, endereco=?, email=? where id=?");
  		  mysqli_stmt_bind_param($ps,"sssi",$_POST["NM"],$_POST["ED"],$_POST["EM"],$_POST["ID"]);
  		  mysqli_stmt_execute($ps);
    	  include_once("editarPost.php");	    	
	    }
  	} else {
  		include_once("erro.php");
  	}
  }
?>