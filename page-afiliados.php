<?php // Template Name: Afiliados ?> 
<?php get_header()?>
<div class="header-afiliado">
    <div class="logo">
        <a href="<?php bloginfo('url') ?>/home/" title="Esporte da Sorte"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/logo-esporte-da-sorte-footer.png" alt="Logo Esporte da Sorte"></a>
    </div>
</div>
<main class="afiliados-page">
   <div class="container">
        <h1>Preencha o Formulário abaixo e aguarde o contato do nosso <strong>Time de afiliados.</strong></h1>
        <div class="content-form">
        <iframe id="form-g" src="https://docs.google.com/forms/d/e/1FAIpQLSdo8UYbGu046UDb89rF1Yojt5JGtEBNTRTk2XxW95jBs2Ta5g/viewform?embedded=true" sandbox="allow-same-origin allow-scripts allow-popups allow-forms allow-downloads" width="640" height="3660" frameborder="0"  scrolling="no" marginheight="0" marginwidth="0">Carregando…</iframe>
    
        </div>
    </div>
</main>

<script>
var load = 0;

    document.getElementById('form-g').onload = function(){
    /*Execute on every reload on iFrame*/
    load++;
    if(load > 1){
        /*Second reload is a submit*/
        document.location = "https://onabetafiliados.com/obrigado/";
    }
}
</script>

<?php get_footer()?>