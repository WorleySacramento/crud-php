<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StiloTeste.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Editar Cadastro</title>
</head>
<body>

    <?php
    include "conect.php";

    $id = $_GET['id'] ?? '';

    $sql = " SELECT * FROM clientes WHERE idPessoa = $id";

    $dados = mysqli_query($conn, $sql);

    $ld = mysqli_fetch_assoc($dados);


    ?>




    
    
    <div class=" container">
       
        <div class="">
            <div class="">
                <div class=" justify-content-around">

                    <div class="">
                    <?php require_once "header.php"; ?>
                    </div>
                      
                       <div class="justify-content-center d-flex titlePages">
                       <h3>Editar Cadastro</h3> 
                       </div>
                </div>
                
                <form class="formEdit" action="edit_script.php" method="POST">
                    <div class="row form-control-sm">
                        <div class="col form-group-sm mb-2" >
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="" value="<?php echo $ld['nome']; ?>" required>
                        </div>
                        
                        <div class="col form-group mb-2">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="" value="<?php echo $ld['email']; ?>" required>
                        </div>
                       
                        <div class="col form-group mb-2">
                            <label for="idade">Idade</label>
                            <input type="text" name="idade" id=""  value="<?php echo $ld['idade']; ?>" required>
                        </div>
                      
                        <div class=" form-group mb-2" >
                            <input class="btn btn-primary" type="submit" value="Salvar"></input>
                            <input type="hidden" name="id" value="<?php echo $ld['idPessoa'];?>">
                        </div>
                    </div>
                 </form>
                 
                    
                 
            </div>

                    
        </div>
        
            
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>