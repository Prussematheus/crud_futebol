<?php
// Listagem com erro de lógica (ordem incorreta e falta de conexão)
include("conexao.php");

$sql = "SELECT * FROM times"; // Erro de SQL: FORM ao invés de FROM
$resultado = mysqli_query($conn, $sql);

echo "<h1>Lista de Usuários</h1>";

while ($linha = mysqli_fetch_array($resultado)) {
    echo "ID: " . $linha['id'] . "<br>";
    echo "Nome: " . $linha['nome'] . "<br>";
    echo "jogadores: " . $linha['jogadores'] . "<br>";
    echo "<a href='editar.php?id=" . $linha['id'] . "'>Editar</a> | ";
    echo "<a href='excluir.php?id=" . $linha['id'] . "'>Excluir</a><br><br>";
    echo"<br><br>";
}
?>
<a href='cadastrar.php'>Cadastrar novo</a>
