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
        </header>/
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

<!--about-->
<section id="quem-somos">

    <!--header-->
    <header class="about__header">
        <h1>Quem somos</h1>

        <!--image-->
        <div class="about__header__image">
            <img src="<?= asset("img/vt-divider.svg"); ?>" alt="Vetor Divisor">            
        </div>
        <!--end of image-->
    </header>
    <!--end of header-->

    <!--content-->
    <div class="about__content">
        <!--text-->
        <div class="about__content__text">
            <p>A João&Maria Assessoria de Eventos é uma empresa especializada em planejamento e organização de eventos sociais.</p>
            <br>
            <p>Nossa missão é superar as expectativas de nossos clientes através do nosso trabalho.</p>
            <br>
            <p>Atuamos constantemente na realização de sonhos desde 2016. Temos reconhecimento e parcerias com as melhores empresas do segmento devido a nossa integridade, profissionalismo e constante qualificação.</p>
            <br>
            <p>Organizamos casamentos, festas de debutante, bodas, aniversários e eventos corporativos, com atendimento personalizado, onde o planejamento é feito de acordo com perfil do cliente, buscando sempre a excelência para um resultado de sucesso!</p>
            <br>
            <p>A João&Maria Assessoria conta com uma equipe altamente qualificada, sempre preparados para transformar o seu sonho em realidade.</p>
            <br>
            <p>Vamos montar um projeto moderno e com a sua cara.</p>
            <br>
            <p><span>O Evento é seu, mas a organização é por nossa conta!</span></p>

            <div class="about__text__button">
                <a href="https://www.youtube.com/watch?v=gpOxHjGsz7w&t=10s" class="btn btn--outline-theme-primary" target="_blank">Saiba mais</a>
            </div>
        </div>
        <!--end of text-->

        <!--image-->
        <div class="about__content__image">
            <img src="<?= asset("img/img-about.jpg"); ?>" alt="Imagem de apresentação João&Maria">
        </div>
        <!--end of image-->
    </div>
    <!--end of content-->

</section>
<!--end of about-->

<!--history-->
<section id="history">
    <div class="container">
        <!--image-->
        <div class="history__image">
            <img src="<?= asset("img/img-historia.jpg") ?>" alt="História da João&Maria">
        </div>
        <!--end of image-->

        <!--content-->
        <div class="history__content">

            <!--header-->
            <header class="history__header">
                <h1>Nossa história</h1>
            </header>
            <!--end of header-->

            <p><span>Somos um casal que se completa na vida pessoal e profissional</span></p>

            <p>A João&Maria Assessoria de Eventos é uma empresa que foi fundada pelo apaixonado casal André e Juliana. Ela nasceu devido à percepção da necessidade de profissionais qualificados e com sensibilidade no ramo de eventos sociais. Como jovens casados e com perfil empreendedor, vimos em nossa própria experiência como noivos a importância da qualidade de serviços prestados, uma vez que, em se tratando de eventos sociais, lidamos com realização de sonhos e expectativas e isso para nós, é muito sério.</p>
            <br>
            <p>Buscamos então nos especializar e nos capacitar nessa área que é tão ampla, antes de realmente entrar no mercado. Depois de toda a preparação, quando nos sentimos qualificados e seguros de nossa proposta e objetivo dentro do mercado, no dia 29/07/2016 inauguramos nossa própria empresa de Assessoria e Cerimonial: a João&Maria Assessoria de Eventos.</p>
            <br>
            <p>O nome veio em homenagem aos nossos pais: João, nome do pai do André; e Maria, nome da mãe da Juliana. Tivemos nessa junção um nome curioso e instigante. O nome também faz referência a um casal, uma vez que acreditamos nos completar profissionalmente quanto a perfis e ideias distintas em busca do objetivo comum.</p>

            <div class="history__content__button">
                <a href="https://www.youtube.com/watch?v=ndp0IFi96Y4" class="btn btn--outline-theme-primary" target="_blank">Saiba mais</a>
            </div>

        </div>
        <!--end of content-->
    </div>
</section>
<!--end of history-->

<!--specialties-->
<section id="especialidades">
    <div class="container">
        
        <!--container-->
        <div class="specialties__container">
            
            <!--header-->
            <header class="specialties__container__header">
                <h1>Nossas especialidades</h1>
            </header>
            <!--end of container-->
            
            <div class="specialties__container__content">
                <p><span>Assessoria para todos os momentos</span></p>
                <p>Nossos serviços vão além de uma simples assessoria, cuidamos de todos os detalhes com muito amor e dedicação!</p>
            </div>
            
        </div>
        <!--end of container-->
        
        <!--grid-->
        <div class="specialties__grid">
            
            <!--card-->
            <article class="specialties__grid__card">
                <img src="<?= asset("img/vt-casamento.svg"); ?>" alt="Vetor Casamento">
                <h2>Casamentos</h2>
            </article>
            <!--end of card-->
            
            <!--card-->
            <article class="specialties__grid__card">
                <img src="<?= asset("img/vt-debutante.svg"); ?>" alt="Vetor Debutante">
                <h2>Debutante</h2>
            </article>
            <!--end of card-->
            
            <!--card-->
            <article class="specialties__grid__card">
                <img src="<?= asset("img/vt-bodas.svg"); ?>" alt="Vetor Bodas">
                <h2>Bodas</h2>
            </article>
            <!--end of card-->
            
            <!--card-->
            <article class="specialties__grid__card">
                <img src="<?= asset("img/vt-aniversario.svg"); ?>" alt="Vetor Aniversário">
                <h2>Aniversário</h2>
            </article>
            <!--end of card-->
            
            <!--card-->
            <article class="specialties__grid__card">
                <img src="<?= asset("img/vt-corporativo.svg"); ?>" alt="Vetor Corporativo">
                <h2>Corporativo</h2>
            </article>
            <!--end of card-->
            
            <!--card-->
            <article class="specialties__grid__card">
                <img src="<?= asset("img/vt-despedida.svg"); ?>" alt="Vetor Despedida de Solteiro">
                <h2>Despedida de<br>Solteiro(a)</h2>
            </article>
            <!--end of card-->
            
        </div>
        <!--end of grid-->
    </div>
</section>
<!--end of specialties-->