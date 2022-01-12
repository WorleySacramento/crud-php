<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD EM PHP</title>
</head>

<?php
$pesquisa = $_POST['busca'] ?? '';

include 'conect.php';

$sql = "SELECT * FROM clientes WHERE nome LIKE '%$pesquisa%'";

$dados = mysqli_query($conn, $sql);

?>


<body>
    <h1>Crud</h1>

    <div class=" container-fluid">
        <div class="">
            <div class="col">
                <h3>Pesquisa</h3>
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <form class="d-flex" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" name="busca" placeholder="Pesquisar" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">Idade</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        while ($ld = mysqli_fetch_assoc($dados,)) {
                           $id = $ld['id'];
                           $nome = $ld['nome'];
                           $email = $ld['email'];
                           $idade = $ld['idade'];

                           echo " <tr>
                                <td>$nome</td>
                                <td>$email</td>
                                <td>$idade</td>
                                </tr>";

                        }

                        ?>


                       

                        <tr>


                        </tr>

                        <tr>

                        </tr>

                    </tbody>
                </table>

                <a href="index.php" class="btn btn-info">Pagina inicial</a>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>