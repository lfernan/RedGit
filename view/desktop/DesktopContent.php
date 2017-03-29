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
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
                        <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Fixed Masonry Filters -->
    <div class="categories-wrapper purple lighten-1">
        <div class="categories-container">
            <ul class="categories container">
                <li class="active" id="todos"><a href="#all">All</a></li>
                <li><a href="#polygon">Polygon</a></li>
                <li><a href="#bigbang">Big Bang</a></li>
                <li><a href="#sacred">Sacred Geometry</a></li>
                <li><a href="#modal1">Mensajes</a></li>
            </ul>
        </div>
    </div>
</nav>
<ul class="side-nav" id="nav-mobile">
    <li class="active"><a href="index.html"><i class="material-icons">camera</i>Gallery</a></li>
    <li><a href="blog.html"><i class="material-icons">edit</i>Blog</a></li>
    <li><a href="docs.html"><i class="material-icons">school</i>Docs</a></li>
    <li><a href="full-header.html"><i class="material-icons">fullscreen</i>Fullscreen Header</a></li>
    <li><a href="horizontal.html"><i class="material-icons">swap_horiz</i>Horizontal Style</a></li>
    <li><a href="no-image.html"><i class="material-icons">texture</i>No Image Expand</a></li>
</ul>

<!-- Modal Structure -->
<div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
        <ul class="collection">
            <li class="collection-item avatar">
                <img src="images/yuna.jpg" alt="" class="circle">
                <span class="title">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle">folder</i>
                <span class="title">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle green">insert_chart</i>
                <span class="title">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle red">play_arrow</i>
                <span class="title">Title</span>
                <p>First Line <br>
                    Second Line
                </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
        </ul>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>
<!-- Gallery -->
<div id="portfolio" class="section gray">
    <div class="container">
        <div class="gallery row">
            <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
                <div class="gallery-curve-wrapper">
                    <a class="gallery-cover gray">
                        <img class="responsive-img" src="images/bigbang1.png" alt="placeholder">
                    </a>
                    <div class="gallery-header">
                        <span>Aquamarine</span>
                    </div>
                    <div class="gallery-body">
                        <div class="title-wrapper">
                            <h3>Aquamarine</h3>
                            <span class="price">$29.99</span>
                        </div>
                        <div class="card-panel hoverable z-depth-5 darken-4">
                            <div class="container">
                                <video class="responsive-video" controls>
                                    <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>                        
                        <p class="description">
                            Aca esta la descripcion venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                        <p class="description">
                            Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>


                        <div class="carousel">
                            <a class="carousel-item"><img src="http://lorempixel.com/250/250/nature/1"></a>
                            <a class="carousel-item"><img src="http://lorempixel.com/250/250/nature/2"></a>
                            <a class="carousel-item"><img src="http://lorempixel.com/250/250/nature/3"></a>
                            <a class="carousel-item"><img src="http://lorempixel.com/250/250/nature/4"></a>
                            <a class="carousel-item"><img src="http://lorempixel.com/250/250/nature/5"></a>
                        </div>
                    </div>
                    <div class="gallery-action">
                        <a class="btn-floating btn-large waves-effect waves-light" href="#modal1"><i class="material-icons dp48">textsms</i></a>
                        <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
                    </div>                   
                </div>
            </div>
        </div>
    </div>
</div><!-- /.container -->
