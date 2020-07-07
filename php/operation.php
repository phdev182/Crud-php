<?php

require_once("db.php");
require_once("component.php");

$con=Createdb();

//create button click
if(isset($_POST["create"])){
  createData();
}

function createData() {
  $produto = textBoxValue($value="produto");
  $marca = textBoxValue($value="marca");
  $preco = textBoxValue($value="preco");
  $quantidade = textBoxValue($value="quantidade");

  if($produto&&$marca&&$preco&&$quantidade){
    
    $sql ="INSERT INTO produtos(produto_nome,marca,preco,quantidade)
            VALUES('$produto','$marca','$preco','$quantidade')";
    
    if(mysqli_query($GLOBALS['con'],$sql)){
      textNode($classname="success",$msg="Dados inseridos com sucesso");
    }else{
      echo"Error";
    }
  
  }else{
    textNode($classname="error",$msg="Insira os dados na
    caixa de texto");
  }
}
function textBoxValue($value){
//Security against SQL INJECTION
  $textBox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
  if (empty($textBox)){
    return false;
  }else{
    return $textBox;
  }
}

//messages

function textNode($classname, $msg){
  $element = "<h6 class='$classname'>$msg</h6>";
  echo $element;
}