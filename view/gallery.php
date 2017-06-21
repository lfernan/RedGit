<?php
require_once '../model/managed/Managed.php';
$m = new Managed();
$id = $_POST['n'];
$stmt = $m->getUsers($id);
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
    foreach ($stmt as $row) {
        $files = glob(ROOT_PATH . $row->album . '*');
        foreach ($files as $file) {
            echo '<a href="' . HTTP_PATH . $row->album . basename($file) . '" title="Banana">
                    <img src="' . HTTP_PATH . $row->album . basename($file) . '" alt="Banana">
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
