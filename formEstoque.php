<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Estoque</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h3>Informe os dados de cada produto do estoque :</h3>
  <p>Prencha os campos abaixo :</p>
  <form action="/action_page.php" class="was-validated">
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Código do estoque:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <!--  <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse </div>-->
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Código do produto:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <!-- <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse </div>-->
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label"> Data da Compra do produto:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campos corretamente</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label"> Quantidade:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campos corretamente</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Data de Fabricação:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campos corretamente</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Data de Vencimento:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campos corretamente</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Nota Fiscal da Compra:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campos corretamente</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label"> Preço da Compra:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campos corretamente</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label"> ICMS da Compra:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campos corretamente</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Preço da Venda:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campos corretamente</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Quantidade de produtos Vendidos:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campos corretamente</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Quantidade de Ocorrências:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campos corretamente </div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label"> Ocorrências:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Validação</div>
      <div class="invalid-feedback">Por favor prencha esse campos corretamente </div>
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
