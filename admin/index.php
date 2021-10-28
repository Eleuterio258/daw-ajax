<?php
include '../conexao.php';


$result_user = "SELECT * FROM carros  LIMIT 20";
$resultado_user = mysqli_query($conn, $result_user);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .margen {
            margin-bottom: 20px;
        }

        .label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="mt-5 h2 margen">SISTEMA DE CADATRO</h2>

        <a href="create.php" class="float-left btn btn-success">Cadatrar Veiculo</a>
        <br /><br />
        <table class="table table-bordered">
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Cor</th>
            <th>combustivel</th>
            <th>Valor</th>
            <th>KM</th>
            <th colspan="2">Opcoes</th>
            </tr>
            <?php

            while ($row_user = mysqli_fetch_assoc($resultado_user)) {
                echo "<tr>";

                echo '<td >' . $row_user['id'] . '</td>';
                echo '<td >' . $row_user['marca'] . '</td>';
                echo '<td>' . $row_user['modelo'] . '</td>';
                echo '<td>' . $row_user['ano'] . '</td>';
                echo '<td>' . $row_user['cor'] . '</td>';
                echo '<td>' . $row_user['combustivel'] . '</td>';
                echo '<td>' . $row_user['valor'] . '</td>';
                echo '<td>' . $row_user['km'] . '</td>';
                echo '<td><a href="edit.php?id=' . $row_user['id'] . '" class="btn btn-primary">Editar</a></td>';
                echo '<td><a href="delete.php?id=' . $row_user['id'] . '" class="btn btn-danger">Excluir</a></td>';
            }
            ?>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
</body>

</html>