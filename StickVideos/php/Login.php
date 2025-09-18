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
    <div class="container">
    <h1>Login Efetuado com sucesso</h1>
    <p>Olá <?php echo $nome;?>, seja bem vindo :)</p>
    </div>
</body>
</html>
<!--php
$host = 'localhost';
$user = 'seu_usuario';
$pass = 'sua_senha';
$db   = 'nome_do_banco';

$conetcar = new mysqli($host, $user, $pass, $db);

if ($conetcar->connect_error) {
    die('Erro na conexão: ' . $conetcar->connect_error);
}
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
if ($conetcar->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conetcar->error;
}

$conetcar->close();
!-->