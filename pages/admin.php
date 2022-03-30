<?php
    //require ('../inc.php');
    require ('../app/Administrateur.php');
    global $admin;
    $admin->verifLogged();
?>
<link rel="stylesheet" href="../assets/main.css">

<body class="body-admin">
    <section class="section-admin">
        <h1>Administration portfolio</h1>
        <?php if ($admin->estConnecte()) : ?>
            <a href="../pages/logout.php">Se déconnecter</a>
        <?php endif;?>
    </section>
</body>
