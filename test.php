<?php

include_once 'core/core.php';
include_once 'core/header.php';
?>

<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

<div id="links">
    <a href="images/bigbang1.png" title="Banana">
        <img src="images/bigbang1.png" alt="Banana">
    </a>
    <a href="images/bigbang2.jpg" title="Apple">
        <img src="images/bigbang2.jpg" alt="Apple">
    </a>
    <a href="images/bigbang3.jpg" title="Orange">
        <img src="images/bigbang3.jpg" alt="Orange">
    </a>
</div>

<script>
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>

<?php

include_once 'core/footer.php';
?>

