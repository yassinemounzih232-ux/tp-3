<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bibliothèque Les Étoiles</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/52e1373439.js" crossorigin="anonymous"></script>

  <style>
    body {
      padding-top: 70px;
      background-color: #f4f6f9;
    }

    .navbar {
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .navbar-brand {
      font-weight: bold;
      letter-spacing: 1px;
    }

    .dropdown-menu {
      border-radius: 10px;
    }

    .nav-link i {
      margin-right: 6px;
    }
  </style>
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php">
    <i class="fas fa-book-open"></i> Bibliothèque Les Étoiles
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarMain">
    <ul class="navbar-nav ml-auto">

      <!-- GENRES -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdownGenres" data-toggle="dropdown">
          <i class="fas fa-bookmark"></i> Genres
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Liste des genres</a>
          <a class="dropdown-item" href="#">Ajouter un genre</a>
        </div>
      </li>

      <!-- AUTEURS -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdownAuteurs" data-toggle="dropdown">
          <i class="fas fa-user-pen"></i> Auteurs
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Liste des auteurs</a>
          <a class="dropdown-item" href="#">Ajouter un auteur</a>
          <a class="dropdown-item" href="#">Rechercher un auteur</a>
        </div>
      </li>

      <!-- NATIONALITES -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdownNationalites" data-toggle="dropdown">
          <i class="fas fa-globe"></i> Nationalités
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="listeNationalites.php">Liste des nationalités</a>
          <a class="dropdown-item" href="formNationalite.php?action=Ajouter">Ajouter une nationalité</a>
        </div>
      </li>

    </ul>
  </div>
</nav>
