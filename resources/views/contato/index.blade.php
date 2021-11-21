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
          <li><a href="cortes" class="nav-link px-2 text-white">Cortes</a></li>
          <li><a href="barba" class="nav-link px-2 text-white">Barba</a></li>
          <li><a href="quem_somos" class="nav-link px-2 text-white">Quem Somos</a></li>
          <li><a href="contato" class="nav-link px-2 text-secondary">Contato</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">
            <a href="/admin/login" style="color:inherit">Login</a>
          </button>
          <button type="button" class="btn btn-warning">
          <a href="/register" style="color:inherit">Cadastre-se</a>
          </button>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
  <div class="formulario">
      <form action="{{ url('/contato') }}" method="POST">
        @csrf
          {{ csrf_field() }}
    
        <div class="mb-3">
              <div class="form-group">
              <h1><strong>CONTATO</strong></h1>
            </div>
              <hr>
              <p>Olá, esta é nossa página de contato, caso queira nos contatar preencha este formulário e em breve nossa equipe retornará email. </p>
              <hr>

              <br>

              <label for="nome">Nome:</label>
              <input name="nome" type="text" class="form-control" placeholder="Seu Nome">
        </div>
        <div class="mb-3">
              <label for="email">Email:</label>
              <input name="email" type="email" class="form-control" placeholder="Seu email">
        </div>
        <div class="mb-3">
              <label for="mensagem">Digite sua mensagem:</label>
              <textarea name="mensagem" class="form-control" id="" cols="10" rows="5" placeholder="Sua mensagem"></textarea>
        </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
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