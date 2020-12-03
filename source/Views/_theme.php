<!DOCTYPE html>
<html lang="<?= site("lang"); ?>">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <?= $head; ?>

        <!-- AUTHOR -->
        <meta name="author" content="<?= DEV["name"] . " | " . DEV["url"]; ?>" />

        <!-- REGION -->
        <meta name="geo.region" content="<?= REGION["region"]; ?>" />
        <meta name="geo.placename" content="<?= REGION["placename"]; ?>" />
        <meta name="geo.position" content="<?= REGION["position"]; ?>" />
        <meta name="ICBM" content="<?= REGION["icbm"]; ?>" />

        <!-- FAVICON -->
        <link rel="shortcut icon" href="<?= asset("/img/favicon.ico"); ?>" />

        <!--CSS-->
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Raleway:wght@300;600&display=swap" rel="stylesheet">
        <?= $v->section("stylesheet"); ?>
    </head>
    <body id="home">

        <!--header-->
        <!--header-->
        <header id="header">
            <div class="header__navbar">
                <?php if ($v->section("navbar")): ?>
                    <div class="container">
                        <!-- brand -->
                        <a href="<?= url(); ?>" title="Emplacar's">
                            <img src="<?= asset("img/logo-header.png"); ?>" loading="lazy" alt="Logo - João&Maria Assessoria e Organização de Eventos">
                        </a>

                        <?= $v->section("navbar"); ?>
                    </div>

                <?php else: ?>
                    <div class="container">
                        <!-- brand -->
                        <a href="<?= url(); ?>" title="Emplacar's">
                            <img src="<?= asset("img/logo-header.png"); ?>" loading="lazy" alt="Logo - João&Maria Assessoria e Organização de Eventos">
                        </a>

                        <!-- toggle -->
                        <div class="header__navbar__section">
                            <div class="header__navbar__section__toggle">
                                <div class="header__navbar__section__toggle__bar"></div>
                                <div class="header__navbar__section__toggle__bar"></div>
                                <div class="header__navbar__section__toggle__bar"></div>
                            </div>
                            <!-- nav -->
                            <nav class="header__navbar__section__nav">
                                <ul>
                                    <li>
                                        <a href="#home">Home</a>
                                    </li>
                                    <li>
                                        <a href="#quem-somos">Quem somos</a>
                                    </li>
                                    <li>
                                        <a href="#especialidades">Especialidades</a>
                                    </li>
                                    <li>
                                        <a href="#servicos">Serviços</a>
                                    </li>
                                    <li>
                                        <a href="#galeria">Galeria</a>
                                    <li>
                                        <a href="#contato">Contato</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </header>
        <!--end of header-->

        <!--main-->
        <main class="main">
            <?= $v->section("content"); ?>
        </main>
        <!--end of main-->

        <!--footer-->
        <footer class="footer">

        </footer>
        <!--end of footer-->

        <!-- SCRIPTS -->
        <?= $v->section("scripts"); ?>
    </body>

</html>
