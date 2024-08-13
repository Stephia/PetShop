<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="principal">
        <?php
        include('../includes/conexao.php');

        $nome_p = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];

        echo "<h1>Dados do Cliente</h1>";
        echo "Nome: $nome</br>";
        echo "E-mail: $email</br>";
        echo "Senha: $senha</br>";
        echo "Endereço: $endereco</br>";
        echo "Bairro: $bairro</br>";
        echo "CEP: $cep</br></br>";

        $sql = "INSERT INTO pessoa (nome_p, email, senha, endereco, bairro, cep, id_ci)";
        $sql .= " VALUES('" . $nome_p . "', '" . $email . "', '" . $senha . "', '" . $endereco . "', '" . $bairro . "', '" . $cep . "', " . $cidade . ")";
        echo $sql;

        $result =  mysqli_query($con, $sql);
        if ($result) {
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        } else {
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
        ?>
    </div>
    <div>
        <button type="submit"><a href="../cadP.php">Voltar</a></button>
    </div>
    <div>
        <button type="submit"><a href="../index.html">Voltar Início</a></button>
    </div>
</body>
</html>