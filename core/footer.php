<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>      
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/color-thief.min.js"></script>
<script src="js/galleryExpand.js"></script>
<script src="js/init.js"></script>
<script>
$(document).ready(function(){
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    var $toastContent = $('<span>I am toast content</span>');
    Materialize.toast($toastContent, 5000);
  });     
</script>
</body>
</html>