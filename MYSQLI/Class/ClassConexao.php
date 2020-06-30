<?php
abstract class ClassConexao {

    #realizara a conexão com o banco de dados
    protected function conectaDB()
    {
        try{
            $Con=new mysqli("localhost","root","","crud");
            return $Con;
        }catch (Exception $Erro){
          return $Erro->getMessage();
                   
        }
    }
}