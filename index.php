<?php

require_once("../crud/php/component.php")
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud</title>
  <script src="https://use.fontawesome.com/934a13a050.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  
  <!-- costume stylesheet -->
  <link rel="stylesheet" href="style.css">

</head>
<body>
<main>
  <div class="container text-center">
  <h1 class="py-4 bg-dark text-light rounded"><i class="fa fa-archive" aria-hidden="true"></i></i> Produto Estoque</h1>
  
  <div class="d-flex justify-content-center">
    <form action=""method="post"class="w-50 ">
      <div class="py-2">
      </div>
      <div class="pt1">
      <?php inputElement($icon="<i class='fa fa-id-card'></i>", $placehouder="ID", $name="produto_id", $value="");?>
      </div>
      <div class="pt2">
      <?php inputElement($icon="<i class='fa fa-archive' aria-hidden='true'></i>", $placehouder="Produto", $name="produto", $value="");?>
      </div>
      <div class="row">
        <div class="col">
      <?php inputElement($icon="<i class='fa fa-cubes'></i>", $placehouder="Tipo", $name="Tipo", $value="");?> 
      </div>
      <div class="col">
      <?php inputElement($icon="<i class='fa fa-hand-holding-usd'></i>", $placehouder="Preço", $name="Preço", $value="");?> 
      </div>
      </div>
      <div class="dflex">
      <?php buttonElement($btnid="ciar", $styleClass="btn btn-success", $text="Criar");?>
      </div>
    </form>
  </div>
</div>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
</body>
</html>