<?php $v->layout("_theme"); ?>

<?= $v->start("stylesheet"); ?>
<link rel="stylesheet" href="<?= asset("/css/error.min.css"); ?>" />
<?= $v->end; ?>

<?= $v->start("navbar"); ?>
    <a href="<?= url(); ?>" class="btn btn--color-theme-primary">Voltar</a>
<?= $v->end; ?>

<!--error-->
<section class="error">

    <!--header-->
    <header class="error__header">
        <h1><?= "Erro " . $error; ?></h1>
    </header>
    <!--end of header-->
    
    <!--content-->
    <div class="error__content">
        <p>Opps...</p>
        <p>A página que você está procurando está com problema ou ela não existe!</p>
        <a href="<?= url(); ?>" class="btn btn--outline-color-theme-primary"></a>
    </div>
    <!--end of content-->

</section>
<!--end of error-->




