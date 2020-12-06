<!DOCTYPE html>
<html lang="<?= site("lang"); ?>" itemscope itemtype="https://schema.org/WebSite">

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
        <link rel="apple-touch-icon" sizes="57x57" href="<?= asset("img/favicon/apple-icon-57x57.png"); ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= asset("img/favicon/apple-icon-60x60.png"); ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= asset("img/favicon/apple-icon-72x72.png"); ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?= asset("img/favicon/apple-icon-76x76.png"); ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= asset("img/favicon/favicon/apple-icon-114x114.png"); ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= asset("img/favicon/apple-icon-120x120.png"); ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= asset("img/favicon/apple-icon-144x144.png"); ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= asset("img/favicon/apple-icon-152x152.png"); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= asset("img/favicon/apple-icon-180x180.png"); ?>">
        <link rel="icon" type="image/png" sizes="192x192" href="<?= asset("img/favicon/android-icon-192x192.png"); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= asset("img/favicon/favicon-32x32.png"); ?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?= asset("img/favicon/favicon-96x96.png"); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= asset("img/favicon/favicon-16x16.png"); ?>">
        <link rel="manifest" href="<?= asset("img/favicon/manifest.json"); ?>">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?= asset("img/favicon/ms-icon-144x144.png"); ?>">
        <meta name="theme-color" content="#ffffff">

        <!--CSS-->
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Raleway:wght@300;600&display=swap" rel="stylesheet">
        <?= $v->section("stylesheet"); ?>
    </head>
    <body id="home">
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
                                <h1 class="d-none">Menu de navegação</h1>
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
            <!--content-->
            <div class="footer__content">
                <div class="container">
                    <div class="footer__content__row">
                        
                        <div class="footer__content__row__image">
                        <img src="<?= asset("img/logo-footer.jpg"); ?>" loading="lazy" alt="Logo - João&Maria Assessoria">
                        </div>

                        <div class="footer__content__row__columns">

                            <!--address-->
                            <div class="footer__content__row__columns__card">
                                <!--header-->
                                <div class="footer__content__row__columns__card__header">
                                    <p>Endereço</p>
                                    <hr>
                                </div>
                                <!--end of header-->

                                <!--body-->
                                <div class="footer__content__row__columns__card__body">
                                    <address>
                                        <a href="https://goo.gl/maps/v3uzdX2twwdYwsuw7" target="_blank">Avenida Itamarati, 1130, Sala 2, Vila Curuçá, Santo André- SP</a>
                                    </address>
                                </div>
                                <!--end of body-->
                            </div>
                            <!--end of address-->

                            <!--business hours-->
                            <div class="footer__content__row__columns__card">
                                <!--header-->
                                <div class="footer__content__row__columns__card__header">
                                    <p>Funcionamento</p>
                                    <hr>
                                </div>
                                <!--end of header-->

                                <!--body-->
                                <div class="footer__content__row__columns__card__body">
                                    <p>Segunda à sexta 9h às 18:00</p>
                                </div>
                                <!--end of body-->
                            </div>
                            <!--end of business hours-->

                            <!--phone-->
                            <div class="footer__content__row__columns__card">
                                <!--header-->
                                <div class="footer__content__row__columns__card__header">
                                    <p>Telefones</p>
                                    <hr>
                                </div>
                                <!--end of header-->

                                <!--body-->
                                <div class="footer__content__row__columns__card__body">
                                    <address>
                                        <a href="tel:11976994744">(11) 97699-4744</a>
                                    </address>
                                </div>
                                <!--end of body-->
                            </div>
                            <!--end of phone-->

                            <!--social media-->
                            <div class="footer__content__row__columns__card">
                                <!--header-->
                                <div class="footer__content__row__columns__card__header">
                                    <p>Redes Sociais</p>
                                    <hr>
                                </div>
                                <!--end of header-->

                                <!--body-->
                                <div class="footer__content__row__columns__card__body">

                                    <!--facebook-->
                                    <address>
                                        <a href="https://www.facebook.com/joaoemariaassessoria/" target="_blank">
                                            <img src="<?= asset("img/vt-facebook.svg"); ?>" loading="lazy" alt="Facebook - João&Maria Assessoria">
                                        </a>
                                    </address>
                                    <!--end of facebook-->

                                    <!--instagram-->
                                    <address>
                                        <a href="https://www.instagram.com/joaoemariaassessoria/" target="_blank">
                                            <img src="<?= asset("img/vt-instagram.svg"); ?>" loading="lazy" alt="Instagram - João&Maria Assessoria">
                                        </a>
                                    </address>
                                    <!--end of instagram-->

                                    <!--youtube-->
                                    <address>
                                        <a href="https://www.youtube.com/channel/UCP0WULy8G6iF3svO4SgSctw" target="_blank">
                                            <img src="<?= asset("img/vt-youtube.svg"); ?>" loading="lazy" alt="Youtube - João&Maria Assessoria">
                                        </a>
                                    </address>
                                    <!--end of youtube-->

                                </div>
                                <!--end of body-->
                            </div>
                            <!--end of social media-->

                        </div>
                    </div>
                </div>
            </div>
            <!--end of content-->

            <!--copyright-->
            <div class="footer__copyright">
                <p>&COPY; Todos os direito reservados - <?= date('Y'); ?></p>
            </div>
            <!--end of copyright-->

            <!--developer-->
            <div class="footer__developer">
                <div class="container">
                    <p>Desenvolvido por <a href="<?= DEV["url"]; ?>" target="_blank" title="Especialistas em Marketig Digital"><strong><?= DEV["name"]; ?></strong></a></p>

                    <a href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2F<?= SITE["domain"]; ?>" target="_blank" title="Tecnologia W3C"><img src="<?= asset("img/vt-validator.svg"); ?>" loading="lazy" alt="Tecnologia W3C">W3C Validator</a>
                </div>
            </div>
            <!--end of developer-->
        </footer>
        <!--end of footer-->

        <!-- SCRIPTS -->
        <?= $v->section("scripts"); ?>
    </body>

</html>
