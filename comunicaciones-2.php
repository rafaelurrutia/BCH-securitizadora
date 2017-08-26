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
    <link rel="stylesheet" href="css/main.css">
    <!--build-css-end-->

</head>

<body>
    
    <? include "layouts/header.php"; ?>
    
    <div id="content">
        <div class="wrapper">
            <div class="heading">
                <img src="img/comunicaciones-header.png">
                <h1>Comunicaciones</h1>
            </div>
            <div class="row row-30-70">
                <div class="col sidebar">

                    <ul class="nav-icon">
                        <li class="active">
                            <a href="comunicaciones-2.html"><i><img src="img/ico-com-1.svg" alt=""></i><span>Memoria Anual</span></a>
                        </li>
                        <li>
                            <a href="#"><i><img src="img/ico-com-2.svg" alt=""></i><span>Comunicados de Prensa</span></a>
                        </li>
                        <li>
                            <a href="#"><i><img src="img/ico-com-3.svg" alt=""></i><span>Hechos Escenciales</span></a>
                        </li>
                        <li>
                            <a href="#"><i><img src="img/ico-com-4.svg" alt=""></i><span>Avisos de Citación</span></a>
                        </li>
                        <li>
                            <a href="#"><i><img src="img/ico-com-5.svg" alt=""></i><span>Estados Financieros</span></a>
                        </li>
                        <li>
                            <a href="#"><i><img src="img/ico-com-6.svg" alt=""></i><span>Otras Materias de Interés</span></a>
                        </li>
                    </ul>

                </div>
                <div class="col">
                    <div class="border-box">

                        <h2>Memoria Anual</h2>
                        <ul class="dated-items style-2">
                            <li>
                                <a href="">Décimo Sexta Memoria y Balance al 31 de Diciembre de 2016 Banchile Securitizadora S.A.</a>
                            </li>
                            <li>
                                <a href="">Décimo Quinta Memoria y Balance al 31 de Diciembre de 2015 Banchile Securitizadora S.A.</a>
                            </li>
                            <li>
                                <a href="">Décimo Cuarta Memoria y Balance al 31 de Diciembre de 2014 Banchile Securitizadora S.A.</a>
                            </li>
                            <li>
                                <a href="">Décimo Tercera Memoria y Balance al 31 de Diciembre de 2013 Banchile Securitizadora S.A.</a>
                            </li>
                            <li>
                                <a href="">Décima Segunda Memoria y Balance al 31 de Diciembre de 2012 Banchile Securitizadora S.A.</a>
                            </li>
                            <li>
                                <a href="">Décima Primera Memoria y Balance al 31 de Diciembre de 2011 Banchile Securitizadora S.A.</a>
                            </li>
                            <li>
                                <a href="">Décima Memoria y Balance al 31 de Diciembre de 2010 Banchile Securitizadora S.A.</a>
                            </li>
                            <li>
                                <a href="">Novena Memoria y Balance al 31 de Diciembre de 2009 Banchile Securitizadora S.A.</a>
                            </li>
                        </ul>
                    </div>
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

            addClassDelay(".dated-items", "li", "animated fadeInUp", 250);
            
            $(".nav-icon").addClass("animated fadeInLeft");
           
        });

    </script>
    <!--build-js-end-->

</body>

</html>
