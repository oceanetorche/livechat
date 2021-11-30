<?php

/**
 * @file      gabarit.php
 * @brief     File description
 * @author    Created by Henry Burgat & Océane Torche
 * @version   30.11.2021
 */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?=$title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP CSS, JQUERY, JS, COMPILED JAVASCRIPT -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- CUSTOMED CSS -->
    <link rel="stylesheet" href="css/main.css">

</head>
<body>


<!-- OUR CONTENT -->
<?= $content; ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
