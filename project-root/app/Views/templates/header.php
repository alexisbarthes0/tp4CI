<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <title>EsiLAN</title>
    <link rel="icon" type="image/png" href="esilanLogo.png"/>
    <?php if (isset($loggedIn) && $loggedIn == true ) : ?>
        <span>Bonjour,<?= esc($name) ?> </span>
    <?php endif ?> 
</head>

<body>
    <header class="header-outer">
    <table class="headerDePage">
        <thead>
            <tr>
            <th scope="col"><image src='esilanLogo.png' class="logoHeader"/></th>
            <th scope="col"><a href="http://localhost:8080/page">Accueil  |  </a></th>
            <th scope="col">Les participants  |  </th>
            <th scope='col'>Les jeux  |  </th>
            <th scope="col">Qui sommes-nous?  |  </th>
            <th scope="col">Mon compte </th>
            </tr>
        </thead>
    </table>


    </header>