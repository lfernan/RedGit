<?php ?>
<div class="banner">
    <section class="slider">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <div class="w3l_banner">
                        <div class="w3_banner_info">
                            <h3>sint occaecat cupidatat non proident <span>sunt in culpa qui officia</span></h3>
                            <p>Nullam aliquam eget erat vel lacinia. 
                                Mauris porttitor velit ac odio laoreet, sit amet tempor justo luctus.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l_banner1">
                        <div class="w3_banner_info">
                            <h3>Aliquam nec arcu consequat <span>tincidunt dolorsunt officia</span></h3>
                            <p>Nullam aliquam eget erat vel lacinia. 
                                Mauris porttitor velit ac odio laoreet, sit amet tempor justo luctus.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l_banner2">
                        <div class="w3_banner_info">
                            <h3>Nullam viverra pulvinar<span>Nullam elementum nisl tempor</span></h3>
                            <p>Nullam aliquam eget erat vel lacinia. 
                                Mauris porttitor velit ac odio laoreet, sit amet tempor justo luctus.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>                        
    <script type="text/javascript">
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
</div>
<div class="banner services" style="padding-bottom: 0.1em;padding-top: 1em;">
    <div class="container">                
        <h3 class="w3_head w3_head1" style="margin:0px;">Special Services</h3>
        <p class="nunc nunc1" style="padding-bottom: 0.5em;"></p>
    </div>
    <section class="slider">
        <div id="mensajes">
            <ul class="slides">
                <li>
                    <div class="agileits_services_grid">
                        <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                        <h5>Global Service 1</h5>
                        <p>Vivamus malesuada pellentesque nunc id condimentum.</p>
                    </div>
                </li>
                <li>
                    <div class="agileits_services_grid">
                        <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                        <h5>Global Service 2</h5>
                        <p>Vivamus malesuada pellentesque nunc id condimentum.</p>
                    </div>
                </li>
                <li>
                    <div class="agileits_services_grid">
                        <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                        <h5>Global Service 3</h5>
                        <p>Vivamus malesuada pellentesque nunc id condimentum.</p>
                    </div>
                </li>
                <li>
                    <div class="agileits_services_grid">
                        <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                        <h5>Global Service 4</h5>
                        <p>Vivamus malesuada pellentesque nunc id condimentum.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>            
    <script type="text/javascript">
        $(window).load(function () {
            $('#mensajes').flexslider({
                animation: "slide",
                direction: "horizontal",
                itemWidth: 600,
                directionNav: false,
                pauseOnHover: true,
                slideshowSpeed: 4000,
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
</div>

<div class="agileinfo_gallery_grids center-block">
    <div class="col-md-4 w3_tabs_grid" style="padding-right:1px;padding-left:1px;">
        <div class="grid">
            <a href="images/4.jpg" class="lsb-preview" data-lsb-group="header">
                <figure class="effect-winston">
                    <img src="images/4.jpg" class="img-responsive" alt=" ">                    
                    <figcaption>
                        <p>
                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </p>
                    </figcaption>			
                </figure>
                <span class="item-desc">Busy Streets</span>
            </a>
        </div>
    </div>
    <div class="col-md-4 w3_tabs_grid" style="padding-right:1px;padding-left:1px;">
        <div class="grid">
            <a href="images/5.jpg" class="lsb-preview" data-lsb-group="header">
                <figure class="effect-winston">
                    <img src="images/5.jpg" class="img-responsive" alt=" ">
                    <figcaption>
                        <p>
                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </p>
                    </figcaption>			
                </figure>
            </a>
        </div>
    </div>
    <div class="col-md-4 w3_tabs_grid" style="padding-right:1px;padding-left:1px;">
        <div class="grid">
            <a href="images/6.jpg" class="lsb-preview" data-lsb-group="header">
                <figure class="effect-winston">
                    <img src="images/6.jpg" class="img-responsive" alt=" ">
                    <figcaption>
                        <p>
                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </p>
                    </figcaption>			
                </figure>
            </a>
        </div>
    </div>
    <div class="col-md-4 w3_tabs_grid w3_tabs_grid_sub" style="padding-right:1px;padding-left:1px;">
        <div class="grid">
            <a href="images/13.jpg" class="lsb-preview" data-lsb-group="header">
                <figure class="effect-winston">
                    <img src="images/13.jpg" class="img-responsive" alt=" ">
                    <figcaption>
                        <p>
                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </p>
                    </figcaption>			
                </figure>
            </a>
        </div>
    </div>
    <div class="col-md-4 w3_tabs_grid w3_tabs_grid_sub" style="padding-right:1px;padding-left:1px;">
        <div class="grid">
            <a href="images/14.jpg" class="lsb-preview" data-lsb-group="header">
                <figure class="effect-winston">
                    <img src="images/14.jpg" class="img-responsive" alt=" ">
                    <figcaption>
                        <p>
                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </p>
                    </figcaption>			
                </figure>
            </a>
        </div>
    </div>
    <div class="col-md-4 w3_tabs_grid w3_tabs_grid_sub" style="padding-right:1px;padding-left:1px;">
        <div class="grid">
            <a href="images/15.jpg" class="lsb-preview" data-lsb-group="header">
                <figure class="effect-winston">
                    <img src="images/15.jpg" class="img-responsive" alt=" ">
                    <figcaption>
                        <p>
                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </p>
                    </figcaption>			
                </figure>
            </a>
        </div>
    </div>
    <div class="col-md-4 w3_tabs_grid" style="padding-right:1px;padding-left:1px;">
        <div class="grid">
            <a href="images/18.jpg" class="lsb-preview" data-lsb-group="header">
                <figure class="effect-winston">
                    <img src="images/18.jpg" class="img-responsive" alt=" ">
                    <figcaption>
                        <p>
                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </p>
                    </figcaption>			
                </figure>
            </a>
        </div>
    </div>
    <div class="col-md-4 w3_tabs_grid" style="padding-right:1px;padding-left:1px;">
        <div class="grid">
            <a href="images/17.jpg" class="lsb-preview" data-lsb-group="header">
                <figure class="effect-winston">
                    <img src="images/17.jpg" class="img-responsive" alt=" ">
                    <figcaption>
                        <p>
                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </p>
                    </figcaption>			
                </figure>
            </a>
        </div>
    </div>
    <div class="col-md-4 w3_tabs_grid" style="padding-right:1px;padding-left:1px;">
        <div class="grid">
            <a href="images/16.jpg" class="lsb-preview" data-lsb-group="header">
                <figure class="effect-winston">
                    <img src="images/16.jpg" class="img-responsive" alt=" ">
                    <figcaption>
                        <p>
                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </p>
                    </figcaption>			
                </figure>
            </a>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>