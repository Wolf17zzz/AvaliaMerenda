<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@vite(['resources/sass/navigation.scss'])

<nav class="navbar navbar-expand navbar-dark custom-navbar">

  <div class="collapse navbar-collapse justify-content-between">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link custom-link" href="{{ route('inicio') }}"><i class="fas fa-home"></i> Início</a>
      </li>
    </ul>
  <div class="content-text-center">
    <h3 class="nome-pagina custom-heading" >Avalia Merenda</h3>
  </div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('usuarios.perfil') }}"><i class="fas fa-user"></i> Usuário</a>
      </li>
    </ul>
  </div>
</nav>

