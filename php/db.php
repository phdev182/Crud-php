<?php

function Createdb(){
  $serverName ="localhost";
  $userName="root";
  $password="";
  $dbName="produtoEstoque";

  //Criando conexão com banco de dados
  $con=mysqli_connect($serverName,$userName,$password);

  //Check Connection
  if(!$con){
    die("Connection Failed:".mysqli_connect_error());
  }
  //Criando Database
  $sql ="CREATE DATABASE IF NOT EXISTS $dbName";
  
  if(mysqli_query($con,$sql)){
    //echo "Database Criada...!";
    $con=mysqli_connect($serverName,$userName,$password,$dbName);

    $sql="
        CREATE TABLE IF NOT EXISTS Produtos(
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        produto_nome VARCHAR(25) NOT NULL,
        marca VARCHAR(20),
        preco FLOAT,
        quantidade INT(5)
      );
    ";
    if(mysqli_query($con,$sql)){
      return $con;
    }else{
      echo "Erro ao criar tabela...!";
    }
    
  }else{
    echo"Erro durante criação do Banco de dados.".mysqli_error($con);
  }
}