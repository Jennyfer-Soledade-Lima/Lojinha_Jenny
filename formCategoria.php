<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Categoria de cada produto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h3>Formulario</h3>
  <p>Prencha os campos</p>
    
  <form action="">
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Código da categoria</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campo.</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Categoria:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campo.</div>
    </div>
  <button type="submit" class="btn btn-primary">Envie</button>
  </form>
</div>

</body>
</html>
