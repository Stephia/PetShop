<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fim Cadastro</title>
</head>
<body>
    <?php
        include("../includes/conexao.php");

        $nome_c = $_POST["nome"];
        $estado = $_POST["estado"];

        $sql = "INSERT INTO cidade(nome_c, estado) VALUES ('$nome_c', '$estado')";

        echo $sql;

        $result = mysqli_query($con, $sql);

        if($result)
        {
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        }
        else
        {
            echo "<h2>Erro ao cadastrar!</h2>";
            mysqli_error($con);
        }
    ?>
    <div>
        <button type="submit"><a href="../cadC.php">Voltar</a></button>
    </div>
    <div>
        <button type="submit"><a href="../index.html">Voltar Início</a></button>
    </div>
</body>
</html>