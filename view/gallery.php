<?php
$gallery = $_SESSION[$_POST['token']];
$index = $_POST['index'];
$name = $_SESSION["name".$_POST['token']];
?>
<!--div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel"-->
<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

<div id="links" style="display:none">
    <?php
    echo '<a href="' . $gallery[$index] . '" title="'.$name.'">
          <img src="' . $gallery[$index] . '" alt="'.$name.'">
          </a>';
    $size = count($gallery);
    for ($x = 0; $x < $size; $x++) {
        if ($x != $index) {
            echo '<a href="' . $gallery[$x] . '" title="'.$name.'">
              <img src="' . $gallery[$x] . '" alt="'.$name.'">
              </a>';
        }
    }
    ?>
</div>

<script>
    blueimp.Gallery(
            document.getElementById('links').getElementsByTagName('a'),
            {
                container: '#blueimp-gallery',
                carousel: true,
                onclosed: function () {
                    $('#overlaygallery').remove();
                }
            }
    );
</script>
