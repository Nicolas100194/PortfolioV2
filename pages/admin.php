<?php
    //require ('../inc.php');
    //require ('../app/Administrateur.php');
    //global $admin;
    //$admin->verifLogged();
    require('../app/Projet.php');
    require ('../app/Database.php');
    $db = new App\DataBase('portfolio')
?>
<link rel="stylesheet" href="../assets/main.css">

<body class="body-admin">
    <section class="section-admin">
        <h1>Administration portfolio</h1>
        <?php //if ($admin->estConnecte()) : ?>
            <a href="../pages/logout.php">Se déconnecter</a>
        <!--// endif;?>-->
        <?php foreach($db->query('SELECT * FROM projets', 'App\Projet') as $project) : ?>
            <?= $project->getTitre()?>
            <?= $project->getTechnologies()?>
        <?php endforeach; ?>
    </section>
</body>
