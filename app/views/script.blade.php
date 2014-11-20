<script>
  $(document).ready(function(){
    $('#navi').localScroll(800);
    RepositionNav();
    $(window).resize(function(){
      RepositionNav();
    });
    // .parallax(xPosition, adjuster, inertia, outerHeight) options:
    // xPosition - Horizontal position of the element.
    // adjuster - y position to start from.
    // inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling.
    // outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport.
    $('#about').parallax("50%", 0, 0.1, true);
    $('#interests').parallax("50%", 0, 0.1, true);
    $('#contact').parallax("50%", 0, 0.1, true);
    $('.bg').parallax("5%", 3000, 0.8, true);
    $('.bg2').parallax("30%", 3500, 0.8, true);
  })
  $('#navbar').scrollspy();
  $(".collapse").collapse()

  $(document).ready(function() {
    $('#page').fadeTo(200, 1);
  });
</script>