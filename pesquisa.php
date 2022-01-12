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
                            <input class="form-control me-2" type="search" name="busca" autofocus placeholder="Pesquisar" aria-label="Search">
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
                            <th scope="colspan">Funções</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        while ($ld = mysqli_fetch_assoc($dados,)) {
                            $idPessoa = $ld['idPessoa'];
                            $nome = $ld['nome'];
                            $email = $ld['email'];
                            $idade = $ld['idade'];

                            echo " <tr>
                                <td>$nome</td>
                                <td>$email</td>
                                <td>$idade</td>
                                <td><a href='edit_cadastro.php?id=$idPessoa' class='btn btn-warning btn-sm' type='button'>Editar</a></td>
                                <td>
                                <a  data-bs-target='#confirma' data-bs-toggle='modal' class='btn btn-danger btn-sm' type='button' onclick=" .' " '." get_data($idPessoa, '$nome')" .'"' . ">
                                Excluir
                                </a>
                                </td>
                                </tr>";
                        }

                        ?>

                        <!-- onclick="get_data($id, '$nome')"
                            concatenada  onclick=" .' " '." get_data($id, '$nome')" .'"' . " -->




                        <tr>


                        </tr>

                        <tr>

                        </tr>

                    </tbody>
                </table>

                <a href="pesquisa.php" class="btn btn-info">Voltar</a>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">EXCLUIR</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="excluir_script.php" method="post">
                        <p>
                        <h3>Tem Certeza Que quer EXCLUIR?</h3>
                        <b id="nome_pessoa">Nome</b>
                        </p>
                        

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                            <input type="hidden" name="nome" id="nome_pessoa2" value="">
                            <input type="hidden" name="id" id="cod_pessoa" value="">
                            <input type="submit" class="btn btn-danger" value="Sim">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function get_data(id,nome){
            document.getElementById('nome_pessoa').innerHTML = nome;
            document.getElementById('nome_pessoa2').innerHTML = nome;
            document.getElementById('cod_pessoa').value = id;
        }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>