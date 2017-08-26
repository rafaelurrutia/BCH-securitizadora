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

        <? include "layouts/header-home.php"; ?>

            <div id="content" class="home">
                <div class="wrapper">

                    <!--           COMPONENTE -->
                    <? include "layouts/BCH-HTML-SECURITIZADORA-INICIO-INVIERTA.php"; ?>

                        <!--            COMPONENTE MENU-->
                        <? include "layouts/BCH-HTML-SECURITIZADORA-INICIO-NOVEDADES.php"; ?>

                            <div class="row row-33-33-33 box-home">
                                <div class="col">
                                    <a href="comunicaciones.php">
                                        <h3>Comunicaciones</h3>
                                        <p>Descarga acá las Memorias anuales , Comunicados de prensa y otros documentos relevantes.</p>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="preguntas-frecuentes.php">
                                        <h3>Preguntas Frecuentes</h3>
                                        <p>Descarga acá los documentos</p>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="">
                                        <h3>Descarga</h3>
                                        <img src="img/icon-pdf-home.png" alt="">
                                        <b>Manual de Manejo de Información de Interés para el Mercado (PDF)</b> 
                                    </a>
                                </div>
                            </div>

                            <div class="row row-100 link-interes">
                                <div class="">
                                    <div class="col">
                                        <h3>Links de interés:</h3>
                                        <ul>
                                            <li><a href="">Feller-Rate</a></li>
                                            <li><a href="">Acfin</a></li>
                                            <li><a href="">Humphreys</a></li>
                                            <li><a href="">Fitch Rating</a></li>
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

                        $('.message').addClass("animated fadeInUp");
                        $('.message').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                            $('.message h2, .message h3').addClass("animated");
                            $('.message h2').addClass("fadeInLeft");
                            $('.message h3').addClass("fadeInLeft");
                        });

                        $('.invierta-con-nosotros').waypoint(function() {
                            $('.invierta-con-nosotros').addClass('animated fadeInLeft');
                        }, {
                            offset: '75%'
                        });

                        $('.novedades').waypoint(function() {
                            $('.novedades').addClass('animated fadeInUp');
                            addClassDelay(".dated-items", "li", "animated fadeInLeft", 250);
                        }, {
                            offset: '75%'
                        });

                        $('.box-home').waypoint(function() {
                            $('.box-home').addClass('animated fadeInLeft');
                        }, {
                            offset: '75%'
                        });

                        $('.link-interes').waypoint(function() {
                            $('.link-interes').addClass('animated fadeInLeft');
                        }, {
                            offset: '75%'
                        });

                    });

                </script>
                <!--build-js-end-->

</body>

</html>
