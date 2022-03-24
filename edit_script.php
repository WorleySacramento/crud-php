<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StiloTeste.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Alteração de Cadastro</title>
</head>

<body>
    

   

<br>
    <div class=" container">
    

        <div class="">
        <div class=" ">
                    <?php require_once "header.php"; ?>
                    </div>
            <?php
            include "conect.php";

            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $idade = $_POST['idade'];

           // $sql = "INSERT INTO `clientes`(`nome`, `email`, `idade`) VALUES ('$nome','$email','$idade')"
           $sql = "UPDATE `clientes` set nome = '$nome', email = '$email', idade = '$idade'  WHERE idPessoa = $id ";

            if (mysqli_query($conn, $sql)) {
                mensagem ("$nome Alterado Com Sucesso!", 'success');
            } else
                mensagem ("$nome Não Alterado!", 'danger');
            ?>

           
            

        </div>
        <br>
        
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>