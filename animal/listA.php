<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Animal</title>
</head>
<body>

    <?php
        
        include("../includes/conexao.php");

        $sql = "SELECT a.foto AS foto, a.id_a AS id_a, a.nome_a AS nome_a, a.especie AS especie, a.raca AS raca, a.dt_nascimento AS nascimento, a.idade AS idade, a.castrado AS castrado, p.nome_p AS nome_p
        FROM animal a
        LEFT JOIN pessoa p ON a.id_pe = p.id_p;";

        $result = mysqli_query($con, $sql);
    ?>

    <h1>Consulta de Animais</h1>

    <table align="center" border="1" width="500">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Raça</th>
            <th>Data de Nascimento</th>
            <th>Idade</th>
            <th>Castrado</th>
            <th>Nome do Cuidador</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
    <?php
        
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id_a']."</td>";
            if($row['foto'] == ""){
                echo "<td></td>";
            }else{
                echo "<td><img src='".$row['foto']."' width ='80' height ='100'/></td>";
            }
            echo "<td>".$row['nome_a']."</td>";
            echo "<td>".$row['especie']."</td>";
            echo "<td>".$row['raca']."</td>";
            echo "<td>".$row['nascimento']."</td>";
            echo "<td>".$row['idade']."</td>";
            echo "<td>".$row['castrado']."</td>";
            echo "<td>".$row['nome_p']."</td>";
            echo "<td><a href='altA.php?id=".$row['id_a']."'>Alterar?</a></td>";
            echo "<td><a href='delA.php?id=".$row['id_a']."'>Deletar?</a></td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>