
<?php include "header.php"; ?>

<main role="main">

  <!-- HERO SECTION -->
  <div class="jumbotron text-center shadow">
    <div class="container">
      <h1 class="display-4 font-weight-bold">
        <i class="fas fa-book-open"></i> Bibliothèque Les Étoiles
      </h1>
      <p class="lead mt-3">
        Bienvenue sur votre plateforme de gestion des livres, auteurs et nationalités.
      </p>
      <a class="btn btn-warning btn-lg mt-3" href="listeNationalites.php">
        <i class="fas fa-globe"></i> Voir les nationalités
      </a>
    </div>
  </div>

  <!-- CARDS -->
  <div class="container mt-5">
    <div class="row text-center">

      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow">
          <div class="card-body">
            <i class="fas fa-book fa-3x mb-3 text-primary"></i>
            <h5 class="card-title">Gestion des Genres</h5>
            <p class="card-text">Consultez et ajoutez des genres littéraires.</p>
            <a href="#" class="btn btn-primary">Accéder</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow">
          <div class="card-body">
            <i class="fas fa-user-pen fa-3x mb-3 text-success"></i>
            <h5 class="card-title">Gestion des Auteurs</h5>
            <p class="card-text">Ajoutez, recherchez et consultez les auteurs.</p>
            <a href="#" class="btn btn-success">Accéder</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow">
          <div class="card-body">
            <i class="fas fa-globe fa-3x mb-3 text-danger"></i>
            <h5 class="card-title">Nationalités</h5>
            <p class="card-text">Gérez les nationalités des auteurs.</p>
            <a href="listeNationalites.php" class="btn btn-danger">Accéder</a>
          </div>
        </div>
      </div>

    </div>
  </div>

</main>

<?php include "footer.php"; ?>
