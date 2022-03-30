<?php
require ('../inc.php');
require ('../app/Administrateur.php');
    global $admin;
    $erreur = $admin->login();
    //var_dump($_SESSION);
    //unset($_SESSION['connecte']);
?>
<link rel="stylesheet" href="../assets/main.css">
<body class="body-login">
<section class="section-login">
    <h1>Se connecter</h1>
    <div class="container-form">
        <?php if(empty($_SESSION['connecte'])) : ?>
            <h4 class="alert-login">Vous devez vous connecter pour accéder à cette page</h4>
        <?php endif; ?>
        <?php if ($erreur) : ?>
            <h4 class="alert-login"><?= $erreur?></h4>
        <?php endif; ?>
        <form name="" method="POST">
            <?php
            $form2 = new App\Form($_SESSION['inputs'] ?? []);
            echo $form2->input("username","text","pseudo");
            echo $form2->input("password",  "password", "votre mot de passe");
            echo $form2->submit("submit", "Se connecter", "btn-submit");
            ?>
        </form>
    </div>
</section>
</body>