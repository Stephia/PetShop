<?php
    include('../includes/conexao.php');
    $id_p = $_GET['id'];
    $sql = "SELECT p.id_p, p.nome_p , p.email, p.endereco, p.bairro, c.nome_c nomecidade, c.estado, p.cep FROM Pessoa p LEFT JOIN Cidade c on c.id_c = p.id_ci WHERE id = $id_p";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Pessoa</title>
</head>
<body>
<div class="principal box">
      <h2>Atualização de Pessoa</h2>
      <form action="./altPxe.php" method="post">
        <div>
          <label for="nome">Nome</label>
          <input type="text" name="nome" id="nome" value="<?php echo $row['nome_p']?>" />
        </div>
        <div>
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" value="<?php echo $row['email'] ?>" />
        </div>
        <div>
          <label for="senha">Senha Nova</label>
          <input type="password" name="senha" id="senha" value="<?php echo $row['senha'] ?>" />
        </div>
        <div>
          <label for="endereco">Endereço</label>
          <input type="text" name="endereco" id="endereco" value="<?php echo $row['endereco'] ?>" />
        </div>
        <div>
          <label for="bairro">Bairro</label>
          <input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro'] ?>" />
        </div>
        <div>
          <label for="cep">CEP</label>
          <input type="text" name="cep" id="cep" value="<?php echo $row['cep'] ?>" />
        </div>
        <input type="hidden" name='id' value='<?php echo $row['id_p'] ?>'>
        <div><label for="cidade">Cidade</label>
          <select name="cidade" id="cidade">
            <?php
            $sql = "SELECT id_c, nome_c, estado FROM Cliente";
            $result = mysqli_query($con, $sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()){

                $id_c = $row["id_c"];
                $nome_c = $row["nome_c"];
                $estado = $row["estado"];
                echo "<option value='$id_c'>$nome_c - $estado</option>";
                
                }
                
                echo "</select><br>";

            } else {

                echo "Nenhuma cidade encontrada.";
            }
            ?>
          </select>
        </div>
        <button class="botaoSubmit" type="submit">Alterar</button>
      </form>
    </div> 
</body>
</html>