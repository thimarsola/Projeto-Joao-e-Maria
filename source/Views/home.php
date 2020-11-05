<?php $v->layout("_theme"); ?>

<?= $v->start("stylesheet"); ?>
<link rel="stylesheet" href="<?= asset("css/style.min.css"); ?>" />
<?= $v->end; ?>

<!-- hero -->
<section id="home">
    <div class="container">
        <!-- header -->
        <header class="home__header">
            <h1>Somos uma empresa de Assessoria & Organização de eventos sociais!</h1>
        </header>
        <!-- end of header -->

        <!-- content -->
        <div class="home__content">
            <p>Ajudamos os nossos clientes a construir e realizar os seus sonhos!</p>
            <img src="<?= asset("img/vt-divisor.svg"); ?>" alt="Vetor Divisor">
            <a href="#quem-somos" class="btn btn--outline-theme-white">Saiba  mais</a>
        </div>
        <!-- end ofc content -->

        <!-- scroll down -->
        <div class="home__scroll">
            <a href="#quem-somos">
                <span></span>
            </a>
        </div>
        <!-- end of scroll down -->
    </div>
</section>
<!-- end of home -->
