<footer>
  <div class="footer">
    <img id="kuririn" style="z-index:10000;" src="<?php bloginfo("template_url") ?>/assets/kuririn.svg" alt="Kuririn">
    <div class="overflow-hidden">
    <img class="d-none d-md-block" id="kuririn-footer"  style="z-index:10000; transition: 0.3s;" src="<?php bloginfo("template_url") ?>/assets/kuririn.svg" alt="Kuririn">
    </div>

    <div class="footer-text">
      <p>
        Projeto Kuririn | Todos os direitos reservados © 2022 Oxigenweb
      </p>
      <a href="https://www.oxigenweb.com.br/" target="_blank">
        <img src="<?php bloginfo("template_url") ?>/assets/o2-footer-logo.svg" alt="">
      </a>
      <button>
        <a href="#form-logo">
          Participar
        </a>
      </button>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>

<script>
  var scrollDistance = jQuery(this).scrollTop();
  jQuery(window).on('scroll', function() {
    var scrollDistance = jQuery(this).scrollTop();
    console.log("Scroll distance from top of document: " + scrollDistance + "px");
  });


  const kuririn = document.getElementById("kuririn");
  document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
      kuririn.style.bottom = "0";
      kuririn.classList.add("descending");

      setTimeout(function() {
        kuririn.style.bottom = "-80px";
      }, 4500);
    }, 2500);
  });
  
const kuririnFooter = document.getElementById("kuririn-footer");
document.addEventListener("DOMContentLoaded", function () {
    kuririnFooter.style.marginBottom = "-152px";
//   setTimeout(function () {
    // kuririnFooter.style.marginBottom = "-152px";
    kuririnFooter.classList.add("descending");

    setTimeout(function () {
      kuririnFooter.style.marginBottom = "0";
    }, 8000);
//   }, 0);
});
  
</script>
</body>

</html>