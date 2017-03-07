<?php ?>
<div id="contenedor">
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
                    directionNav: false,
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
    </div>
    <div class="banner">
        <section class="slider">
            <div id="mensajes">
                <ul class="slides">
                    <li>
                        <div class="agileits_services_grid">
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                            <h5>Global Service</h5>
                            <p>Vivamus malesuada pellentesque nunc id condimentum.</p>
                        </div>
                    </li>
                    <li>
                        <div class="agileits_services_grid">
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                            <h5>Global Service</h5>
                            <p>Vivamus malesuada pellentesque nunc id condimentum.</p>
                        </div>
                    </li>
                    <li>
                        <div class="agileits_services_grid">
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                            <h5>Global Service</h5>
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
                    direction: "vertical",
                    directionNav: false,
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
    </div>
</div>