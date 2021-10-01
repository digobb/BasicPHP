<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulário de Cálculo de Salário</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Calculo de Média de Aluno</h2>
  <form action="calcula_media.php" method="POST">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Entre o nome" name="nome" required>
    </div>
    <div class="form-group">
      <label for="nota1">Nota 1:</label>
      <input type="number" class="form-control" id="nota1" placeholder="Informe primeira nota" name="nota1" min='0' max='10' required>
    </div>
    <div class="form-group">
      <label for="nota2">Nota 2:</label>
      <input type="number" class="form-control" id="nota2" placeholder="Informe a segunda nota" name="nota2" min='0' max='10' required>
    </div>
    <div class="form-group">
      <label for="nota3">Nota 3:</label>
      <input type="number" class="form-control" id="nota3" placeholder="Informe a terceira nota" name="nota3" min='0' max='10' required>
    </div>

    <button type="submit" class="btn btn-default">Calcular</button>
  </form>
</div>

</body>
</html>
