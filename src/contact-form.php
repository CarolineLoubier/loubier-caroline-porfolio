<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Caroline Loubier</title>

        <link rel="stylesheet" href="styles/main.css" />

        <script src="scripts/main.js" defer></script>
    </head>
    
    <body>
        <div class="site-container">
            <header class="header" data-component="Header">
                <div class="wrapper">
                    <div class="header__brand">
                        <a href="index.html"
                            ><img
                                src="../assets/images/logo.svg"
                                alt="Logo de Caroline Loubier"
                        /></a>
                    </div>
                    <nav class="nav nav--primary">
                        <ul>
                            <li>
                                <a href="#" class="nav__item">Introduction</a>
                            </li>
                            <li>
                                <a href="#projets" class="nav__item">Projets</a>
                            </li>
                            <li>
                                <a href="#a-propos" class="nav__item"
                                    >A propos</a
                                >
                            </li>
                            <li>
                                <a href="#contact" class="nav__item">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <button class="header__toggle js-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </header>

            <section class="hero" id="hero">
                <div class="hero__content wrapper">
                    <h1 class="hero__title">
                        <span>Caroline</span><br />Loubier
                    </h1>
                    <h2>Programmation | Développement web</h2>
                    <div class="hero__scroll-down">
                        <p>Découvrir mes projets</p>
                        <button>
                            <a href="#projets">
                                <img
                                    src="assets/icons/scroll-down.svg"
                                    alt="Découvrir mes projets"
                                    class="scroll-down-btn"
                            /></a>
                        </button>
                    </div>
                </div>
            </section>

            <section class="projets" id="projets">
                <div class="projets__content wrapper">
                    <h1 class="projets__title title--section">
                        <span>Mes</span><br />projets
                    </h1>
                    <div class="swiper" data-component="Carousel">
                        <div class="swiper-wrapper grow">
                            <div class="swiper-slide">
                                <a href="le-village.html">
                                    <div class="projet__container">
                                        <h2 class="titre__projet">
                                            Le Village
                                        </h2>
                                        <h3 class="type__projet">Jeu 3D</h3>
                                    </div>

                                    <div class="unskew">
                                        <p class="see-more">+</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="la-foret-aux-tresors.html">
                                    <div class="projet__container">
                                        <h2 class="titre__projet">
                                            La foret aux tresors
                                        </h2>
                                        <h3 class="type__projet">Jeu 2D</h3>
                                    </div>

                                    <div class="unskew">
                                        <p class="see-more">+</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="piano-3d.html">
                                    <div class="projet__container">
                                        <h2 class="titre__projet">Piano 3D</h2>
                                        <h3 class="type__projet">
                                            Modelisation 3D
                                        </h3>
                                    </div>

                                    <div class="unskew">
                                        <p class="see-more">+</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="musicon.html">
                                    <div class="projet__container">
                                        <h2 class="titre__projet">Musicon</h2>
                                        <h3 class="type__projet">
                                            Développement web
                                        </h3>
                                    </div>

                                    <div class="unskew">
                                        <p class="see-more">+</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="timflix.html">
                                    <div class="projet__container">
                                        <h2 class="titre__projet">TimFlix</h2>
                                        <h3 class="type__projet">
                                            Développement web
                                        </h3>
                                    </div>

                                    <div class="unskew">
                                        <p class="see-more">+</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>

            <section class="a-propos" id="a-propos">
                <div class="a-propos__content wrapper">
                    <h1 class="a-propos__title title--section">
                        <span>A</span><br />propos
                    </h1>
                    <div class="a-propos__description">
                        <div class="a-propos__photo">
                            <img
                                src="assets/images/photo3.png"
                                alt="Caroline Loubier"
                                class="photo"
                            />
                            <div class="losange"></div>
                        </div>
                        <p class="a-propos__texte">
                            <span class="text--bold">Hey!</span> Moi c’est
                            <span class="text--bold">Caroline</span>, je suis
                            finissante en multimédia au CÉGEP Édouard-Montpetit.
                            J'adore résoudre des problèmes, c’est pourquoi je me
                            cherche présentement un stage en
                            <span class="text--bold">programmation</span> ou en
                            <span class="text--bold">développement web</span>,
                            mes deux spécialités! Ma
                            <span class="text--bold">soif d’apprendre</span> me
                            pousse toujours à persévérer, même dans les impasses
                            parfois rencontrées en développement.
                        </p>
                    </div>

                    <div class="a-propos__qualites">
                        <h2 class="a-propos__title title--section">
                            <span>Mes</span><br />qualites
                        </h2>
                        <div class="qualite">
                            <div class="numero">
                                01
                                <h3>Assidue</h3>
                            </div>

                            <p>
                                Parce que les échéanciers sont là pour une
                                raison!
                            </p>
                        </div>
                        <div class="qualite">
                            <div class="numero">
                                02
                                <h3>Curieuse</h3>
                            </div>

                            <p>
                                Parce que je cherche toujours à en apprendre
                                plus!
                            </p>
                        </div>

                        <div class="qualite">
                            <div class="numero">
                                03
                                <h3>Organisee</h3>
                            </div>

                            <p>Parce que j’aime que tout soit en ordre!</p>
                        </div>
                    </div>

                    <div class="a-propos__competences">
                        <h2 class="a-propos__title title--section">
                            <span>Mes</span><br />competences
                        </h2>

                        <div
                            class="swiper"
                            data-component="Carousel"
                            data-carousel="petit"
                        >
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="competence--container">
                                            <img
                                                src="assets/images/css3.svg"
                                                alt="CSS3"
                                            />
                                            <p>CSS</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="competence--container">
                                            <img
                                                src="assets/images/html5.svg"
                                                alt="HTML"
                                            />
                                            <p>HTML</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="competence--container">
                                            <img
                                                src="assets/images/javascript.svg"
                                                alt="Javascript"
                                            />
                                            <p>Javascript</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="competence--container">
                                            <img
                                                src="assets/images/blender.svg"
                                                alt="Blender"
                                            />
                                            <p>Blender</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="competence--container">
                                            <img
                                                src="assets/images/unity.svg"
                                                alt="Unity"
                                            />
                                            <p>Unity</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <div class="competence--container">
                                            <img
                                                src="assets/images/php.svg"
                                                alt="PHP"
                                            />
                                            <p>PHP</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact" id="contact">
                <div class="contact__container wrapper">
                    <h2 class="contact__title title--section">
                        <span>Me</span><br />contacter
                    </h2>
                    <div class="contact__content">
                        <div class="contact__info">
                            <a
                                href="mailto:info@carolineloubier.ca"
                                class="info__container"
                            >
                                <div class="info">
                                    <div class="icone__container">
                                        <img
                                            src="assets/images/email.svg"
                                            alt="Envoyer un courriel"
                                        />
                                    </div>
                                    <p>info@carolineloubier.ca</p>
                                </div>
                            </a>

                            <a href="tel:14384952135" class="info__container">
                                <div class="info">
                                    <div class="icone__container">
                                        <img
                                            src="assets/images/telephone.svg"
                                            alt="Téléphoner"
                                        />
                                    </div>
                                    <p>438-495-2135</p>
                                </div>
                            </a>
                            <a
                                href="https://www.linkedin.com/in/caroline-loubier-96a598221/"
                                class="info__container"
                            >
                                <div class="info">
                                    <div class="icone__container">
                                        <img
                                            src="assets/images/linkedin.svg"
                                            alt="LinkedIn"
                                        />
                                    </div>
                                    <p>Caroline Loubier</p>
                                </div>
                            </a>

                            <a
                                href="https://github.com/CarolineLoubier"
                                class="info__container"
                            >
                                <div class="info">
                                    <div class="icone__container">
                                        <img
                                            src="assets/images/github.svg"
                                            alt="GitHub"
                                        />
                                    </div>
                                    <p>Caroline Loubier</p>
                                </div>
                            </a>
                            <button
                                href="assets/pdf/caroline_loubier_cv.pdf"
                                download="Caroline Loubier CV"
                                class="info__container cv btn"
                            >
                                Télécharger mon CV
                            </button>
                        </div>
                        <?php

                            $message_sent = false;

                                if(isset($_POST['submit']) && $_POST['email'] != '' && $_POST['name'] != '' && $_POST['message'] != '') {

                                    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                                        $name = $_POST['name'];
                                        $subject = "À propos de votre portfolio";
                                        $mailFrom = $_POST['email'];
                                        $message = $_POST['message'];

                                        $mailTo = "info@carolineloubier.ca";
                                        $headers = "From: ".$mailFrom;
                                        $txt = "Vous avez reçu un courriel de ".$name.".\n\n".$message;


                                        mail($mailTo, $subject, $txt, $headers);

                                        $message_sent = true;
                                    }

                                    
                                }
                        ?>

                        <?php 
                        if($message_sent):
                        ?>
                        <h3>Merci!</h3>
                        <?php 
                        else:
                        ?>
                        <div class="contact__form">
                            <form
                                action="contact-form.php#contact"
                                class="form"
                                autocomplete="off"
                                method="post"
                                
                            >
                                <fieldset class="form__grid">
                                    <div class="input">
                                        <label
                                            class="input__label"
                                            for="firstname"
                                            >Nom</label
                                        >
                                        <input
                                            class="input__element"
                                            type="text"
                                            name="name"
                                            id="name"
                                            placeholder="John Smith"
                                            required
                                        />
                                    </div>

                                    <div class="input">
                                        <label class="input__label" for="email"
                                            >Courriel</label
                                        >
                                        <input
                                            class="input__element"
                                            type="email"
                                            name="email"
                                            id="email"
                                            placeholder="exemple@courriel.com"
                                            required
                                        />
                                    </div>

                                    <div class="input textarea">
                                        <label
                                            class="input__label"
                                            for="message"
                                            >Message</label
                                        >
                                        <textarea
                                            class="input__element"
                                            name="message"
                                            id="message"
                                            placeholder="Écrivez votre message ici..."
                                            required
                                        ></textarea>
                                    </div>
                                </fieldset>
                                <div class="form__footer">
                                    <button
                                        class="btn"
                                        type="submit"
                                        name="submit"
                                    >
                                        Envoyer
                                    </button>
                                </div>
                            </form>
                        </div>
                        <?php 
                        endif;
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
