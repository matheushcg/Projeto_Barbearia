<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia na Régua</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="http://127.0.0.1:8000/style.css" rel="stylesheet">
    
</head>
<body>
<main>
  <header class="p-3 bg-dark text-white fixed-top">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src ="img/logo.png">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="servicos" class="nav-link px-2 text-white">Serviços</a></li>
          <li><a href="cortes" class="nav-link px-2 text-secondary">Cortes</a></li>
          <li><a href="barba" class="nav-link px-2 text-white">Barba</a></li>
          <li><a href="quem_somos" class="nav-link px-2 text-white">Quem Somos</a></li>
          <li><a href="contato" class="nav-link px-2 text-white">Contato</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Cadastre-se</button>
        </div>
      </div>
    </div>
  </header>

  <div class = "cortes">
  <h1><b>CORTES </b></h1>
  <br>
  <hr>

  <h1><b>CORTE MASCULINO</b></h1>
  <br>
  <img src ="img/corte_masculino.jpg">
  <br>
  <br>
  <h3> Corte de Cabelo, lavação com Shampoo e Condicionador de alta qualidade para seu cabelo.</h3>
  <br>
  <hr>

  <h1><b>CORTE INFANTIL</b></h1>
  <br>
  <img src ="img/corte_infantil.jpg">
  <br>
  <br>
  <h3> Corte de Cabelo, lavação com Shampoo e Condicionador de alta qualidade para seu cabelo.</h3>
  <br>
  <hr>

  <h1><b>CORTE + BARBA</b></h1>
  <br>
  <img src ="img/corte_barba.jpg">
  <br>
  <br>
  <h3> Corte de Cabelo, lavação com Shampoo e Condicionador de alta qualidade para seu cabelo, 
    somados a tradicional técnica de barbear, a uma relaxante toalha quente, óleo pré-shave, espuma de barbear aquecida.</h3>
  <br>
  <hr>

  <h1><b>CORTE + SOBRANCELHA</b></h1>
  <br>
  <img src ="img/corte_sobrancelha.jpg">
  <br>
  <br>
  <h3> Corte de Cabelo, lavação com Shampoo e Condicionador de alta qualidade para seu cabelo, 
  somados ao tradicional Design de sobrancelha com técnica que visa retirar apenas o excesso mantendo as linhas naturais, velha “aparada”.</h3>
  <br>
  <hr>

  </div>
  </div>

  <footer class="container">
    <p>&copy; <?= date('Y') ?> - Na Régua Barbearia.</p>
  </footer>
</main>

<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>