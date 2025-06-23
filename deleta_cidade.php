<?php
require __DIR__ . '/conect_db.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $codigo = isset($_POST['codigo']) ? intval($_POST['codigo']) : 0;
    if ($codigo > 0) {
        $stmt = $dbconn->prepare("DELETE FROM t_cidades WHERE codigo = ?");
        $stmt->bind_param("i", $codigo);
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "Cidade com código $codigo deletada com sucesso!<br>";} 
            else {
                echo "Nenhuma cidade encontrada com código $codigo.<br>";}
            echo '<a href="index.php">Voltar</a>';} 
        else {
            echo "Erro ao deletar cidade: " . $stmt->error . "<br>";
            echo '<a href="index.php">Voltar</a>';}
        $stmt->close();} 
    else {
        echo "Código inválido.<br>";
        echo '<a href="index.php">Voltar</a>';}
} 
else {
    echo "Método inválido.";}
$dbconn->close();
?>