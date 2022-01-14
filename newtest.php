<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../assets/css/StiloTeste.css">
    
    <script src="https://kit.fontawesome.com/740a02cee1.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container  ">
       
        <div class="container-fluid ">

            <div class="justify-content-center d-flex">
                <h2 class="title animate__animated animate__backInUp">Bem Vindo Usuário</h2>
            </div>

            <div class="container-fluid d-flex navbar-nav-scrolls">

                <form class="form form-control-md" action="" method="POST">
                    <div>
                        <div class="  mb-3">
                            <input type="hidden" name="IndexLogin" value="login">
                            <label class="label-input" for="">
                                <i class="fas fa-envelope icon "></i>
                                <input class="form-control" type="email" name="email" placeholder="E-mail" required="">
                            </label>
                        </div>
                        <div class="  mb-3">
                            <label class="label-input" for="">
                                <i class="fas fa-key icon"></i>
                                <input class=" form-control" type="password" name="psswd" placeholder="Senha" required="">
                            </label>
                        </div>
                        <br><br><br>
                        <div>
                            <button class="btn btn-success d-grid gap-2 col-6 mx-auto">Entrar</button>
                        </div>
                    </div>
                    <br><br>

                    <div>
                    <button type="button" id="popover" class="btn btn-sm btn-danger" data-bs-toggle="popover" title="Popover title" 
                data-bs-content="Telefone:31-99999-9999 Email:crud@email.com">Contato</button>
                    </div>

                    <div class=" justify-content-center d-flex">
                        <a href="#" class="password">Esqueceu sua Senha?</a>
                    
                     
</div>
                </form>

            </div>
        </div>
    </div>

    
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
     
    </script>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        sintegrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>