<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BCH - Securitizadora</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,700" rel="stylesheet">

    <!--build-css-start-->
    <link rel="stylesheet" href="css/reseter.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
    <!--build-css-end-->

</head>

<body>
    
    <? include "layouts/header.php"; ?>
    
    <div id="content">
        <div class="wrapper">
            <div class="heading">
                <img src="img/quienes-header.png">
                <h1>Emisiones</h1>
            </div>
            <div class="row row-100">
                <div class="col">
                    <h2>Emisiones realizadas a la fecha</h2>
                    <p>Click sobre la imagen para ampliar</p>
                </div>
            </div>
               <div class="row row-50-50 emisiones-body">
                <div class="col">
                    <div id="carousel" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="img/ico-emisiones.png" />
                            </li>
                            <li>
                                <img src="img/ico-emisiones.png" />
                            </li>
                            <li>
                                <img src="img/ico-emisiones.png" />
                            </li>
                            <li>
                                <img src="img/ico-emisiones.png" />
                            </li> 
                            <li>
                                <img src="img/ico-emisiones.png" />
                            </li> 
                            <li>
                                <img src="img/ico-emisiones.png" />
                            </li>
                            <li>
                                <img src="img/ico-emisiones.png" />
                            </li>  
                            <li>
                                <img src="img/ico-emisiones.png" />
                            </li>
                            <li>
                                <img src="img/ico-emisiones.png" />
                            </li> 
                            <li>
                                <img src="img/ico-emisiones.png" />
                            </li>
                            <li>
                                <img src="img/ico-emisiones.png" />
                            </li>  
                            <li>
                                <img src="img/ico-emisiones.png" />
                            </li>
                            <li>
                                <img src="img/ico-emisiones.png" />
                            </li>         
                        </ul>
                    </div>
                </div>
                
                <div class="col">
                    <section class="slider">
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="img/ico-emisiones.png" />
                                </li>
                                <li>
                                    <img src="img/ico-emisiones.png" />
                                </li>
                                <li>
                                    <img src="img/ico-emisiones.png" />
                                </li>
                                <li>
                                    <img src="img/ico-emisiones.png" />
                                </li>
                                <li>
                                    <img src="img/ico-emisiones.png" />
                                </li>
                                <li>
                                    <img src="img/ico-emisiones.png" />
                                </li>
                                <li>
                                    <img src="img/ico-emisiones.png" />
                                </li>
                                <li>
                                    <img src="img/ico-emisiones.png" />
                                </li>
                                <li>
                                    <img src="img/ico-emisiones.png" />
                                </li>
                                <li>
                                    <img src="img/ico-emisiones.png" />
                                </li>
                                <li>
                                    <img src="img/ico-emisiones.png" />
                                </li>
                                <li>
                                    <img src="img/ico-emisiones.png" />
                                </li>
                                <li>
                                    <img src="img/ico-emisiones.png" />
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    
    <? include "layouts/footer.php"; ?>
    
    <!--build-js-start-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {

            $("#carousel.flexslider").addClass("animated fadeInLeft");
            $("#slider.flexslider").addClass("animated fadeInUp");
              
        });

    </script>
    <!--build-js-end-->
</body>

</html>