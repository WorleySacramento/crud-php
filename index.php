<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD EM PHP</title>
</head>
<body>
    <h1>Crud</h1>
    
    <div class=" container-fluid">
        <div class=" row ">
            <div class="col">
                <h3>Cadastro</h3>
                <form class=" form form-control-sm" action="./cadastro.php" method="post">
                    <div class=" form-control">
                        <div class=" form-group" >
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="">
                        </div>
                        <div class=" form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="">
                        </div>
                        <div class=" form-group">
                            <label for="idade">idade</label>
                            <input type="number" name="idade" id="">
                        </div>
                        <div class=" form-group" >
                            <button type="submit">Confirmar</button>
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