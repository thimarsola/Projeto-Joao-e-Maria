<?php $v->layout("_theme"); ?>

<?= $v->start("stylesheet"); ?>
<link rel="stylesheet" href="<?= asset("css/style.min.css"); ?>" />
<?= $v->end; ?>

<h1 class="d-none">João&Maria Assessoria e Organização de eventos sociais</h1>

<!-- hero -->
<section id="hero">
    <div class="container">
        <!-- header -->
        <header class="hero__header">
            <h1>Somos uma empresa de Assessoria & Organização de eventos sociais!</h1>
        </header>/
        <!-- end of header -->

        <!-- content -->
        <div class="hero__content">
            <p>Ajudamos os nossos clientes a construir e realizar os seus sonhos!</p>
            <img src="<?= asset("img/vt-divisor.svg"); ?>" loading="lazy" alt="Vetor Divisor">
            <a href="#quem-somos" class="btn btn--outline-theme-white">Saiba  mais</a>
        </div>
        <!-- end ofc content -->

        <!-- scroll down -->
        <div class="hero__scroll">
            <a href="#quem-somos">
                <span></span>
            </a>
        </div>
        <!-- end of scroll down -->
    </div>
</section>
<!-- end of hero -->

<!--about-->
<section id="quem-somos">

    <!--header-->
    <header class="about__header">
        <h1>Quem somos</h1>

        <!--image-->
        <div class="about__header__image">
            <img src="<?= asset("img/vt-divider.svg"); ?>" loading="lazy" alt="Vetor Divisor">            
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
            <img src="<?= asset("img/img-about.jpg"); ?>" loading="lazy" alt="Imagem de apresentação João&Maria">
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
            <img src="<?= asset("img/img-historia.jpg") ?>" loading="lazy" alt="História da João&Maria">
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
                <img src="<?= asset("img/vt-casamento.svg"); ?>" loading="lazy" alt="Vetor Casamento">
                <h2>Casamentos</h2>
            </article>
            <!--end of card-->

            <!--card-->
            <article class="specialties__grid__card">
                <img src="<?= asset("img/vt-debutante.svg"); ?>" loading="lazy" alt="Vetor Debutante">
                <h2>Debutante</h2>
            </article>
            <!--end of card-->

            <!--card-->
            <article class="specialties__grid__card">
                <img src="<?= asset("img/vt-bodas.svg"); ?>" loading="lazy" alt="Vetor Bodas">
                <h2>Bodas</h2>
            </article>
            <!--end of card-->

            <!--card-->
            <article class="specialties__grid__card">
                <img src="<?= asset("img/vt-aniversario.svg"); ?>" loading="lazy" alt="Vetor Aniversário">
                <h2>Aniversário</h2>
            </article>
            <!--end of card-->

            <!--card-->
            <article class="specialties__grid__card">
                <img src="<?= asset("img/vt-corporativo.svg"); ?>" loading="lazy" alt="Vetor Corporativo">
                <h2>Corporativo</h2>
            </article>
            <!--end of card-->

            <!--card-->
            <article class="specialties__grid__card">
                <img src="<?= asset("img/vt-despedida.svg"); ?>" loading="lazy" alt="Vetor Despedida de Solteiro">
                <h2>Despedida de<br>Solteiro(a)</h2>
            </article>
            <!--end of card-->

        </div>
        <!--end of grid-->
    </div>
</section>
<!--end of specialties-->

<!--services-->
<section id="servicos">
    <div class="container">

        <!--header-->
        <header class="services__header">
            <h1>Nossos Serviços</h1>

            <!--image-->
            <div class="services__header__image">
                <img src="<?= asset("img/vt-divider.svg"); ?>" loading="lazy" alt="Vetor Divisor">            
            </div>
            <!--end of image-->

        </header>
        <!--end of header-->

        <!--content-->
        <div class="services__content">
            <p>Possuímos três planos de altíssimo valor, com certeza um deles está dentro do seu perfil e isso gerará transformação no seu evento.</p>

            <!--grid-->
            <div class="services__content__grid">

                <!--article-->
                <article class="services__content__grid__article">
                    <img src="<?= asset("img/img-assessoria-completa.jpg"); ?>" loading="lazy" alt="João&Maria - Serviços - Assessoria Completa">

                    <!--content-->
                    <div class="services__content__grid__article__content">
                        <!--header-->
                        <header class="services__content__grid__article__content__header">
                            <h2>Assessoria Completa</h2>
                        </header>
                        <!--end of header-->

                        <p>Ideal para os clientes que necessitam de ajuda especializada para realizar as contratações de fornecedores do seu evento. Neste plano, além de todo o suporte dado no dia do evento (plano assessoria final), nós da João&Maria Assessoria participamos de TODAS as contratações. Realizamos o processo de busca, cotação, negociação e fechamento. </p>
                    </div>
                    <!--end of content-->

                </article>
                <!--end of article-->

                <!--article-->
                <article class="services__content__grid__article">
                    <img src="<?= asset("img/img-assessoria-personalizada.jpg"); ?>" loading="lazy" alt="João&Maria - Serviços - Assessoria Personalizada">

                    <!--content-->
                    <div class="services__content__grid__article__content">
                        <!--header-->
                        <header class="services__content__grid__article__content__header">
                            <h2>Assessoria Personalizada</h2>
                        </header>
                        <!--end of header-->

                        <p>Ideal para os clientes que necessitam de ajuda especializada para realizar as contratações de alguns fornecedores específicos do seu evento. Além de todo o suporte no dia do evento (plano assessoria final), nós da João&Maria Assessoria participamos de ALGUMAS contratações, escolhidas de acordo com a necessidade. Realizamos o processo de busca, cotação, negociação e fechamento.</p>
                    </div>
                    <!--end of content-->

                </article>
                <!--end of article-->

                <!--article-->
                <article class="services__content__grid__article">
                    <img src="<?= asset("img/img-assessoria-final.jpg"); ?>" loading="lazy" alt="João&Maria - Serviços - Assessoria Final">

                    <!--content-->
                    <div class="services__content__grid__article__content">
                        <!--header-->
                        <header class="services__content__grid__article__content__header">
                            <h2>Assessoria Final</h2>
                        </header>
                        <!--end of header-->

                        <p>Ideal para os clientes que já contrataram ou pretendem contratar os fornecedores por conta própria. Nesse plano, nós da João&Maria Assessoria fazemos o acompanhamento remoto do evento através do grupo em aplicativo, onde damos dicas e orientações. Mais próximo à data do evento, realizamos reuniões primordiais para maior compreensão do evento (Visita técnica, Cronograma), passando a nos tornar assim, os olhos dos nossos clientes. No dia do evento, acompanhamos a montagem da cerimônia e da recepção para garantir que tudo seja feito conforme o que foi combinado e contratado. Organizamos e conduzimos todo o cerimonial, tornando este momento o mais lindo e emocionante possível. Conduzimos também a recepção (festa) sempre otimizando o tempo, para que tudo seja aproveitado ao máximo.</p>
                    </div>
                    <!--end of content-->

                </article>
                <!--end of article-->

                <!--image-->
                <div class="services__content__grid__image">
                    <img src="<?= asset("img/img-services.jpg"); ?>" loading="lazy" alt="João&Maria - Serviços">
                </div>
                <!--end of image-->

            </div>
            <!--end of grid-->
        </div>
        <!--end of content-->

    </div>
</section>
<!--end of services-->

<!--gallery-->
<section id="galeria">
    <div class="container">

        <!--header-->
        <header class="gallery__header">
            <h1>Nossos trabalhos</h1>
            <p>Algumas histórias que ajudamos a escrever!</p>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="gallery__content">

            <!--image-->
            <div class="gallery__content__image">
                <a href="<?= asset("img/img-evento-01.jpg"); ?>" data-lightbox="gallery">
                    <img src="<?= asset("img/img-evento-01.jpg"); ?>" loading="lazy" alt="Galeria João&Maria - Evento">
                </a>
            </div>
            <!--end of image-->

            <!--image-->
            <div class="gallery__content__image">
                <a href="<?= asset("img/img-evento-02.jpg"); ?>" data-lightbox="gallery">
                    <img src="<?= asset("img/img-evento-02.jpg"); ?>" loading="lazy" alt="Galeria João&Maria - Evento">
                </a>
            </div>
            <!--end of image-->

            <!--image-->
            <div class="gallery__content__image">
                <a href="<?= asset("img/img-evento-03.jpg"); ?>" data-lightbox="gallery">
                    <img src="<?= asset("img/img-evento-03.jpg"); ?>" loading="lazy" alt="Galeria João&Maria - Evento">
                </a>
            </div>
            <!--end of image-->

            <!--image-->
            <div class="gallery__content__image">
                <a href="<?= asset("img/img-evento-04.jpg"); ?>" data-lightbox="gallery">
                    <img src="<?= asset("img/img-evento-04.jpg"); ?>" loading="lazy" alt="Galeria João&Maria - Evento">
                </a>
            </div>
            <!--end of image-->

            <!--image-->
            <div class="gallery__content__image">
                <a href="<?= asset("img/img-evento-05.jpg"); ?>" data-lightbox="gallery">
                    <img src="<?= asset("img/img-evento-05.jpg"); ?>" loading="lazy" alt="Galeria João&Maria - Evento">
                </a>
            </div>
            <!--end of image-->

            <!--image-->
            <div class="gallery__content__image">
                <a href="<?= asset("img/img-evento-06.jpg"); ?>" data-lightbox="gallery">
                    <img src="<?= asset("img/img-evento-06.jpg"); ?>" loading="lazy" alt="Galeria João&Maria - Evento">
                </a>
            </div>
            <!--end of image-->

            <!--image-->
            <div class="gallery__content__image">
                <a href="<?= asset("img/img-evento-07.jpg"); ?>" data-lightbox="gallery">
                    <img src="<?= asset("img/img-evento-07.jpg"); ?>" loading="lazy" alt="Galeria João&Maria - Evento">
                </a>
            </div>
            <!--end of image-->

            <!--image-->
            <div class="gallery__content__image">
                <a href="<?= asset("img/img-evento-08.jpg"); ?>" data-lightbox="gallery">
                    <img src="<?= asset("img/img-evento-08.jpg"); ?>" loading="lazy" alt="Galeria João&Maria - Evento">
                </a>
            </div>
            <!--end of image-->

            <!--image-->
            <div class="gallery__content__image">
                <a href="<?= asset("img/img-evento-09.jpg"); ?>" data-lightbox="gallery">
                    <img src="<?= asset("img/img-evento-09.jpg"); ?>" loading="lazy" alt="Galeria João&Maria - Evento">
                </a>
            </div>
            <!--end of image-->

            <!--image-->
            <div class="gallery__content__image">
                <a href="<?= asset("img/img-evento-10.jpg"); ?>" data-lightbox="gallery">
                    <img src="<?= asset("img/img-evento-10.jpg"); ?>" loading="lazy" alt="Galeria João&Maria - Evento">
                </a>
            </div>
            <!--end of image-->

            <!--image-->
            <div class="gallery__content__image">
                <a href="<?= asset("img/img-evento-11.jpg"); ?>" data-lightbox="gallery">
                    <img src="<?= asset("img/img-evento-11.jpg"); ?>" loading="lazy" alt="Galeria João&Maria - Evento">
                </a>
            </div>
            <!--end of image-->

            <!--image-->
            <div class="gallery__content__image">
                <a href="<?= asset("img/img-evento-12.jpg"); ?>" data-lightbox="gallery">
                    <img src="<?= asset("img/img-evento-12.jpg"); ?>" loading="lazy" alt="Galeria João&Maria - Evento">
                </a>
            </div>
            <!--end of image-->

        </div>
        <!--end of content-->

    </div>
</section>
<!--end of gallery-->

<!--testimony-->
<section id="testimony">
    <div class="container">

        <!--header-->
        <header class="testimony__header">
            <h1>Depoimentos</h1>

            <!--image-->
            <div class="testimony__header__image">
                <img src="<?= asset("img/vt-divider.svg"); ?>" loading="lazy" alt="Vetor Divisor">            
            </div>
            <!--end of image-->
        </header>
        <!--end of header-->

        <!--content-->
        <div class="testimony__content">
            <p>Veja abaixo o que os nossos clientes e amigos contam sobre o nosso trabalho!</p>

            <!--row-->
            <div class="testimony__content__row">

                <!--card-->
                <div class="testimony__content__row__card">

                    <!--image-->
                    <div class="testimony__content__row__card__image">
                        <img src="<?= asset("img/img-depoimento-01.jpg"); ?>" loading="lazy" alt="Depoimento João&Maria - Casamento Élide e Douglas">
                    </div>
                    <!--end of image-->

                    <!--name-->
                    <div class="testimony__content__row__card__name">
                        <p>Noiva Élide<br>(Casamento Élide e Douglas)</p>
                        <img src="<?= asset("img/vt-divider-small.svg"); ?>" loading="lazy" alt="Vetor Divisor">    
                    </div>
                    <!--end of name-->

                    <!--text-->
                    <div class="testimony__content__row__card__text">
                        <p class="text-bold">Recomendaria mil vezes!</p>
                        <p>Sem dúvida a melhor escolha! Hoje olho para o nosso casamento e não consigo imaginar como teria sido sem eles. Trazem tranquilidade, organização, fazem com que cada segundo aconteça da forma que sonhamos, com eles sentimos como se nosso casamento fosse único, e não só mais um. São atenciosos, estão disponíveis para ajudar a todo momento. O trabalho é impecável, além de tudo isso são incríveis como pessoa! No início contratar uma assessoria não fazia parte dos nossos planos, mais aos poucos fomos sentindo a necessidade. Foram só elogios no nosso casamento, e sabemos que parte disso se deve ao trabalho deles! Somos eternamente gratos por ter profissionais tão bons ao nosso lado.</p>
                    </div>
                    <!--end of text-->

                </div>
                <!--end of card-->

                <!--card-->
                <div class="testimony__content__row__card">

                    <!--image-->
                    <div class="testimony__content__row__card__image">
                        <img src="<?= asset("img/img-depoimento-02.jpg"); ?>" loading="lazy" alt="Depoimento João&Maria - Casamento Adriana e Cesar">
                    </div>
                    <!--end of image-->

                    <!--name-->
                    <div class="testimony__content__row__card__name">
                        <p>Noiva Adriana<br>(Casamento Adriana e Cesar)</p>
                        <img src="<?= asset("img/vt-divider-small.svg"); ?>" loading="lazy" alt="Vetor Divisor">    
                    </div>
                    <!--end of name-->

                    <!--text-->
                    <div class="testimony__content__row__card__text">
                        <p class="text-bold">J&M equipe nota 10</p>
                        <p>A equipe J&M é de longe a melhor equipe de assessoria que alguém poderia ter. São profissionais de excelente qualidade, receptivos e estão sempre abertos a sugestões. A Juliana e o André sempre fazerem o possível para atender as nossas demandas e realizar os nossos desejos. Posso dizer que a equipe J&M são pessoas que amam o que faz, estão sempre atualizados e atentos a cada detalhe. Eles estiveram ao nosso lado o tempo todo, independente do dia e do horário, até o grande dia. Recebemos vários elogios, tanto da cerimônia quanto da festa, elogios que devemos também a eles. Recomendamos fortemente a equipe J&M Assessoria.</p>
                    </div>
                    <!--end of text-->

                </div>
                <!--end of card-->

                <!--card-->
                <div class="testimony__content__row__card">

                    <!--image-->
                    <div class="testimony__content__row__card__image">
                        <img src="<?= asset("img/img-depoimento-03.jpg"); ?>" loading="lazy" alt="Depoimento João&Maria - Casamento Luciana e Carlos">
                    </div>
                    <!--end of image-->

                    <!--name-->
                    <div class="testimony__content__row__card__name">
                        <p>Noiva Luciana<br>(Casamento Luciana e Carlos)</p>
                        <img src="<?= asset("img/vt-divider-small.svg"); ?>" loading="lazy" alt="Vetor Divisor">    
                    </div>
                    <!--end of name-->

                    <!--text-->
                    <div class="testimony__content__row__card__text">
                        <p class="text-bold">Impecáveis, assessoria nota 10</p>
                        <p>Atenção e profissionalismo. Foram impecáveis no dia do casamento, verificando todo o contratado, orientando pais e padrinhos, antecipando-se a imprevistos. Reuniões precisas com informações e dicas antes do casamento. Contato e coordenação de todos os fornecedores, com antecedência. Ao final, guardaram todos os nossos pertences com zelo. Convidados adoraram a simpatia e presteza. Foram detalhistas e agradáveis. Obrigada pelo atendimento! Ficarão em nossa história! Sucesso!</p>
                    </div>
                    <!--end of text-->

                </div>
                <!--end of card-->

            </div>
            <!--end of row-->

            <!--button-->
            <div class="testimony__content__button">
                <a href="https://www.casamentos.com.br/cerimonialista/joao-&-maria-assessoria-de-eventos--e220208" class="btn btn--outline-theme-primary" target="_blank">Ver mais depoimentos</a>
            </div>
            <!--end of button-->

        </div>
        <!--end of content-->

    </div>
</section>
<!--end of testimony-->

<!--contact-->
<section id="contato">
    <div class="container">

        <!--header-->
        <header class="contact__header">
            <h1>Fale conosco</h1>
            <p>Juntos realizaremos o seu sonho!</p>
        </header>
        <!--end of header-->

        <!--form-->
        <div class="contact__form">
            <form action="post">

                <!--group-->
                <div class="contact__form__group">
                    <!--input-->
                    <div class="contact__form__group__input">
                        <input type="text" name="name" placeholder="Insira seu nome e sobrenome">
                    </div>
                    <!--end of input-->

                    <!--input-->
                    <div class="contact__form__group__input">
                        <input type="email" name="mail" placeholder="Insira seu melhor e-mail">
                    </div>
                    <!--end of input-->

                    <!--input-->
                    <div class="contact__form__group__input">
                        <input list="event" name="eventList" placeholder="Qual o tipo de evento?">

                        <datalist id="event">
                            <option value="Casamento">
                            <option value="Debutante">
                            <option value="Evento Corporativo">
                            <option value="Outros">
                        </datalist>
                    </div>
                    <!--end of input-->

                    <!--input-->
                    <div class="contact__form__group__input">
                        <input type="text" name="whatsapp" placeholder="Whatsapp">
                    </div>
                    <!--end of input-->

                    <!--input-->
                    <div class="contact__form__group__input">
                        <input type="date" name="date" placeholder="Qual a data do evento?">
                    </div>
                    <!--end of input-->

                    <!--input-->
                    <div class="contact__form__group__input">
                        <input type="text" name="phone" placeholder="Telefone">
                    </div>
                    <!--end of input-->

                    <!--input-->
                    <div class="contact__form__group__input">
                        <input type="text" name="amountPeople" placeholder="Qual a quantidade de pessoas? (Quantidade total, adultos, crianças, etc)">
                    </div>
                    <!--end of input-->

                    <!--input-->
                    <div class="contact__form__group__input">
                        <input type="text" name="place" placeholder="Qual o local do evento? (Cerimônia e recepção)">
                    </div>
                    <!--end of input-->
                </div>
                <!--end of group-->

                <!--text area-->
                <div class="contact__form__textArea">
                    <textarea name="message" rows="4" cols="50" placeholder="Observações:"></textarea>
                </div>
                <!--end of text area-->

                <!--button-->
                <div class="contact__form__button">
                    <button type="submit" class="btn btn--outline-theme-primary">Enviar Contato</button>
                </div>
                <!--end of button-->


            </form>
        </div>
        <!--end of form-->

    </div>
</section>
<!--end of contact-->

<!--map-->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.8339503450393!2d-46.515752085291105!3d-23.64611698464079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce695bf7c3e40b%3A0x2c043b01d6bfa862!2sJo%C3%A3o%26Maria%20Assessoria%20de%20Eventos!5e0!3m2!1sen!2sbr!4v1607023076620!5m2!1sen!2sbr" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!--end of map-->

<?= $v->start("scripts"); ?>
<script src="<?= asset("js/main.min.js"); ?>"></script>
<?= $v->end; ?>