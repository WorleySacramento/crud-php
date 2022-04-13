<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="StiloTeste.css">
  <title>Crud Para Cadastro</title>
</head>

<body>


  <div class=" container">

    <div class="container-fluid">
    <?php require_once "header.php"; ?>

            <!-- Imagens Carrousel-->
      <div class="row d-flex d-grid  navbar-nav-scroll vm-100 justify-content-evenly">

        <div class="card col-md-4 d-flex">
          <div class="card-body">
            <h4 class="card-title">Mussum Ipsum</h4>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" >
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="./img/A img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                  <img src="./img/B img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                  <img src="./img/C img.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <p class="card-text">cacilds vidis litro abertis. Quem manda na minha terra sou euzis</p>
            
          </div>
        </div>

        <div class="card col-md-4 d-flex">
          <div class="card-body">
            <h4 class="card-title">Mussum Ipsum</h4>
            <div id="carouselExampleIntervalA" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./img/img 1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/img 2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/img 3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIntervalA" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIntervalA" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <p class="card-text">cacilds vidis litro abertis. Quem manda na minha terra sou euzis</p>
            
          </div>
        </div>

        <div class="card col-md-4 d-flex">
          <div class="card-body">
            <h4 class="card-title">Mussum Ipsum</h4>
            <div id="carouselExampleIntervalB" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./img/D img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/img 4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/img 3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIntervalB" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIntervalB" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <p class="card-text">cacilds vidis litro abertis. Quem manda na minha terra sou euzis</p>
            
          </div>
        </div>

        <div class="card col-md-4 d-flex">
          <div class="card-body">
            <h4 class="card-title">Mussum Ipsum</h4>
            <div id="carouselExampleIntervalC" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./img/A img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/B img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/C img.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIntervalC" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIntervalC" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <p class="card-text">cacilds vidis litro abertis. Quem manda na minha terra sou euzis</p>
            
          </div>
        </div>

        <div class="card col-md-4 d-flex">
          <div class="card-body">
            <h4 class="card-title">Mussum Ipsum</h4>
            <div id="carouselExampleIntervalD" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./img/A img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/B img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/C img.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIntervalD" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIntervalD" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <p class="card-text">cacilds vidis litro abertis. Quem manda na minha terra sou euzis</p>
           
          </div>
        </div>

        <div class="card col-md-4 d-flex">
          <div class="card-body">
            <h4 class="card-title">Mussum Ipsum</h4>
            <div id="carouselExampleIntervalE" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./img/A img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/B img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/C img.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIntervalE" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIntervalE" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <p class="card-text">cacilds vidis litro abertis. Quem manda na minha terra sou euzis</p>
           
          </div>
        </div>

        <div class="card col-md-4 d-flex">
          <div class="card-body">
            <h4 class="card-title">Mussum Ipsum</h4>
            <div id="carouselExampleIntervalF" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./img/A img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/B img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/C img.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIntervalF" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIntervalF" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <p class="card-text">cacilds vidis litro abertis. Quem manda na minha terra sou euzis</p>
            
          </div>
        </div>

        <div class="card col-md-4 d-flex">
          <div class="card-body">
            <h4 class="card-title">Mussum Ipsum</h4>
            <div id="carouselExampleIntervalG" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./img/A img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/B img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/C img.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIntervalG" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIntervalG" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <p class="card-text">cacilds vidis litro abertis. Quem manda na minha terra sou euzis</p>
            
          </div>
        </div>

        <div class="card col-md-4 d-flex">
          <div class="card-body">
            <h4 class="card-title">Mussum Ipsum</h4>
            <div id="carouselExampleIntervalH" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./img/A img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/B img.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/C img.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIntervalH" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIntervalH" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <p class="card-text">cacilds vidis litro abertis. Quem manda na minha terra sou euzis</p>
            
          </div>
        </div>


      </div>


    </div>

    
   
  </div>

  <?php require_once "footer.php"; ?>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" sintegrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>