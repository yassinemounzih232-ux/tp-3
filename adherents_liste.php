<?php 
include "header.php";
include "connexionPdo.php";
?>

<div class="container">
  <h2 class="mb-4">Liste des Adhérents</h2>

  <div class="row">
    <?php
    $res = $monPdo->query("SELECT * FROM adherent ORDER BY nom");

    while($a = $res->fetch()):
    ?>
      <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">
              <?php echo strtoupper($a['nom'])." ".$a['prenom']; ?>
            </h5>
            <p class="card-text">
              Ville : <?php echo $a['adrVille']; ?>
            </p>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>

<?php include "footer.php"; ?>