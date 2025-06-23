<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Cadastro de produtos</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="x">
  <h1>Sistema de Cadastro de produtos</h1>
  <form method="POST" action="insere_cidade.php">
    <div class="barra">
      <label for="codigo">Código:</label><br>
      <input type="number" name="codigo" id="codigo" requirsed><br><br>

      <label for="nome">Nome do produto:</label><br>
      <input type="text" name="nome" id="nome" required><br><br>

    </div>
      <button class="botao" type="submit" value="Enviar">Enviar</button>
  </form>
</div>
<div class="x2">
  <h2>Deletar produto</h2>
<form method="POST" action="deleta_cidade.php">
  <div class="barra">
    <label for="codigo_delete">Código do produto:</label><br>
    <input type="number" name="codigo" id="codigo_delete" required><br><br>
  </div>
    <button class="botao" type="submit" value="Deletar">Deletar</button>
</form>
<br>
 <form action="lista_cidades.php" method="get" style="display:inline;">
    <button class="botao" type="submit">Ver Lista de produtos</button>
  </form>
</div>
</body>
</html>