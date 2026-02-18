<?php
$hostnom = "btssio.dedyn.io";
$bdd = "MOUNZIH_tp3";
$usernom = "MOUNZIH";
$password = "04072007";

try {
    $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    $monPdo = null;
}
?>