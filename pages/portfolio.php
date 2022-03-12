<?php
    require'./app/Autoloader.php';
    App\Autoloader::register();
    $db = new App\DataBase('portfolio');
    $datas = $db->query('SELECT * FROM projets');
?>
<main>
    <div class="container-sections">
        <section class="header-section">
            <h1>Développeur web</h1>
            <h3>delacroix nicolas</h3>
            <p>
                pden-Sydney College en Virginie, a recherché l'un des mots latins les plus obscurs, conse
                ctetur, à partir d'un passage du Lorem Ipsum, et en parcoura
                3nt les citations du mot dans la littérature
                classique, a découvert la source indubitable. Lorem Ipsum provient des sections 1.10.32
            </p>
            <div class="arrow"></div>
        </section>
        <section class="parcours-section">
            <!--text-->
            <div class="container-txt">
                <h2>parcours</h2>
                <p>
                    pden-Sydney College en Virginie, a recherché l'un des mots latins les plus obscurs, conse ctetur, à partir d'un passage du Lorem Ipsum, et en parcoura3nt les citations du mot dans la littérature
                    classique, a découvert la source indubitable. Lorem Ipsum provient des sections 1.10.32
                </p>
            </div>
            <!--timeline-->
            <div class="container-timeline">
                <div class="timeline-bloc">
                    <div class="timeline-img">
                    </div>
                    <div class="timeline-text">
                        <h3>experience</h3>
                        <p>pden-Sydney College en Virginie, a recherché l'un des mots latins les plus obscurs, conse
                            ctetur, à partir d'un passage du Lorem Ipsum, et en parcoura
                            3nt les citations du mot dans la littérature
                            classique, a découvert la source indubitable. Lorem Ipsum provient des sections 1.10.32
                        </p>
                    </div>
                </div>
                <div class="timeline-bloc">
                    <div class="timeline-img">
                    </div>
                    <div class="timeline-text">
                        <h3>experience</h3>
                        <p>pden-Sydney College en Virginie, a recherché l'un des mots latins les plus obscurs, conse
                            ctetur, à partir d'un passage du Lorem Ipsum, et en parcoura
                            3nt les citations du mot dans la littérature
                            classique, a découvert la source indubitable. Lorem Ipsum provient des sections 1.10.32
                        </p>
                    </div>
                </div>
                <div class="timeline-bloc">
                    <div class="timeline-img">
                    </div>
                    <div class="timeline-text">
                        <h3>experience</h3>
                        <p>pden-Sydney College en Virginie, a recherché l'un des mots latins les plus obscurs, conse
                            ctetur, à partir d'un passage du Lorem Ipsum, et en parcoura
                            3nt les citations du mot dans la littérature
                            classique, a découvert la source indubitable. Lorem Ipsum provient des sections 1.10.32
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

