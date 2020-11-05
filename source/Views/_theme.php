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
        <header class="header"></header>
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
