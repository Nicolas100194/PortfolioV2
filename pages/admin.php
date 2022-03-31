<?php
    require ('../inc.php');
    require ('../app/Administrateur.php');
    global $admin;
    $admin->verifLogged();
    require('../app/Projet.php');
    $db = new App\DataBase('portfolio')

?>
<link rel="stylesheet" href="../assets/main.css">

<body class="body-admin">
    <section class="section-admin">
        <h1>Administration portfolio</h1>
        <?php if ($admin->estConnecte()) : ?>
            <a href="../pages/logout.php">Se déconnecter</a>
        <?php endif;?>
        <h3>Ajouter un projet</h3>
        <form name="add-projet" method="POST" enctype="multipart/form-data">
            <?php
            $form3 = new \App\Form($_SESSION['inputs'] ?? []);
            echo $form3->input("titre", "text", "titre du projet");
            echo $form3->input("technologies", "text", "technologies du projet");
            echo $form3->input("description", "text", "description du projet");
            echo $form3->input("notions", "text", "notions du projet");
            echo $form3->input("url", "url", "url du projet");
            echo $form3->input("urlImage", "file", "image du projet");
            echo $form3->submit("submit", "Ajouter projet", "btn-submit");
            $projectObj = new \App\Projet();
            $projectObj->addProjet();
            $erreur = true ;
            ?>
            <?php if($erreur) : ?>
                <h4><?= $erreur ?></h4>
            <?php endif; ?>
        </form>
        <h3>Liste des projets</h3>
        <div class="admin-container-projects">
            <?php foreach($db->queryObj('SELECT * FROM projets', 'App\Projet') as $project) : ?>
                <div class="admin-card-project">
                    <h4><?= $project->getTitre()?></h4>
                    <p><?= $project->getTechnologies()?></p>
                    <p><?= $project->getNotions()?></p>
                    <?= $project->getImage()?>
                    <p><?= $project->getUrl()?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>
