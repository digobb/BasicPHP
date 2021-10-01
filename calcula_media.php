
<?php
  //nota1 peso 3.5
  //nota 2 peso 3.0
  //nota 3 peso 3.5
  if(isset($_POST)){
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $media = $nota1*(0.35) + $nota2*(0.3) + $nota3*(0.35);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cálculo da Média</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h1> <?= $_POST['nome']; ?> </h1>
    <p>Média do Aluno: <?= $media ?></p>
    <?php if($media>=7){ ?>
      <div class="alert alert-success">
        <strong>Success!</strong> Aluno Aprovado.
      </div>
    <?php }else if($media>=3.0 && $media <7){ ?>
      <div class="alert alert-warning">
        <strong>Atenção!</strong> Aluno Em Exame.
      </div>
    <?php }else{ ?>
      <div class="alert alert-danger">
        <strong>Ops!</strong> Aluno Reprovado.
      </div>
    <?php } ?>
  </body>
</html>
