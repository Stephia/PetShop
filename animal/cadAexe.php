<?php   
    $nome_a = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $dt_nascimento = $_POST['data_nascimento'];
    $castrado = $_POST['castrado'];

    $dono = $_POST['dono'];
    $nome_foto = "";

    $nascimento = new DateTime($data_nascimento);
    $atual = new DateTime();
    $idade = $atual -> diff($nascimento)->y;

    include("../includes/conexao.php");
    
    if(file_exists($_FILES['foto']['tmp_name'])){
        $pasta_destino = '../img/';
        $extensao = strtolower(substr($_FILES['foto']['name'],-4));
        $nome_foto = $pasta_destino . date('Ymd-His') . $extensao;
        move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
    }

    $sql = "INSERT INTO animal(nome, especie, raca, data_nascimento, idade, castrado, id_pessoa, foto) 
    VALUES ('$nome_a', '$especie', '$raca', '$dt_nascimento', '$idade', '$castrado', '$dono', '$nome_foto')";
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