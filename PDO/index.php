<?php include("Includes/Header.php"); ?>

<div class="Content">
  <?php
  include("Class/ClassConexao.php");
  include("Class/ClassCrud.php");
  $Crud=new ClassCrud();
  
  /*teste de conexão
    $Conexao=new ClassConexao();
    var_dump($Conexao->conectaDB());*/
  ?>
</div>
<?php include("Includes/Footer.php"); ?>