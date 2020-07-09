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

if(isset($_POST['delete'])){
  deleteRecord();
}

if(isset($_POST['deleteall'])){
  deleteAll();
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

//Delete Data
function deleteRecord(){
  $produtoId = (int)textBoxValue($value="id");

  $sql ="DELETE FROM produtos Where id=$produtoId";
  if(mysqli_query($GLOBALS['con'],$sql)){
    textNode($classname="success",$msg="Arquivo deletado com sucesso...!");
  }else{
    textNode($classname="error",$msg="Erro ao deletar gravação...!");
  }
}

//botão deletar tudo
function deleteBtn(){
  $result=getData();
  $i=0;
  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $i++;
      if($i>2){
        buttonElement($btnid="btn-deleteall",$btnstyle="btn btn-danger",$text="<i class='fa fa-trash'></i> Deletar Tudo",$name="deleteall", $attr="");
        return;
      }
    }
  }
}

//delete all
function deleteAll(){
  $sql="DROP TABLE produtos";
  if(mysqli_query($GLOBALS['con'],$sql)){
    textNode($classname="success",$msg="Todos os dados deletados com sucesso...!");
    Createdb();
  }else{
    textNode($classname="error",$msg="Erro all deletar todos os arquivos...!");
  }
}

//set id to textbox
function setID(){
  $getid=getData();
  $id=0;
  if($getid){
    while($row=mysqli_fetch_assoc($getid)){
      $id=$row['id'];
    }
  }
  return($id+1);
}
