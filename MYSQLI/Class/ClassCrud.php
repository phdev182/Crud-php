<?php
class classCrud extends ClassConexao{
  #Atributos
  private $Crud;
  private $Contador;
  private $Resultado;

  #Preparação das declarativas
  private function preparedStatement($Query, $Tipos, $Paramentros)
  {
    $this->countParamentros($Paramentros);
    $Con=$this->conectaDB();
    $this->Crud=$Con->prepare($Query);
    
    if($this->Contador > 0){
      $callParametros = array();
      foreach($Paramentros as $Key => $Parametros){
        $callParametros[$Key] = &$Paramentros[$Key];
      }
        array_unshift($callParametros, $Tipos);
        call_user_func_array(array($this->Crud,'bind_param'),$callParametros);
    }
    $this->Crud->execute();
    $this->Resultado=$this->Crud->get_result();
  }

  #Contador de paramentros
  private function countParamentros($Paramentros)
  {
    $this->Contador=count($Paramentros);
  }
}