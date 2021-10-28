<?php
$connect = new \PDO('mysql:host=localhost;dbname=job-ajax', 'root', '');


$data = [
    "marca"=> $_POST['marca'],
    "modelo"=> $_POST['modelo'],
    "ano"=> $_POST['ano'],
    "km"=> $_POST['km'],
    "valor"=> $_POST['valor'],
    "combustivel"=> $_POST['combustivel'],
    "cor"=> $_POST['cor'],
  
];


$stmt =$connect->prepare('INSERT INTO carros (marca, modelo, ano, km, valor, combustivel, cor) VALUES (:marca, :modelo, :ano, :km, :valor, :combustivel, :cor)');



try {
    $connect->beginTransaction();
    $stmt->execute($data);
    $connect->commit();
     
} catch (\Exception $e) {
    $connect->rollBack();
    
    
 
}
