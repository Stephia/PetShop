<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Animal</title>
    <link rel="stylesheet" href="styleCA.css">
</head>
<body>
    <form action="cadAexe.php" method="post"
    enctype="multipart/form-data">
        
        <fieldset>

            <legend>Cadastro de Animais</legend>
            
            <div>
                <label for="nome">Foto: </label>
                <input type="file" name="foto" id="foto" accept="../img/*"><br><br>

                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" required><br>

                <label for="especie">Espécie: </label>
                <input type="text" name="especie" id="especie" required><br>

                <label for="raca">Raça: </label>
                <input type="text" name="raca" id="raca" required><br>

                <label for="data_nascimento">Data de Nascimento: </label>
                <input type="date" name="data_nascimento" id="data_nascimento" required><br>

                <label for="castrado">Castrado: </label>
                <input type="text" name="castrado" id="castrado" required><br><br>
            </div>

            <div>
                
                <label for="dono">Cuidador: </label>
                <select name="dono" id="dono" required>
                    <?php 
                        include('../includes/conexao.php');
                        $sql = "SELECT * FROM Pessoa";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<option value='".$row['id_p']."'>".$row['nome_p']."</option>";
                        }
                    ?>
                </select>
                
                <div>
                    <input type="submit" value="Enviar">
                </div>
                <div>
                    <button><a href="../index.html">Voltar ao Menu</a></button><br>
                </div>
            </div>
        </fieldset>
    </form>

</body>
</html>