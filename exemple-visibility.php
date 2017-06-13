<?php
    
    include_once './Compte.php';
    
    $compte = new Compte();
    
    // $compte->solde = 200000000000;
    
    echo $compte->getSolde();
?>

