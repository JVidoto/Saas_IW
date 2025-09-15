<?php
$nome = $_POST['user'];
$email = $_POST['email'];
$senha = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sucessfull</title>
</head>
<body>
    <h1>Login Successful</h1>
    <p>Olá <?php echo $nome;?>, seja bem vindo :)</p>
    
</body>
</html>