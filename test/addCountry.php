<?php
    require_once '../bootstrap.php';
    $country = new Country();
    $country->setIdCoun(1);
    $country->setCountryName("Mauritanie");


    $entityManager->persist($country);
    $entityManager->flush();

    echo $country->getIdCoun();
?>