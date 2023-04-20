<?php
//Conectando ao banco de dados.
include("conns/conn.php");

    //Variaveis em PHP recebendo dados do post.
    $name = $_POST["name"];
    $email = $_POST["email"];

    //Verificação se o email já foi cadastrado anteriormente.
    $verifi = "SELECT * FROM interview WHERE email = '$email'";
    $resverifi = $mysqli->query($verifi);

    //Se o email já foi cadastrado anteriormente terá um alert e a realocação da página.
    if(mysqli_num_rows($resverifi) > 0){
        echo "<script>
        alert('E-mail já existe.');
        window.location='index.php';
        </script>";
    }
    //Se o email não foi cadastrado anteriormente, será cadastrado normalmente, terá um alert e a realocação da página.
    else
    {
        $sql = "INSERT INTO interview (nome, email) 
        VALUES ('{$name}', '{$email}')";

        $res = $mysqli->query($sql);
            
        echo "<script>
        alert('Cadastrado com sucesso.');
        window.location='index.php';
        </script>";
    }
?>