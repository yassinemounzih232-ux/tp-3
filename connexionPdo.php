<?php
$hostnom = "btssio.dedyn.io";
$usernom = "MOUNZIH";
$password = "04072007";
$bdd = "MOUNZIH_tp3";

<?php
try {
    $connexion = new PDO("mysql:host=localhost;dbname=bibliotheque;charset=utf8", "root", "");
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur connexion : " . $e->getMessage());
}
?>