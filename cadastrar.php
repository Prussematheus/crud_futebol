<?php
// Cadastro com erros de sintaxe e falta de validação
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["jogadores"];

    $sql = "INSERT INTO jogadores (nome, posicao, numero_camisa, time_id) VALUES";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "Usuário cadastrado com sucesso!";
    }else
        echo "Erro ao cadastrar!";
}
?>

<form method="POST">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    <input type="submit" value="Cadastrar">
</form>