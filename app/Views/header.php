<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo URL; ?>">Projeto MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo URL; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo URL; ?>pages/about">Sobre o projeto</a>
      </li>
    </ul>
    <span class="navbar-text">
      <a class="btn btn-success" href="<?php echo URL; ?>users/signup" data-tooltip="data-tooltip" title="Não tem conta? Cadastre-se">Cadastre-se</a>
        <button class="btn btn-light">Entrar</button>
    </span>
  </div>
</nav>