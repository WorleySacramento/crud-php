<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="StiloTeste.css">
    <title>CRUD EM PHP</title>
</head>

<body>



    <div class=" container">
        <div class="">
            <?php require_once "header.php"; ?>
            <div class="titlePages">
                <h2 class=" bold">Cadastros</h2>
            </div>
            <div class="col-12 d-flex justify-content-center">

                <form class="row form" action="script_cadastro.php" method="POST">
                    
                    <div class="mb-3 col">
                        <label class=" form-label" for="nome">Nome</label>
                        <input type="text" name="nome" id="" required>
                    </div>
                    <div class=" mb-3 col">
                        <label class=" form-label" for="email">E-mail</label>
                        <input type="email" name="email" id="" required>
                    </div>
                    <div class="mb-3 col">
                        <label class=" form-label" for="idade">Idade</label>
                        <input type="number" name="idade" id="" required>
                    </div>

                    <div class="form-checkcol">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Confirme as informações
                        </label>
                    </div>


                    <div class=" col">
                        <button class=" btn-sm btn btn-primary" type="submit">Enviar</button>
                    </div>

                </form>

            </div>

        </div>

    </div>


    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>

<?php require_once "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>