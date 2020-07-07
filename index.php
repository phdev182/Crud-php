<?php

require_once("../crud/php/component.php");
require_once("../crud/php/operation.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://use.fontawesome.com/934a13a050.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  
  <!-- costume stylesheet -->
  

</head>
<body>
<main>
  <div class="container text-center">
  <h1 class="py-4 bg-dark text-light rounded"><i class="fa fa-archive" aria-hidden="true"></i></i> Produto Estoque</h1>
  
  <div class="d-flex justify-content-center">
    <form action=""method="post"class="w-50 ">
    <div class="row pt-2">
    <div class="col">
      <?php inputElement($icon="<i class='fa fa-id-card'></i>", $placehouder="ID", $name="produto_id", $value="");?>
      </div>
      <div class="col">
      <?php inputElement($icon="<i class='fa fa-archive' aria-hidden='true'></i>", $placehouder="Quantidade", $name="quantidade", $value="");?>
      </div>
    </div>
      <div class="pt-2">
      <?php inputElement($icon="<i class='fa fa-archive' aria-hidden='true'></i>", $placehouder="Produto", $name="produto", $value="");?>
      </div>
      <div class="row pt-2">
        <div class="col">
      <?php inputElement($icon="<i class='fa fa-cubes'></i>", $placehouder="Marca", $name="marca", $value="");?> 
      </div>
      <div class="col">
      <?php inputElement($icon="<i class=\"fa fa-bitcoin\"></i>", $placehouder="Preço", $name="preco", $value="");?> 
      </div>
      </div>
      <div class="d-flex justify-content-center">
      <?php buttonElement($btnid="btn-create", $styleClass="btn btn-success", $text="<i class='fa fa-plus'></i>",$name='create',$attr="dat-toggle='tooltip'data-placement='buttom'title='Create'");?>
      <?php buttonElement($btnid="btn-read", $styleClass="btn btn-primary", $text="<i class=\"fa fa-edit\"></i>",$name='read',$attr="dat-toggle='tooltip'data-placement='buttom'title='Read'");?>
      <?php buttonElement($btnid="btn-update", $styleClass="btn btn-info", $text="<i class=\"fa fa-retweet\"></i>",$name='update',$attr="dat-toggle='tooltip'data-placement='buttom'title='Update'");?>
      <?php buttonElement($btnid="btn-delete", $styleClass="btn btn-danger", $text="<i class=\"fa fa-trash\"></i>",$name='delete',$attr="dat-toggle='tooltip'data-placement='buttom'title='Delete'");?>
      </div>
    </form>
  </div>

  <!--Bootstrap table -->
  <div class="d-flex table-data justify-content-center">
    <table class="table table-striped table-dark">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Produto</th>
          <th>Marca</th>
          <th>Preço</th>
          <th>Editar</th>
        </tr>
      </thead>
      <tbody id="tbody">
        <tr>
          <td>1</td>
          <td>Inspiron5</td>
          <td>Dell</td>
          <td>4999.99</td>
          <td class=btnedit><i class="fa fa-edit"></i></td>
        </tr>
      </tbody>
    </table>
  </div>

</div>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>