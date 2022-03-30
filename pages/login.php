<?php
    require('../app/Form.php');
    //require ('../app/Administrateur.php');
    //global $admin;
    //$erreur = $admin->login();
    //if($admin->estConnecte()){
      //  header('Location: ./admin.php');
    //}
?>
<link rel="stylesheet" href="../assets/main.css">
<body class="body-login">
<section class="section-login">
    <h1>Se connecter</h1>
    <div class="container-form">
        <?php //if(!empty($_SESSION['nonConnecte'])) : ?>
            <h4 class="alert-login">Vous devez vous connecter pour accéder à cette page</h4>
        <?php //endif; unset($_SESSION['nonConnecte']) ?>
        <?php //if($erreur) : ?>
            <h4 class="alert-login"><!--= $erreur?>--></h4>
        <!--// endif; ?>-->
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