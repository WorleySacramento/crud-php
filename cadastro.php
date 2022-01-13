<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="StiloTeste.css">
    <title>CRUD EM PHP</title>
</head>
<body>
    
   
    
    <div class=" container">
        <div class="container-fluid">
            <div class="justify-content-center d-flex">
                <h2 class="title animate__animated animate__backInUp">Cadastros</h2>
            </div>
            <div class="col-12 d-flex justify-content-center">
                
                <form class="d-flex form-control-md form" action="script_cadastro.php" method="POST">
                    <div class=" divForm form-inline form-control">
                        <div class="" >
                            <label class=" form-label" for="nome">Nome</label>
                            <input type="text" name="nome" id="" required>
                        </div>
                        <div class=" ">
                            <label class=" form-label"  for="email">E-mail</label>
                            <input type="email" name="email" id=""required>
                        </div>
                        <div class=" ">
                            <label class=" form-label" for="idade">Idade</label>
                            <input type="text" name="idade" id="" required>
                        </div>
                        <div class=" " >
                            <button class=" btn btn-primary" type="submit">Confirmar</button>
                        </div>
                    </div>
                 </form>
                
            </div>
            
        </div>

        <a href="index.php" class="btn btn-info">Pagina inicial</a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>