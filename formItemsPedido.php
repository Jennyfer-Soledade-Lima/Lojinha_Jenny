<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Items Pedidos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h3>Produtos pedidos</h3>
  <p>Preencha o formulário abaixo :</p>
    
  <form action="/action_page.php" class="was-validated">
    <div class="mb-3 mt-3">
      <label class="form-label">Código do Pedido:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campo.</div>
    </div>
    <div class="mb-3">
      <label class="form-label">Código do Estoque:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campo.</div>
    </div>
     <div class="mb-3">
      <label class="form-label">Ordem:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campo.</div>
    </div>
    <div class="mb-3">
      <label class="form-label">Quantidade de Items:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campo.</div>
    </div>
     <div class="mb-3">
      <label class="form-label">Data da Devolução:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campo.</div>
    </div>
     <div class="mb-3">
      <label class="form-label"> Motivo de Devolução:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campo.</div>
    </div>
    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
      <label class="form-check-label" for="myCheck">Eu confirmo todos os dados preenchidos nesse formulário.</label>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Verifique todos os campos antes para continuar.</div>
    </div>
  <button type="submit" class="btn btn-primary">Envie</button>
  </form>
</div>

</body>
</html>
