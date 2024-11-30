<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = 'bruno123';
$dbName = 'telalogin';

$conexao = new mysqli($dbHost,$dbUsername, $dbPassword, $dbName );

 if($conexao->connect_errno){
    echo "erro";
 }
else{
    echo"susseco";
}
?>  
</body>
</html>

