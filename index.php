<?php
include("conexao.php");

$sql = "SELECT * FROM times"; 
$resultado = mysqli_query($conn, $sql);

echo "<h1>Lista de Times</h1>";

while ($linha = mysqli_fetch_array($resultado)) {
    echo "ID: " . $linha['id'] . "<br>";
    echo "Nome: " . $linha['nome'] . "<br>";
    echo "<a href='editar_time.php?id=" . $linha['id'] . "'>Editar</a> | ";
    echo "<a href='excluir_time.php?id=" . $linha['id'] . "'>Excluir</a><br><br>";
    echo"<br><br>";
}
echo "<a href='cadastrar_time.php'>Cadastrar novo time</a><br><br>";


$sql = "SELECT * FROM jogadores";
$resultado = mysqli_query($conn, $sql);

echo "<h1>Lista de Jogadores</h1>";

while ($linha = mysqli_fetch_array($resultado)) {
    echo "ID: " . $linha['id'] . "<br>";
    echo "Nome: " . $linha['nome'] . "<br>";
    echo "Posição: " . $linha['posicao'] . "<br>";
    echo "Número da Camisa: " . $linha['numero_camisa'] . "<br>";
    echo "Time ID: " . $linha['time_id'] . "<br>";
    echo "<a href='editar_jogador.php?id=" . $linha['id'] . "'>Editar</a> | ";
    echo "<a href='excluir_jogador.php?id=" . $linha['id'] . "'>Excluir</a><br><br>";
    echo "<br><br>";
}
echo "<a href='cadastrar_jogador.php'>Cadastrar novo jogador</a><br><br>";


$sql = "SELECT * FROM partidas";
$resultado = mysqli_query($conn, $sql);

echo "<h1>Lista de Partidas</h1>";

while ($linha = mysqli_fetch_array($resultado)) {
    echo "ID: " . $linha['id'] . "<br>";
    echo "Time 1 ID: " . $linha['time_casa_id'] . "<br>";
    echo "Time 2 ID: " . $linha['time_fora_id'] . "<br>";
    echo "Data: " . $linha['data_jogo'] . "<br>";
    echo "Placar: " . $linha['gols_casa'] . " x " . $linha['gols_fora'] . "<br>";
    echo "<a href='editar_partida.php?id=" . $linha['id'] . "'>Editar</a> | ";
    echo "<a href='excluir_partida.php?id=" . $linha['id'] . "'>Excluir</a><br><br>";
    echo "<br><br>";
}
echo "<a href='cadastrar_partida.php'>Cadastrar nova partida</a><br><br>";
?>