<?php
//finito
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Ricerca di medicina</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/medicina/index.php?page=homepage">Homepage</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Attivitá formative
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost/medicina/index.php?page=mostra_at">Mostra Attivitá formative</a></li>
            <?php if($_SESSION['role_user'] == 'admin'){ ?>
            <li><a class="dropdown-item" href="http://localhost/medicina/index.php?page=modifica_at">Modifica Attivitá formative</a></li>
            <?php } ?>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Unitá didattiche
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost/medicina/index.php?page=mostra_uda">Mostra Unitá didattiche</a></li>
            <?php if($_SESSION['role_user'] == 'admin'){ ?>
            <li><a class="dropdown-item" href="http://localhost/medicina/index.php?page=modifica_uda">Modifica Unitá didattiche</a></li>
            <?php } ?>
          </ul>
        </li>
        <?php if($_SESSION['role_user'] == 'admin'){ ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Utente
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost/medicina/index.php?page=mostra_utenti">Mostra Utenti</a></li>
            <li><a class="dropdown-item" href="http://localhost/medicina/index.php?page=modifica_utenti">Modifica Utenti</a></li>
          </ul>
        </li>
        <?php } ?>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>