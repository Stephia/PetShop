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
        include("../includes/conexao.php");

        $sql = "SELECT * FROM Cidade";
        $result = mysqli_query($con, $sql);
    ?>

    <h1>Consulta de Cidades</h1>
    
    <table align="center" border="1" width="500">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>".$row['id_c']."</td>";
                echo "<td>".$row['nome_c']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td><a href='altC.php?id=".$row['id_c']."'>Alterar?</a></td>";
                echo "<td><a href='delC.php?id=".$row['id_c']."'>Deletar?</a></td>";
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