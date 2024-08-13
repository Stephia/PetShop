<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <?php
        include('../includes/conexao.php');

        $sql = "SELECT p.id_p, p.nome_p , p.email, p.endereco, p.bairro, c.nome_c nomecidade, c.estado, p.cep FROM Pessoa p LEFT JOIN Cidade c on c.id_c = p.id_ci";
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Pessoas</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>CEP</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id_p']."</td>";
                echo "<td>".$row['nome_p']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['endereco']."</td>";
                echo "<td>".$row['bairro']."</td>";
                echo "<td>".$row['nomecidade']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td>".$row['cep']."</td>";
                echo "<td><a href='altP.php?id=".$row['id_p']."'>Alterar?</a></td>";
                echo "<td><a href='delP.php?id=".$row['id_p']."'>Deletar?</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <div>
        <button type="submit"><a href="cadP.php">Cadastrar Nova Pessoa</a></button>
    </div>
    <div>
        <button type="submit"><a href="../index.html">Voltar</a></button>
    </div>
</body>
</html>