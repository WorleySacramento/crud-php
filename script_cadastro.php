<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CADASTRO</title>
</head>

<body>
    <h1>Crud</h1>

   


    <div class=" container-fluid">
        <div class=" ">
            <?php
            include "conect.php";

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $idade = $_POST['idade'];

            $sql = "INSERT INTO `clientes`(`nome`, `email`, `idade`) VALUES ('$nome','$email','$idade')";


            if (mysqli_query($conn, $sql)) {
                mensagem ("$nome Cadastrado Com Sucesso!", 'success');
            } else
                mensagem ("$nome Não Cadastrado!", 'danger');
            ?>

            
            

        </div>
            <hr>
        <div class="float-start" style="max-width: 50px;">
        <a href="index.php" type=" button" class="btn btn-sm btn-primary">Voltar</a> 
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>