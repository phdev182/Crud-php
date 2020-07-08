<?php

require_once("db.php");
require_once("component.php");

$con=Createdb();

//create button click
if(isset($_POST["create"])){
  createData();
}

if(isset($_POST["update"])){
  updateData();
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

//get data from mysql database
function getData(){
  $sql = "SELECT*FROM produtos";

  $result = mysqli_query($GLOBALS['con'],$sql);

  if(mysqli_num_rows($result)>0){
    return $result;
  }
}

//update data

function updateData(){
    $produtoId = textBoxValue($value="id");
    $produto = textBoxValue($value="produto");
    $marca = textBoxValue($value="marca");
    $quantidade = textBoxValue($value="quantidade");
    $preco = textBoxValue($value="preco");

    if($produto&&$marca&&$preco&&$quantidade){
      $sql ="UPDATE produtos SET produto_nome='$produto',marca='$marca',preco='$preco',quantidade='$quantidade' WHERE id='$produtoId';
        ";
        
        if(mysqli_query($GLOBALS['con'],$sql)){
          textNode($classname="success",$msg="Dados atualizados com sucesso");
        }else{
          textNode($classname="error",$msg="Dados não atualizados");
        }

    }else{
      textNode($classname="error",$msg="Selecione os dados utilizando o icone Editar");
    }
}
