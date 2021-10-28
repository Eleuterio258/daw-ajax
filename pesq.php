<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';

$carros = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados marca do usuario referente a palavra digitada
$result_user = "SELECT * FROM carros WHERE marca LIKE '%$carros%' or cor  LIKE '%$carros%' or modelo LIKE '%$carros%'  LIMIT 20";
$resultado_user = mysqli_query($conn, $result_user);

if (($resultado_user) and ($resultado_user->num_rows != 0)) {
	echo '<table class="table table-bordered">';
	echo '<tr>';
	echo '<th>Marca</th>';
	echo '<th>Modelo</th>';
	echo '<th>Ano</th>';
	echo '<th>Cor</th>';
	echo '<th>combustivel</th>';
	echo '<th>Valor</th>';
	echo '<th>KM</th>';
	echo '</tr>';
	while ($row_user = mysqli_fetch_assoc($resultado_user)) {
		echo '<tr>';
		echo '<td >' .$row_user['marca'] . '</td>';
		echo '<td>' . $row_user['modelo'] . '</td>';
		echo '<td>' . $row_user['ano'] . '</td>';
		echo '<td>' . $row_user['cor'] . '</td>';
		echo '<td>' . $row_user['combustivel'] . '</td>';
		echo '<td>' . $row_user['valor'] . '</td>';
		echo '<td>' . $row_user['km'] . '</td>';
		echo '</tr>';
	}
	echo '</table>';
} else {
	echo "Nenhum Veiculo encontrado ...";
}
