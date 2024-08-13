<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Cidade</title>
</head>
<body>

    <?php
        include("../include/conexao.php");

        $sql = "SELECT * FROM cidade";
        $result = mysqli_query($con, $sql);
    ?>

    <h1>Consulta de Cidades</h1>
    
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['estado']."</td>";
            echo "<td><a href='AlterarCidade.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href='DeletarCidade.php?id=".$row['id']."'>Deletar</a></td>";
            echo "</tr>";
        }
    ?>
    </table>
    <div>
        <a href="cadC.php">Cadastrar Nova Cidade</a>
    </div>
    <div>
        <a href="../index.html">Voltar</a>
    </div>
</body>
</html>