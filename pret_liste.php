<?php include 'header.php'; include 'connexionPdo.php'; ?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-dark">Gestion des Emprunts</h2>
        <a href="pret_ajouter.php" class="btn btn-success"><i class="fas fa-plus"></i> Nouveau Prêt</a>
    </div>

    <div class="card shadow-sm">
        <table class="table table-hover mb-0">
            <thead class="thead-light">
                <tr>
                    <th>Adhérent</th>
                    <th>Livre</th>
                    <th>Date Emprunt</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT p.*, l.titre, a.nom, a.prenom 
                        FROM pret p 
                        JOIN livre l ON p.numLivre = l.num 
                        JOIN adherent a ON p.numAdherent = a.num 
                        ORDER BY p.datePret DESC LIMIT 50";
                $res = $monPdo->query($sql);
                while($p = $res->fetch()) {
                    $statut = ($p['dateRetourReelle'] == null) ? 
                              '<span class="badge badge-warning">En cours</span>' : 
                              '<span class="badge badge-success">Rendu</span>';
                    echo "<tr>
                            <td>".strtoupper($p['nom'])." {$p['prenom']}</td>
                            <td>{$p['titre']}</td>
                            <td>".date('d/m/Y', strtotime($p['datePret']))."</td>
                            <td>$statut</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>