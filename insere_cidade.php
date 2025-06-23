<?php
require __DIR__ . '/conect_db.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cpf = isset($_POST['cpf']) ? intval($_POST['cpf']) : 0;
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';

    if ($cpf > 0 && !empty($nome)) {
        $stmt = $dbconn->prepare("INSERT INTO cad_cpf (cpf, nome) VALUES (?, ?)");
        $stmt->bind_param("is", $cpf, $nome);
        if ($stmt->execute()) {
            echo "Cidade inserida com sucesso!<br>";
            echo '<a href="index.php">Voltar</a>';
        } else {
            echo "Erro ao inserir cidade: " . $stmt->error . "<br>";
            echo '<a href="index.php">Voltar</a>';
        }
        $stmt->close();
    } else {
        echo "Preencha todos os campos corretamente.<br>";
        echo '<a href="index.php">Voltar</a>';}
} 
else {
    echo "Método inválido.";}
$dbconn->close();
?>
