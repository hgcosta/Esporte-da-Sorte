<?php // Template Name: agradecimento ?> 
<?php get_header()?>
<!-- Twitter conversion tracking event code -->
<script type="text/javascript">
  // Insert Twitter Event ID
  twq('event', 'tw-ofpq5-ofpqd', {
  });
</script>


<!-- End Twitter conversion tracking event code -->
<header class="header-afiliado">
    <div class="logo">
        <a href="<?php bloginfo('url') ?>/home/" title="Esporte da Sorte"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/logo-esporte-da-sorte-footer.png" alt="Logo Esporte da Sorte"></a>
    </div>
</header>
<main class="afiliados obrigado">
    <div class="container">
            <h1>Obrigado por preencher o Formulário abaixo e aguarde o contato do nosso </br><strong>Time de afiliados.</strong></h1>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Fique atento a sua caixa de E-mails</p>
    </div>

    </div>
</main>

<script>
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
// btn.onclick = function() {
//   modal.style.display = "block";
// }

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<?php get_footer()?>