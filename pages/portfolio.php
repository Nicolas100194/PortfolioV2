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
                <!--<script type="module" >
                    import * as THREE from './node_modules/three/build/three.module.js';
                    const scene = new THREE.Scene();
                    const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

                    const renderer = new THREE.WebGLRenderer();
                    renderer.setSize( window.innerWidth, window.innerHeight );
                    document.body.appendChild( renderer.domElement );

                    const geometry = new THREE.BoxGeometry();
                    const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
                    const cube = new THREE.Mesh( geometry, material );
                    scene.add( cube );

                    camera.position.z = 5;

                    function animate() {
                        requestAnimationFrame( animate );

                        cube.rotation.x += 0.01;
                        cube.rotation.y += 0.01;

                        renderer.render( scene, camera );
                    };

                    animate();
                </script>-->
            </div>
        </section>
        <section class="skills-section">
            <div class="skills-languages">
                <h2>compétences techniques</h2>
                <h3>langages de programmation</h3>
            </div>
            <div class="container-skills">
                <div class="skills">
                    <h4>technologies frontend</h4>
                    <div class="container-languages">
                        <div class="content-languages">
                            <div class="item">
                                <span class="language">html</span>
                                <p class="level">Niveau avancé</p>
                            </div>
                            <div class="item">
                                <span class="language">html</span>
                                <p class="level">Niveau avancé</p>
                            </div>
                            <div class="item">
                                <span class="language">html</span>
                                <p class="level">Niveau avancé</p>
                            </div>
                        </div>
                        <div class="content-languages">
                            <div class="item">
                                <span class="language">html</span>
                                <p class="level">Niveau avancé</p>
                            </div>
                            <div class="item">
                                <span class="language">html</span>
                                <p class="level">Niveau avancé</p>
                            </div>
                            <div class="item">
                                <span class="language">html</span>
                                <p class="level">Niveau avancé</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skills">
                    <h4>technologies backend</h4>
                    <div class="container-languages">
                        <div class="content-languages">
                            <div class="item">
                                <span class="language">html</span>
                                <p class="level">Niveau avancé</p>
                            </div>
                            <div class="item">
                                <span class="language">html</span>
                                <p class="level">Niveau avancé</p>
                            </div>
                            <div class="item">
                                <span class="language">html</span>
                                <p class="level">Niveau avancé</p>
                            </div>
                        </div>
                        <div class="content-languages">
                            <div class="item">
                                <span class="language">html</span>
                                <p class="level">Niveau avancé</p>
                            </div>
                            <div class="item">
                                <span class="language">html</span>
                                <p class="level">Niveau avancé</p>
                            </div>
                            <div class="item">
                                <span class="language">html</span>
                                <p class="level">Niveau avancé</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            <div class="skills-competences">
                <h3>compétences</h3>
            </div>
            <div class="container-competences">
                <div class="competence">
                    <div class="img-competence"></div>
                    <div class="txt-competence">
                        <span class="title-competence">animation pages</span>
                        <p class="description-competence">animation des pages en Javascript, animations poussées avec Three.js</p>
                    </div>
                </div>
                <div class="competence">
                    <div class="img-competence"></div>
                    <div class="txt-competence">
                        <span class="title-competence">animation pages</span>
                        <p class="description-competence">animation des pages en Javascript, animations poussées avec Three.js</p>
                    </div>
                </div>
                <div class="competence">
                    <div class="img-competence"></div>
                    <div class="txt-competence">
                        <span class="title-competence">animation pages</span>
                        <p class="description-competence">animation des pages en Javascript, animations poussées avec Three.js</p>
                    </div>
                </div>
            </div>
            <div class="container-competences">
                <div class="competence">
                    <div class="img-competence"></div>
                    <div class="txt-competence">
                        <span class="title-competence">animation pages</span>
                        <p class="description-competence">animation des pages en Javascript, animations poussées avec Three.js</p>
                    </div>
                </div>
                <div class="competence">
                    <div class="img-competence"></div>
                    <div class="txt-competence">
                        <span class="title-competence">animation pages</span>
                        <p class="description-competence">animation des pages en Javascript, animations poussées avec Three.js</p>
                    </div>
                </div>
                <div class="competence">
                    <div class="img-competence"></div>
                    <div class="txt-competence">
                        <span class="title-competence">animation pages</span>
                        <p class="description-competence">animation des pages en Javascript, animations poussées avec Three.js</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-realisations">
            <h2>Réalisations</h2>
            <div class="container-menu-projets">
                <a class="item-menu-projet" href="#">Stage</a>
                <a class="item-menu-projet" href="#">Personnel</a>
                <a class="item-menu-projet" href="#">cursus CNAM</a>
            </div>
            <div class="container-projets">
                <div class="projet"><a class="link-projet" href="#"></a></div>
                <div class="projet"><a class="link-projet" href="#"></a></div>
                <div class="projet"><a class="link-projet" href="#"></a></div>
                <div class="projet"><a class="link-projet" href="#"></a></div>
                <div class="projet"><a class="link-projet" href="#"></a></div>
                <div class="projet"><a class="link-projet" href="#"></a></div>
            </div>
        </section>
    </div>
</main>

