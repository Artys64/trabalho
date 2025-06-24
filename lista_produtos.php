<?php
require __DIR__ . '/conect_db.php';
$sql = "SELECT codigo, nome FROM produtos ORDER BY codigo ASC";
$result = $dbconn->query($sql);

if ($result === false) {
    die("Erro na consulta: " . $dbconn->error);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Lista de Produtos</title>
  <style>
    table {
      border-collapse: collapse;
      width: 50%;
      margin-top: 20px;}
    th, td {
      border: 1px solid #333;
      padding: 8px;
      text-align: left;}
    th {
      background-color: #ddd;}
  </style>
</head>
<body>
  <h1>Lista de Produtos</h1>
  <?php if ($result->num_rows > 0): ?>
    <table>
      <thead>
        <tr>
          <th>Código</th>
          <th>Nome do Produto</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= htmlspecialchars($row['codigo']) ?></td>
            <td><?= htmlspecialchars($row['nome']) ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  <?php else: ?>
    <p>Nenhum produto cadastrado.</p>
  <?php endif; ?>
  <p><a href="index.php">Voltar</a></p>
</body>
</html>
<?php
$dbconn->close();
?>