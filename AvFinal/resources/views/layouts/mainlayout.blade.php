<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="img/ico/favicon.ico" type="image/x-icon">
    <title>@yield('title')</title>
</head>
<body>
<nav> 
    <nav class="navbar navbar-expand-lg bg-black">
      <div class="container-fluid">
        <img class="d-inline-block align-text-top me-2" src="img/favicon.png" alt="Bootstrap" width="50" height="50">
        <a class="navbar-brand" href="{{route('livro.store')}}">Biblioteca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <button class="nav-link" >
              <a href="{{route('livro.store')}}" class="link-light link-underline-opacity-0">Cadastro</a>
            </button>
          </li>
          <li class="nav-item">
            <Button class="nav-link">
              <a href="#" class="link-light link-underline-opacity-0 link-underline-opacity-0-hover">Lista</a>
            </Button>
          </li>
          <li class="nav-item">
            <Button class="nav-link">
              <a href="#" class="link-light link-underline-opacity-0 link-underline-opacity-0-hover">Lista por gêneros</a>   
            </Button>
          </li>
          <li class="nav-item">
            <button class="nav-link" >
              <a href="#" class="link-light link-underline-opacity-0 link-underline-opacity-0-hover">Sobre</a>
            </button>
          </li>
          <li class="nav-item-login ms-5">
            @if (Route::has('login'))
              @auth
                <Button class="nav-link nav-link-login" >
                  <a href="{{ url('/dashboard') }}" class="link-light link-underline-opacity-0 link-underline-opacity-0-hover">Dashboard</a>   
                </Button>
                @else
                  <Button class="nav-link nav-link-login">
                    <a href="{{ route('login') }}" class="link-light link-underline-opacity-0 link-underline-opacity-0-hover">Log in</a>   
                  </Button>
                  @if (Route::has('register'))
                    <Button class="nav-link nav-link-login">
                      <a href="{{ route('register') }}" class="link-light link-underline-opacity-0 link-underline-opacity-0-hover">Register</a>   
                    </Button>
                  @endif
              @endauth
            @endif
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
      </div>
      <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
    </div>
    </nav>
  </nav>
    @yield('conteudo')
<footer class="border-top border-2 d-flex flex-column align-items-center bg-black mt-0">
  <p class="text-white m-0">Desenvolvido por Thomas </p>
  <p class="text-white m-0">Biblioteca</p>
  <p class="text-white m-0">Com o suporte e o apoio de Andrea Pelissari e Taiane Arruda.</p>
  <p class="text-white m-0">2024</p>
</footer>
</body>
</html>