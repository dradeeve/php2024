<?php
  if($_POST{"cxamigo"} ! = ""){
        include_once 'factory/conexao.php'
        $amigo = $_POST["cxamigo"];
        $email = $_POST["cxemail"];
        $telefone = $_POST["cxtelefone"];
        $whats = $_POST["cxwhats"];
        $datanasc = $_POST["cxdatanasc"]
        $sql = "insert into tbamigos(amigo,email,telefone,whats,datadenascimento)
        values('$amigo','$email','$telefone','$whats','$datanasc')";
        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrado com sucesso!";
    }
    else
    {
        echo "Dados não cadastrado!";
    }
?>
  }