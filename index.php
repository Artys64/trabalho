<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Cadastro de Produtos</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="x">
  <h1>Sistema de Cadastro de Produtos</h1>
  <form method="POST" action="insere_produto.php">
    <div class="barra">
      <label for="codigo">Código:</label><br>
      <input type="number" name="codigo" id="codigo" required><br><br>

      <label for="nome">Nome do produto:</label><br>
      <input type="text" name="nome" id="nome" required><br><br>
    </div>
    <button class="botao" type="submit">Enviar</button>
  </form>
</div>
<div class="x2">
  <h2>Deletar Produto</h2>
  <form method="POST" action="deleta_produto.php">
    <div class="barra">
      <label for="codigo_delete">Código do produto:</label><br>
      <input type="number" name="codigo" id="codigo_delete" required><br><br>
    </div>
    <button class="botao" type="submit">Deletar</button>
  </form>
  <br>
  <form action="lista_produtos.php" method="get" style="display:inline;">
    <button class="botao" type="submit">Ver Lista de Produtos</button>
  </form>
</div>
</body>
</html>