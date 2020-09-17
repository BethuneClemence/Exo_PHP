<?php

    
    include('Ville.php');
    include('Membre.php');
    include('Repas.php');

    $vTorcy = new Ville(77200, "Torcy");
    $vMeaux = new Ville(77100, "Meaux");



    // echo $vTorcy->toString();
    // echo "<br>";
    // echo $vMeaux->toString();


    // $m100 = new Membre(100, "Sacha", $vMeaux);
    // $m101 = new Membre(101, "Oumayma", $vMeaux);
    // $m102 = new Membre(102, "Victore", $vTorcy);
    // $m103 = new Membre(103, "Selda", $vMeaux);    


    // echo $m100->getVille()->getNom();
    // echo "<br>";
    // echo $m101->getVille()->getNom();
    // echo "<br>";
    // echo $m102->getVille()->getNom();
    // echo "<br>";
    // echo $m103->getVille()->getNom();
    // echo "<br>";

    $r1 = new Repas(1,4);
    $r2 = new Repas(2,4);
    $r3 = new Repas(3,8);
    $r4 = new Repas(4,4);
    
    $listRepasm100 = array($r2);
    $m100 = new Membre(100, "Sacha", $vMeaux, $listRepasm100);
    
    $listRepasm101 = array($r1, $r3, $r4);

    $m101 = new Membre(101, "Oumayma", $vMeaux, $listRepasm101);
    $m102 = new Membre(102, "Victore", $vTorcy, array());
    $m103 = new Membre(103, "Selda", $vMeaux, array());
    
    
    
    echo $m100->afficherRepas();
    


