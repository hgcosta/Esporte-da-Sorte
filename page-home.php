<?php // Template Name: Home ?> 
<?php get_header()?>

<main>
    <section class="hero" id="times">
        <header>
            <div class="container content-header">
                <div class="logo">
                    <a href="<?php bloginfo('url') ?>/home/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/logo-esporte-da-sorte-header.png" alt="Logo Esporte da Sorte"></a>
                </div>
                <div class="menu-icon hover-target" onclick="openNav()">
                    <span class="menu-icon__line menu-icon__line-left"></span>
                    <span class="menu-icon__line"></span>
                    <span class="menu-icon__line menu-icon__line-right"></span>
                </div>
                <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                        <a onclick="closeNav()" href="#times">Times</a>
                        <a onclick="closeNav()" href="#competicoes">Competições</a>
                        <a onclick="closeNav()" href="#eventos">Eventos</a>
                        <a onclick="closeNav()" href="#redes-sociais">Redes Sociais</a>
                        <a onclick="closeNav()" href="#tv">Televisão</a>
                        <a onclick="closeNav()" href="#beneficios">Benefícios</a>
                        <a onclick="closeNav()" href="#seja-afiliados">Seja um</br>Afiliado</a>

                    </div>
                </div>
                <nav class="desktop-nav">
                    <ul class="list-unstyled">
                        <li><a href="#times">Times</a></li>
                        <li><a href="#competicoes">Competições</a></li>
                        <li><a href="#eventos">Eventos</a></li>
                        <li><a href="#redes-sociais">Redes Sociais</a></li>
                        <li><a href="#tv">Televisão</a></li>
                        <li><a href="#beneficios">Benefícios</a></li>
                        <li><a href="#seja-afiliados">Seja um</br>Afiliado</a></li>
                    </ul>
                </nav>
            </div>
        </header>
       <div class="bg-fundo">
            <div class="container content-hero">
                <div class="col-info">
                    <h1>Em <strong>campo,</strong> </br>a gente <strong>Entra</strong> pra vencer</h1>
                    <p>Somos <strong>patrocinadores oficiais</strong> de alguns dos mais <strong>relevantes times de futebol do Brasil </strong>entre eles:</p>
                    <div class="teams">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/logos-times.png" alt="Time brasileiros do campeonato Brasileirão série A">
                    </div>
                    <div class="box-s">
                        <a href="<?php bloginfo('url') ?>/afiliados/"><span>Quero</span> Ser <strong>Afiliado</strong></a>
                    </div>
                </div>
                <div class="col-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Jogadores.png" alt="Soares e Fernandinho">
                </div>
            </div>
       </div>
    </section>
    <section class="benefits" id="beneficios">
        <h2>Benefícios</h2>
        <div class="container">
            <div class="center">
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gerente-de-conta.png" alt="Gerente de conta">
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/suporte-humanizado.png" alt="Suporte Humanizado">
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jogos-exclusivos.png" alt="Jogos exclusivos">
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/taxa-media.png" alt="Taxa média de 70% de FTD">
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/material-promocional.png" alt="Material Promocional">
                </div>
                <div class="item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/vantagem-novos.png" alt="Vantagens para os novos">
                </div>
            </div>
               <div class="btn-affiliate">
                    <div class="box-s">
                        <a href="<?php bloginfo('url') ?>/afiliados/"><span>Quero</span> ser <strong>Afiliado</strong></a>
                    </div>
               </div>
            </div>
    </section>
    <section class="games">
        <h2>Mais de 3 Mil games</h2>
        <div class="container">
            <a href="https://www.esportesdasorte.com/ptb/games/casino" target="_blank">
                <picture>
                    <source media="(max-width: 600px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/games-mobile.png">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/games.png" alt="Games">
                </picture>  
            </a>
            <div class="btn-games box-s">
                <a href="<?php bloginfo('url') ?>/afiliados/"><span>Quero</span> ser <strong>Afiliado</strong></a>
            </div>
        </div>
    </section>
    <section class="competicoes" id="competicoes">
        <div class="container">
            <div class="content-competicoes">
                <h3 class="info-mobile">Alcance além das <strong>quatro linhas</strong></h3>
                <div class="content">
                    <div class="col-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/taca-papai.png" alt="">
                    </div>
                    <div class="col-info">
                        <h3>Alcance além das <strong>quatro linhas</strong></h3>
                        <p><strong>ÚNICA MARCA BRASILEIRA</strong> do segmento a anunciar na <strong>Libertadores da América</strong>, além de patrocínios e anúncios nos principais campeonatos estaduais, <strong>regionais e nacionais do país.</strong></p>
                        <div class="btn-affiliate">
                            <div class="box-s">
                                <a href="<?php bloginfo('url') ?>/afiliados/"><span>Quero</span> ser <strong>Afiliado</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="eventos" id="eventos">
        <div class="container content-event">
            <div class="col-info">
                <h3>Uma <strong>marca</strong> que <strong>fala </strong>com o <strong>povo </strong></h3>
                <p>Queremos você <strong>festejando</strong> junto à nossa <strong>marca</strong>.</p>
                <div class="btn-affiliate">
                    <div class="box-s">
                        <a href="<?php bloginfo('url') ?>/afiliados/"><span>Quero</span> ser <strong>Afiliado</strong></a>
                    </div>
                </div>
            </div>
            <div class="col-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/festa-esporte-02.png">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/festa-esporte-01.png">
            </div>
        </div>
    </section>
    <section class="social" id="redes-sociais">
        <div class="container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bola.png" alt="" class="bola-bg">
            <div class="content-social">
                <div class="col-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/instagram.png" alt="Instagram Esporte da Sorte">
                </div>
                <div class="col-info">
                    <h3>No <strong>mundo digital</strong>, a nossa <strong>marca é uma realidade</strong>.</h3>
                    <p>O <strong>maior perfil brasileiro</strong> do segmento, <strong>no Instagram</strong>, é nosso. Mais de <strong>1 milhão seguidores prontos para quebrar novos recordes.</strong></p>
                    <div class="btn-affiliate">
                        <div class="box-s">
                            <a href="<?php bloginfo('url') ?>/afiliados/"><span>Quero</span> ser <strong>Afiliado</strong></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-social-mobile">
                <h3>No <strong>mundo digital</strong>, a nossa <strong>marca é uma realidade</strong>.</h3>
                <div class="content">  
                    <div class="col-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/instagram.png" alt="Instagram Esporte da Sorte">
                    </div>
                    <div class="col-info">
                        <p>O <strong>maior perfil brasileiro</strong> do segmento, <strong>no Instagram</strong>, é nosso. Mais de <strong>1 milhão seguidores prontos para quebrar novos recordes.</strong></p>
                        <div class="btn-affiliate">
                            <div class="box-s">
                                <a href="<?php bloginfo('url') ?>/afiliados/"><span>Quero</span> ser <strong>Afiliado</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tv" id="tv">
        <div class="container">
            <div class="content-tv">
                <div class="col-info">
                    <h3>No centro das <strong>atenções</strong></h3>
                    <p>A <strong>primeira marca do segmento de apostas esportivas</strong> do país a adquirir cotas de patrocínio do <strong>Big Brother Brasil</strong>, um <strong>campeão de audiência e entretenimento.</strong></p>
                    <div class="btn-affiliate">
                        <div class="box-s">
                            <a href="<?php bloginfo('url') ?>/afiliados/"><span>Quero</span> ser <strong>Afiliado</strong></a>
                        </div>
                    </div>
                </div>
                <div class="col-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/TV.png" alt="TV / Big brother Brasil / BBB">
                </div>
            </div>
        </div>
    </section>
    <section class="afiliados" id="seja-afiliados">
        <div class="content-afiliados">
            <div class="col-info">
                <h2><span>Quero</span></br> ser <strong>Afiliado</strong></h2>
                <a href="<?php bloginfo('url') ?>/afiliados/">Eu <strong>Quero</strong></br> ser <strong>Afiliado</strong></a>
            </div>
        </div>
    </section>
</main> 
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>



$('.center').slick({
  centerMode: true,
  infinite: true,
  centerPadding: '0px',
  slidesToShow: 5,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 600,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0',
        slidesToShow: 2
      }
    }
  ]
});
var prevArrow = document.querySelector('.slick-prev').innerHTML = ''

var nextArrow = document.querySelector('.slick-next').innerHTML = ''
    </script>

<?php get_footer()?>