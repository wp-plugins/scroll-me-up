<style>
.scroll-up {
  width: 50px;
  height: 50px;
  opacity: 0.7;
  position: fixed;
  bottom: 50px;
  right: 100px;
  display: none;
  text-indent: -99999px;
  background:url(<?php echo plugins_url( 'scrollup.png', __FILE__ ); ?> ) no-repeat;
  z-index:99999;
}
</style>
<script>
  $(document).ready(function () {
      $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
              $('.scroll-up').fadeIn();
          } else {
              $('.scroll-up').fadeOut();
          }
      });
      $('.scroll-up').click(function () {
          $("html, body").animate({
              scrollTop: 0
          }, 600);
          return false;
      });
  });
</script>
<a href="#" class="scroll-up">scroll</a>

