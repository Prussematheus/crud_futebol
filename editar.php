
<?php
include("conexao.php");

// Validação do parâmetro id
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    die("ID inválido.");
}
$id = intval($_GET["id"]);

// Busca segura do usuário
$sql = "SELECT * FROM usuarios WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$dado = mysqli_fetch_assoc($res);

if (!$dado) {
    die("Usuário não encontrado.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Atualização segura
    $sql = "UPDATE usuarios SET nome=?, email=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssi", $nome, $email, $id);
    mysqli_stmt_execute($stmt);

    header("Location: index.php");
    exit;
}
?>

<form method="POST">
    Nome: <input type="text" name="nome" value="<?= htmlspecialchars($dado['nome']) ?>"><br>
    Email: <input type="email" name="email" value="<?= htmlspecialchars($dado['email']) ?>"><br>
    <input type="submit" value="Salvar">
</form>