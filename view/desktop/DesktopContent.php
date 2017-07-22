<?php
$m = new Managed();
?>
<!-- Navbar and Header -->
<nav class="nav-extended blue-grey darken-4">
    <div class="nav-background">
        <!--div class="pattern active" style="background-image: url('http://placehold.it/1400x300');"></div-->
        <?php echo '<div class="pattern active" style="background-image: url(\'' . HTTP_PATH . 'images/sexy_legs_black.jpg\');"></div>'; ?>
    </div>
    <div class="nav-wrapper container">
        <a href="index.html" class="brand-logo" style="color:#B71C1C;"><i class="material-icons">star</i>Red</a>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <?php
            if (!isset($_SESSION['user'])) {
                echo '<li><a href="?view=login">Ingresar</a></li>';
            } else {
                echo '<li><a href="#">' . $_SESSION['user']->user . '</a></li>';
                echo '<li><a href="?view=data">Datos</a></li>';
                echo '<li><a href="?view=message">Mensajes</a></li>';
                echo '<li><a href="?view=logout">Cerrar Sesion</a></li>';
            }
            ?>
            <li><a href="docs.html">Contacto</a></li>
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
    <div class="categories-wrapper red darken-4">
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
<ul class="side-nav red darken-4" id="nav-mobile">
    <?php
    if (!isset($_SESSION['user'])) {
        echo '<li><a href="?view=login"><i class="material-icons">edit</i>Ingresar</a></li>';
    } else {
        echo '<li><a href="?view=data"><i class="material-icons">school</i>' . $_SESSION['user']->user . '</a></li>';
        echo '<li><a href="?view=logout"><i class="material-icons">edit</i>Cerrar Sesion</a></li>';
    }
    ?>
    <li><a href="docs.html"><i class="material-icons">school</i>Contacto</a></li>
</ul>

<div class="row">
    <div class="col s9">
        <!-- Gallery -->          
        <div id="portfolio" class="section gray">
            <div class="container">                        
                <div class="gallery row">
                    <?php
                    $stmt = $m->getUsers(null);
                    foreach ($stmt as $row) {
                        echo '<div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter ' . $row->sex . '">
                        <div class="gallery-curve-wrapper">
                            <a class="gallery-cover gray">
                                <img class="responsive-img" src="' . HTTP_PATH . $row->nick . '" alt="placeholder">
                            </a>
                            <div class="gallery-header">
                                <span>' . $row->name . '</span>
                            </div>
                            <div class="gallery-body brown lighten-5">
                                <div class="title-wrapper">
                                    <h3 style="color:#b71c1c;">' . $row->name . '</h3>
                                </div>';
                        if ($row->video != null) {
                            echo '<div class="container">
                              <div class="row"><video class="responsive-video" controls>
                                    <source src="' . HTTP_PATH . $row->video . '" type="video/mp4">
                                  </video></div></div>';
                        }
                        echo '<div class="card-panel">';
                        echo '<span class="red-text text-darken-4" style="font-style:italic;font-size:large;">"' . $row->description . '"</span>';
                        echo '</div>';
                        echo '<footer class="page-footer red darken-4">
                                <div class="container">
                                  <div class="row">
                                    <div class="col l6 s12">
                                      <h5 class="white-text" style="text-decoration: underline;">Servicios</h5>
                                        <ul>';
                        $stmt = $m->getServices($row->id);
                        foreach ($stmt as $serv) {
                            echo '<li><a class="grey-text text-lighten-3" href="#!">' . $serv->name . '</a></li>';
                        }
                        echo '</ul>
                                    </div>
                                    <div class="col l4 offset-l2 s12">
                                      <h5 class="white-text" style="text-decoration: underline;">Sobre mi</h5>
                                      <ul>';
                        echo '<li><a class="grey-text text-lighten-3" href="#!">Medidas '.$row->measures.'</a></li>
                                         <li><a class="grey-text text-lighten-3" href="#!">Edad '.$row->age.'</a></li>
                                         <li><a class="grey-text text-lighten-3" href="#!">Fuma '.$row->smoking. '</a></li>
                                         <li><a class="grey-text text-lighten-3" href="#!">Telefono '.$row->public_phone. '</a></li>
                                         <li><a class="grey-text text-lighten-3" href="#!">Ubicacion '.$row->location. '</a></li>
                                             <li><a class="grey-text text-lighten-3" href="#!">Atencion '.$row->schedules. '</a></li>
                                    </ul>
                                    </div>
                                  </div>
                                </div>
                                <div  class="footer-copyright" style="font-size:15pt;">
                                  <div class="container">
                                  Tarifa
                                  <a class="grey-text text-lighten-4 right" href="#!">'.(empty($row->price)?'Consultar':'$'.$row->price).'</a>
                                  </div>
                                </div>
                              </footer>';
                        echo '<div class="card-panel"><div class="carousel center">';
                        $files = glob(ROOT_PATH . $row->album . '*');
                        $gallery = array();
                        $index = 0;
                        $token = uniqid();
                        foreach ($files as $file) {
                            $value = HTTP_PATH . $row->album . basename($file);
                            array_push($gallery, $value);
                            echo '<a class="carousel-item" onclick="galeria(' . $index . ',\'' . $token . '\');"><img src="' . HTTP_PATH . $row->album . basename($file) . '"></a>';
                            $index++;
                        }
                        echo '</div></div>
                            </div>
                            <div class="gallery-action">
                                <a class="btn-floating btn-large waves-effect waves-light" href="#modal1"><i class="material-icons dp48">textsms</i></a>
                            </div>                   
                        </div>
                    </div>';
                        $_SESSION[$token] = $gallery;
                        $_SESSION["name" . $token] = $row->name;
                    }
                    ?>
                </div>            
            </div>
        </div>
    </div>
    <div class="col s3">
        <div id="mensajes" class="collection" style="border:none;height: 100%;">
            <ul class="bxslider">
                <?php
                $stmt = $m->getMessages(null);
                foreach ($stmt as $row) {
                    echo '<li class="collection-item avatar">
                            <img src="'.HTTP_PATH.$row->nick.'" alt="" height="20px" width="20px" class="circle">                
                            <p>' . $row->name . '<br>' . $row->description . '</p>
                          </li>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>

