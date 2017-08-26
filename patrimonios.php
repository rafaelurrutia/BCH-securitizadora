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
                    <img src="img/quienes-header.png">
                    <h1>Patrimonios</h1>
                </div>
                <div class="row row-100 patrimonios-body">
                    <div class="col paginacion">
                        <h4>Seleccione:</h4>
                        <div>
                            <a href="" class="visible-xs-inline-block"></a>
                            <ul>
                                <li class="active"><a href="">12</a></li>
                                <li><a href="">13</a></li>
                                <li><a href="">17</a></li>
                                <li><a href="">18</a></li>
                            </ul>
                            <a href="" class="visible-xs-inline-block"></a>
                        </div>
                    </div>

                    <div class="col">
                        <div class="border-box">
                            <section class="slider">
                                <div id="patrimonio-slider" class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <h2>Patrimonio Separado Nº 1</h2>
                                            <p>N° de Inscripción de la Emisión en el Registro de Valores: N° 441 de fecha 17 de noviembre de 2005.</p>
                                            <ul class="dated-items style-3">
                                                <li>
                                                    <a href="">Prospecto</a>
                                                </li>
                                                <li>
                                                    <a href="">Informe Clasificadores de Riesgo 1</a>
                                                </li>
                                                <li>
                                                    <a href="">Informe Clasificadores de Riesgo 2</a>
                                                </li>
                                                <li>
                                                    <a href="">Reporte de Comportamiento del Patrimonio Separado: Información disponible en www.acfin.cl</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h2>Patrimonio Separado Nº 12</h2>
                                            <p>N° de Inscripción de la Emisión en el Registro de Valores: N° 441 de fecha 17 de noviembre de 2005.</p>
                                            <ul class="dated-items style-3">
                                                <li>
                                                    <a href="">Prospecto</a>
                                                </li>
                                                <li>
                                                    <a href="">Informe Clasificadores de Riesgo 1</a>
                                                </li>
                                                <li>
                                                    <a href="">Informe Clasificadores de Riesgo 2</a>
                                                </li>
                                                <li>
                                                    <a href="">Reporte de Comportamiento del Patrimonio Separado: Información disponible en www.acfin.cl</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h2>Patrimonio Separado Nº 3</h2>
                                            <p>N° de Inscripción de la Emisión en el Registro de Valores: N° 441 de fecha 17 de noviembre de 2005.</p>
                                            <ul class="dated-items style-3">
                                                <li>
                                                    <a href="">Prospecto</a>
                                                </li>
                                                <li>
                                                    <a href="">Informe Clasificadores de Riesgo 1</a>
                                                </li>
                                                <li>
                                                    <a href="">Informe Clasificadores de Riesgo 2</a>
                                                </li>
                                                <li>
                                                    <a href="">Reporte de Comportamiento del Patrimonio Separado: Información disponible en www.acfin.cl</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h2>Patrimonio Separado Nº 4</h2>
                                            <p>N° de Inscripción de la Emisión en el Registro de Valores: N° 441 de fecha 17 de noviembre de 2005.</p>
                                            <ul class="dated-items style-3">
                                                <li>
                                                    <a href="">Prospecto</a>
                                                </li>
                                                <li>
                                                    <a href="">Informe Clasificadores de Riesgo 1</a>
                                                </li>
                                                <li>
                                                    <a href="">Informe Clasificadores de Riesgo 2</a>
                                                </li>
                                                <li>
                                                    <a href="">Reporte de Comportamiento del Patrimonio Separado: Información disponible en www.acfin.cl</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </section>

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

                });

            </script>
            <!--build-js-end-->
</body>

</html>
