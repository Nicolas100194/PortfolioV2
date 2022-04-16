<?php
    require ('../inc.php');
    require ('../app/Administrateur.php');
    global $admin;
    $admin->verifLogged();
    require('../app/Projet.php');
    //$db = new App\DataBase('portfolio')
?>
<link rel="stylesheet" href="../assets/main.css">

<body class="body-admin">
    <header class="header-admin">
        <h1>Administration portfolio</h1>
        <?php if ($admin->estConnecte()) : ?>
            <a href="../pages/logout.php">Se déconnecter</a>
        <?php endif;?>
    </header>
    <section class="section-admin">
        <h3>Ajouter un projet</h3>
        <div class="container-form">
            <form name="add-projet" method="POST" enctype="multipart/form-data">
                <?php
                $form3 = new \App\Form($_SESSION['inputs'] ?? []);
                    echo $form3->select("type-projet", "type-projet", ['stage', 'cnam', 'perso']);
                    echo $form3->input("titre", "text", "titre du projet");
                    echo $form3->input("technologies", "text", "technologies du projet");
                    echo $form3->input("description", "text", "description du projet");
                    echo $form3->input("notions", "text", "notions du projet");
                    echo $form3->input("url", "url", "url du projet");
                ?>
                <div class="container-input-file">
                    <button class="btn-upload-file">Choisir l'image</button>
                    <?php echo $form3->input("urlImage", "file", "image du projet"); ?>
                </div>
                <?php
                echo $form3->submit("submit", "Appliquer", "btn-submit");
                $projectObj = new \App\Projet();
                $erreur = $projectObj->addProjet();
                ?>
                <?php if($erreur) : ?>
                    <h4 class="alert-message"><?= $erreur ?></h4>
                <?php endif; ?>
            </form>
        </div>
        <h3>Liste des projets</h3>
        <div class="admin-container-projects">
            <?php $projectObj->getAllProjetsAdmin(); ?>
        </div>
    </section>
</body>
