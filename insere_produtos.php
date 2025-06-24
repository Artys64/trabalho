<?php
require __DIR__ . '/conect_db.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $codigo = isset($_POST['codigo']) ? intval($_POST['codigo']) : 0;
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';

    if ($codigo > 0 && !empty($nome)) {
        $stmt = $dbconn->prepare("INSERT INTO produtos (codigo, nome) VALUES (?, ?)");
        $stmt->bind_param("is", $codigo, $nome);
        if ($stmt->execute()) {
            echo "Produto inserido com sucesso!<br>";
            echo '<a href="index.php">Voltar</a>';
        } else {
            echo "Erro ao inserir produto: " . $stmt->error . "<br>";
            echo '<a href="index.php">Voltar</a>';
        }
        $stmt->close();
    } else {
        echo "Preencha todos os campos corretamente.<br>";
        echo '<a href="index.php">Voltar</a>';
    }
} else {
    echo "Método inválido.";
}
$dbconn->close();
?>