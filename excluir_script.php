<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exclusão de Cadastro</title>
</head>

<body>
    <h1>Excluir Cadastro</h1>

   


    <div class=" container-fluid">
        <div class=" row ">
            <?php
            include "conect.php";

            $id = $_POST['id'];
            $nome = $_POST['nome'];
           

           // $sql = "INSERT INTO `clientes`(`nome`, `email`, `idade`) VALUES ('$nome','$email','$idade')"
           $sql = "DELETE FROM `clientes` WHERE idPessoa = $id ";

            if (mysqli_query($conn, $sql)) {
                mensagem ("$nome Excluído Com Sucesso!", 'success');
            } else
                mensagem ("$nome Não Excluído!", 'danger');
            ?>
                <div class="btn-sm">
                <a href="index.php" class="btn btn-sm btn-primary">Voltar</a> 
                </div>
            
            

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>