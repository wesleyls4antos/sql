<?php

session_start();

include('conexao.php');

$cpf = $_SESSION['cpf'];

$select = "SELECT nome, cpf, telefone FROM usuario where
cpf = '$cpf'";

$query = mysqli_query($conexao, $select);
$dados = mysqli_fetch_row($query);

$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    
    if ($telefone <> NULL) {
        $update = "UPDATE usuario SET telefone = '$telefone'";
        $queryupdate = mysqli_query($conexao, $update);
        header('Location: alterardados.php');
    }


 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form id="form-alterar" action="#" method="POST">
        <table border= "1px">
            <tr>
                <td>Nome</td>
                <td>cpf</td>
                <td>Telefone</td>
                <td>Atualizar</td>
            </tr>
            <tr>
                <td><?php echo $dados[0] ?></td>
                <td><?php echo $dados [1] ?></td>
                <td><input type="text" name="telefone" value="<?php echo $dados[2] ?>"></td>
                <td><input type="submit" name="atualizar" value="Atualizar"></td>
            </tr>
        </table>

</body>
</html>

