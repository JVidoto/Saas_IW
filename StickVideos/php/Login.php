<?php
$nome = $_POST['user'];
$email = $_POST['email'];
$senha = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Feito com sucesso</title>
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="shortcut icon" href="../assets/sucesso.png" type="image/x-icon">
</head>
<body>
    <h1>Login Successful</h1>
    <p>Olá <?php echo $nome;?>, seja bem vindo :)</p>
    
</body>
</html>