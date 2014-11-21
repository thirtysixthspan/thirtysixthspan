<script>
  $(document).ready(function(){
    $('#navi').localScroll(800);
    RepositionNav();
    $(window).resize(function(){
      RepositionNav();
    });
  })
  $('#navbar').scrollspy();
  $(".collapse").collapse()

  $(document).ready(function() {
    $('#page').fadeTo(200, 1);
  });
</script>
