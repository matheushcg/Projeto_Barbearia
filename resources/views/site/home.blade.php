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
          <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="servicos" class="nav-link px-2 text-white">Serviços</a></li>
          <li><a href="cortes" class="nav-link px-2 text-white">Cortes</a></li>
          <li><a href="barba" class="nav-link px-2 text-white">Barba</a></li>
          <li><a href="quem_somos" class="nav-link px-2 text-white">Quem Somos</a></li>
          <li><a href="contato" class="nav-link px-2 text-white">Contato</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Cadastre-se </button>
        </div>
      </div>
    </div>
  </header>
  <br>
  <br>
  <br>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner1.jpg">
        <div class="container">
        </div>
      </div>
      <div class="carousel-item">
      <img src="img/banner2.jpeg">
      </div>
      <div class="carousel-item">
        <img src="img/banner3.png">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container marketing">

    <div class="container barbeiros">
    <h1>Nossos Barbeiros:</h1>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <img src="img/barbeiro1.png">

        <h2>Cleiton</h2>
        <p>Como barbeiro fundador, experiência é o que não falta. Sempre conseguindo surpreender seus clientes.</p>
      </div>
      <div class="col-lg-4">
        <img src="img/barbeiro2.png">

        <h2>Renato</h2>
        <p>Profissionalismo é seu segundo nome, sempre inovando e trazendo o melhor para seu cliente.</p>
      </div>
      <div class="col-lg-4">
        <img src="img/barbeiro3.png">

        <h2>Anderson</h2>
        <p>Um dos nomes mais falados na cidade, quando o assunto é barbeiro seu nome é referência.</p>
      </div>
    </div>

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Local: </h2>
        <br>
        <p class="lead">Contamos com um espaço muito agradável, com disponibilidade para realizar 3 cortes simultaneamente e também com uma televisão, um ar-condicionado e uma geladeira com cerveja para o conforto do cliente.</p>
      </div>
      <div class="col-md-5">
        <div class ="local">
        <img src="img/banner2.jpeg">
        </div>
      </div>


      <hr class="featurette-divider">

    <div class="container barbeiros">
    <h1>Feedback de clientes satisfeitos:</h1>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <img src="img/cliente1.png">

        <h2>Renan</h2>
        <p>"Depois de conhecer a Na Régua, minha auto-estima aumentou tanto que atualizo meu corte toda semana."</p>
      </div>
      <div class="col-lg-4">
        <img src="img/cliente2.png">

        <h2>Pacheco</h2>
        <p>"Sem palavras para descrever, melhor barbearia, sempre me surpreendendo com sua qualidade."</p>
      </div>
      <div class="col-lg-4">
        <img src="img/cliente3.png">

        <h2>Junior</h2>
        <p>"Como a propria barbearia diz, não se trata somente de qualidade e sim de Na Régua Barber!"</p>
      </div>
    </div>
    <hr class="featurette-divider">

  <!-- FOOTER -->
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