<?php
$m = new Managed();
?>
<!-- Navbar and Header -->
<nav class="nav-extended">
    <div class="nav-background">
        <div class="pattern active" style="background-image: url('http://placehold.it/1400x300');"></div>
    </div>
    <div class="nav-wrapper container">
        <a href="index.html" class="brand-logo"><i class="material-icons">camera</i>Gallery</a>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li class="active"><a href="index.html">Gallery</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="docs.html">Docs</a></li>
            <li><a class='dropdown-button' href='#' data-activates='feature-dropdown' data-belowOrigin="true" data-constrainWidth="false">Features<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <!-- Dropdown Structure -->
        <ul id='feature-dropdown' class='dropdown-content'>
            <li><a href="full-header.html">Fullscreen Header</a></li>
            <li><a href="horizontal.html">Horizontal Style</a></li>
            <li><a href="no-image.html">No Image Expand</a></li>
        </ul>

        <div class="nav-header center">
        </div>

    </div>    
    <!-- Menu Principal -->
    <div class="categories-wrapper purple lighten-1">
        <div class="categories-container">
            <ul class="categories container">
                <li class="active" id="todos"><a href="#M">All M</a></li>
                <li><a href="#H">Polygon H</a></li>
                <li><a href="#T">Big Bang T</a></li>
                <li><a href="#sacred">Sacred Geometry</a></li>
                <li><a href="#modal1">Mensajes</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Menu Gallery -->
<ul class="side-nav" id="nav-mobile">
    <li class="active"><a href="index.html"><i class="material-icons">camera</i>Gallery</a></li>
    <li><a href="blog.html"><i class="material-icons">edit</i>Blog</a></li>
    <li><a href="docs.html"><i class="material-icons">school</i>Docs</a></li>
    <li><a href="full-header.html"><i class="material-icons">fullscreen</i>Fullscreen Header</a></li>
    <li><a href="horizontal.html"><i class="material-icons">swap_horiz</i>Horizontal Style</a></li>
    <li><a href="no-image.html"><i class="material-icons">texture</i>No Image Expand</a></li>
</ul>
<style>
    .gallery .gallery-header {
        padding:0px;
        text-align:center;
    }
</style>
<!-- Gallery -->          
<div id="portfolio" class="section gray">
    <div class="container">                        
        <div class="gallery row">
            <?php
            $stmt = $m->getUsers(null);
            foreach ($stmt as $row) {
                echo '<div class="col 4 s4 gallery-item gallery-expand gallery-filter ' . $row->sex . '">
                        <div class="gallery-curve-wrapper">
                            <a class="gallery-cover gray">
                                <img class="responsive-img" src="' . HTTP_PATH . $row->nick . '" alt="placeholder">
                            </a>
                            <div class="gallery-header">
                                <span>' . $row->name . '</span>
                            </div>
                            <div class="gallery-body">
                                <div class="title-wrapper">
                                    <h3>' . $row->name . '</h3>
                                    <span class="price">$' . $row->price . '</span>
                                </div>
                                <div class="card-panel hoverable z-depth-5 darken-4">
                                    <div class="container">
                                        <video class="responsive-video" controls>
                                            <source src="' . HTTP_PATH . $row->video . '" type="video/mp4">
                                        </video>
                                    </div>
                                </div>                        
                                <p class="description">' . $row->description . '</p>
                                <div class="carousel">';
                $files = glob(ROOT_PATH . $row->album . '*');
                foreach ($files as $file) {
                    echo '<a class="carousel-item"><img src="' . HTTP_PATH . $row->album . basename($file) . '"></a>';
                }
                echo '</div>
                            </div>
                            <div class="gallery-action">
                                <a class="btn-floating btn-large waves-effect waves-light" href="#modal1"><i class="material-icons dp48">textsms</i></a>
                                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
                            </div>                   
                        </div>
                    </div>';
            }
            ?>
        </div>            
    </div>      

