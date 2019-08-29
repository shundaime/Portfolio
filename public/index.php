<?php

session_start(); // Top of document

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../env.php';

use App\Database;

$db = new Database(LOCAL_DSN, LOCAL_USERNAME, LOCAL_PASSWORD);
$datas = $db->query("SELECT * FROM `real` ORDER BY id DESC");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Guillaume Charmasson : Intégrateur - développer web. Découvrez mon portfolio !">
    <meta name="keywords" content="guillaume, charmasson, intégrateur, développer, web, folio, portfolio, site, internet, loire, haute-loire, le Puy, saint-etienne">
    <link rel="shortcut icon" href="img/icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/icon/favicon.ico" type="image/x-icon">
    <!-- CSS VENDOR -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Heebo:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS PERSO -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/hover.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
    <title>Portfolio</title>
</head>
<body data-spy="scroll" data-target=".navbar">
<div id="overlay" role="complementary">
    <div class="loader" role="progressbar"></div>
</div>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavBar"
                aria-controls="myNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavBar" role="complementary">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a href="#home" class="nav-link scrollTo active">Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link scrollTo">à propos</a>
                </li>
                <li class="nav-item">
                    <a href="#skills" class="nav-link scrollTo">compétences</a>
                </li>
                <li class="nav-item">
                    <a href="#cursus" class="nav-link scrollTo">cursus</a>
                </li>
                <li class="nav-item">
                    <a href="#folio" class="nav-link scrollTo">portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link scrollTo">contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <section id="home" class="reveal">
            <h1 class="reveal-2">Guillaume Charmasson</h1>
            <p class="reveal-3">Intégrateur - Développeur Web</p>
    </section>
    <section id="about" class="container reveal">
        <h2 class="reveal-2">A propos</h2>
        <article class="reveal-3">
            <h3>Je m'appelle Guillaume Charmasson</h3>
            <p>j'ai choisi de me lancer dans le développement et l'intégration web pour en faire mon métier.</p>
            <p>Ce site a pour but de présenter mes compétences et mes réalisations.</p>
            <p>Vous pouvez également télécharger mon CV et <a href="#contact" class="scrollTo underline">me contacter ici</a>.</p>
            <ul class="reveal-4">
                <li>
                    <a href="cv" target="_blank" class="btn" title="Voir mon cv">Voir mon CV</a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/guillaume-charmasson-999259155/" target="_blank" title="Voir ma page LinkedIn">
                        <i class="fab fa-linkedin"></i>
                        <span class="hidden">Voir mon profil LinkedIn</span>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/shundaime" target="_blank" title="Voir mon profil GitHub">
                        <i class="fab fa-github"></i>
                        <span class="hidden">voir mon profil GitHub</span>
                    </a>
                </li>
            </ul>
        </article>
        <img src="img/me.jpg" alt="photo guillaume charmasson" class="rounded-circle reveal-3">
    </section>
    <section id="skills" class="container reveal">
        <h2 class="reveal-2">Compétences</h2>
        <ul class="grid">
            <li class="reveal-3">
                <p class="little-title">Intégration</p>
                <figure class="effect-sadie">
                    <img src="img/coding.png" alt="ordinateur">
                    <figcaption>
                        <ul class="icon-list">
                            <li><i class="fab fa-html5"></i></li>
                            <li><i class="fab fa-css3-alt"></i></li>
                            <li><i class="fab fa-wordpress"></i></li>
                            <li><img src="img/icon/bootstrap.png" class="bootstrap" alt="logo bootstrap"></li>
                        </ul>
                    </figcaption>
                </figure>
            </li>
            <li class="reveal-3">
                <p class="little-title">Développement</p>
                <figure class="effect-sadie">
                    <img src="img/web.png" alt="ordinateur avec code">
                    <figcaption>
                        <ul class="icon-list">
                            <li><i class="fab fa-js-square"></i></li>
                            <li id="jquery">jQuery</li>
                            <li><i class="fab fa-php"></i></li>
                            <li id="sql">My<span>SQL</span></li>
                        </ul>
                    </figcaption>
                </figure>
            </li>
        </ul>
    </section>
    <section id="cursus" class="container reveal">
        <h2 class="reveal-2">Cursus</h2>
        <ul class="timeline reveal-3">
            <li>
                <div class="timeline-badge" role="img">
                    <img src="img/icon/coding.png" alt="icône developpement web">
                </div>
                <ul class="timeline-panel">
                    <li class="timeline-heading">
                        <p class="text-muted">2018</p>
                        <h3>Développeur intégrateur en réalisation d'application web</h3>
                        <p class="text-muted">Formation Bac+2 - <a href="https://3wa.fr/la-formation-developpeur-php/" class="underline">3W Academy</a> - Villeurbanne (69) </p>
                    </li>
                    <li class="timeline-body">
                        <p>HTML 5 / CSS 3</p>
                        <p>JS / Jquery</p>
                        <p>PHP / MySQL</p>
                        <p>Bootstrap / Wordpress</p>
                    </li>
                </ul>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge" role="img">
                    <img src="img/icon/bank.png" alt="icône établissement bancaire">
                </div>
                <ul class="timeline-panel">
                    <li class="timeline-heading">
                        <p class="text-muted">2015 à 2018</p>
                        <h3>Banque et assurance</h3>
                        <p class="text-muted">Crédit Agricole / Groupama - Loire Haute-Loire (42-43)</p>
                    </li>
                    <li class="timeline-body">
                        <p>Suivi de client professionnel et particulier.</p>
                        <p>Support du réseau entreprise.</p>
                        <p>Identification des besoins clients.</p>
                    </li>
                </ul>
            </li>
            <li>
                <div class="timeline-badge" role="img">
                    <img src="img/icon/handshake.png" alt="icône poignée de main">
                </div>
                <ul class="timeline-panel">
                    <li class="timeline-heading">
                        <p class="text-muted">2014</p>
                        <h3>VRP et chef d'équipe</h3>
                        <p class="text-muted">Free Field Marketing - Saint-Etienne (42)</p>
                    </li>
                    <li class="timeline-body">
                        <p>Démarchage auprès des particuliers.</p>
                        <p>Gestion et formation d’une équipe.</p>
                    </li>
                </ul>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge" role="img">
                    <img src="img/icon/mortarboard.png" alt="icône chapeau diplômé">
                </div>
                <ul class="timeline-panel">
                    <li class="timeline-heading">
                        <p class="text-muted">2009 - 2013</p>
                        <h3>Parcours scolaire</h3>
                        <p class="text-muted">Saint-Etienne (42)</p>
                    </li>
                    <li class="timeline-body">
                        <p>Langue Etrangère appliquée</p>
                        <p>BTS Commerce International</p>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <section id="folio" class="container reveal">
        <div class='grid' role="complementary">
            <h2 class="reveal-2">PortFolio</h2>
            <?php if (count($datas) > 0):
                foreach($datas as $value):?>
                    <figure class='effect-zoe reveal-3'>
                        <img class='realLink' src='img/real/<?=$value['picture']?>' alt="photo site <?=$value['name']?>">
                        <figcaption>
                            <p class='icon-links'>
                                <a href='<?=$value['link']?>' target='_blank' class="underline">
                                    En savoir&nbsp;<i class="fas fa-plus-circle"></i>
                                </a>
                            </p>
                            <ul>
                                <li class='title-project'><?=$value['description']?></li>
                                <li><?=$value['details']?></li>
                            </ul>
                        </figcaption>
                    </figure>
                <?php endforeach;?>
            <?php endif; ?>
        </div>
    </section>
    <section id="contact" class="container reveal">
        <h2 class="reveal-2">Contact</h2>
        <article class="reveal-3">
            <h3 class="little-title">écrivez-moi</h3>
            <?php if (isset($_SESSION["message_sent"])) :?>
                <?php if (true === $_SESSION["message_sent"]): ?>
                    <?= "<p class='alert alert-success response' role='alertdialog'>Votre message a été envoyé</p>";
                    unset($_SESSION["message_sent"]); ?>
                <?php else: ?>
                    <?= "<p class='alert alert-danger response' role='alertdialog'>Merci de renseigner tous les champs !</p>";
                    unset($_SESSION["message_sent"]); ?>
                <?php endif ?>
            <?php endif ?>
            <form class="mail" method="POST" action="form.php">
                <ul class="form-row">
                    <li class="form-group col-md-12">
                        <label for="name">Nom / prénom</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nom / prénom">
                    </li>
                    <li class="form-group col-md-12">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                    </li>
                    <li class="form-group col-md-12">
                        <label for="comments">Votre message</label>
                        <textarea rows='9' class="form-control" id="comments" name="content" placeholder="Votre message"></textarea>
                    </li>
                    <li class="g-recaptcha" data-sitekey="<?= SITE_KEY ?>"></li>
                    <?php if (isset($_SESSION["valid_captcha"])): ?>
                        <?php if (true === $_SESSION["valid_captcha"]): ?>
                        <?= "<p class='alert alert-success captcha' role='alertdialog'>Captcha valide</p>";
                        unset($_SESSION["valid_captcha"]) ?>
                    <?php else: ?>
                        <?= "<p class='alert alert-danger captcha' role='alertdialog'>Captcha non valide !</p>";
                        unset($_SESSION["valid_captcha"]) ?>
                        <?php endif ?>
                    <?php endif ?>
                    <li>
                        <input id="response" type="submit" name="send" class="btn" value="Envoyer">
                    </li>
                </ul>
            </form>
        </article>
        <aside class="reveal-3">
            <h3 class="little-title">Mes coordonnées :</h3>
            <p><a href="https://goo.gl/maps/sgwcaAnuobD2" target="_blank" class="underline" title="Voir sur Google maps"><i class="fas fa-map-marker"></i>&nbsp;43590 Beauzac</a></p>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44939.657412103435!2d4.060218165487999!3d45.253280872524385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f5c042a047d4d1%3A0x1c093cb3290e6330!2s43590%20Beauzac!5e0!3m2!1sfr!2sfr!4v1566982081563!5m2!1sfr!2sfr" width="300" height="200" style="border:0;" allowfullscreen></iframe></p>
            <p><a href="tel:06.77.90.78.35" class="underline" title="Appeler"><i class="fas fa-phone"></i>&nbsp;06 77 90 78 35</a></p>
            <p><a href="mailto:<?= FINAL_MAIL ?>" class="underline" title="Envoyer un mail"><i class="fas fa-envelope"></i>&nbsp;<?= FINAL_MAIL ?></a></p>
        </aside>
    </section>
    <footer class="reveal">
        <ul class="reveal-2">
            <li><a href="https://www.linkedin.com/in/guillaume-charmasson-999259155/" target="_blank" title="Voir mon profil LinkedIn"><i class="fab fa-linkedin"></i><span class="hidden">Voir mon profil LinkedIn</span></a></li>
            <li><a href="https://github.com/shundaime" target="_blank" title="Voir mon profil GitHub"><i class="fab fa-github"></i><span class="hidden">voir mon profil GitHub</span></a></li>
            <li><a href="mailto:<?= FINAL_MAIL ?>" title="Envoyez moi un mail"><i class="fas fa-envelope-square"></i><span class="hidden">Envoyez moi un mail</span></a></li>
        </ul>
        <button type="button" value="Haut de page" class="scrollup" aria-hidden="true"><i class="fas fa-chevron-up"></i></button>
        <small class="reveal-3">
            <i class="far fa-copyright"></i>2019 Tous droits réservés Guillaume Charmasson -<a href="#legal" class="underline modal-opener" id="legal" data-id="modal-legal">Mentions légales</a>
        </small>
        <?php include 'pages/legal.php' ?>
    </footer>
</main>
<script type="text/javascript" src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver%2CElement.prototype.classList%2CArray.prototype.forEach%2CIntersectionObserverEntry%2CNodeList.prototype.forEach"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
