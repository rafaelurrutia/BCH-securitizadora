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
                    <img src="img/ventajas-header.png">
                    <h1>Ventajas de Securitizar</h1>
                </div>
                <div class="row row-30-70 ventajas-top">
                    <div class="col texto">
                        Acérquese hoy mismo a nuestra oficina ubicada y trabaje con verdaderos expertos en securitización.
                    </div>
                    <div class="col">

                        <ul class="dated-items">
                            <li>
                                Permite dar liquidez a activos ilíquidos
                            </li>
                            <li>
                                Permite optimizar el precio de venta de la cartera al separar y distribuir el riesgo de acuerdo a las necesidades de los inversionistas.
                            </li>
                            <li>
                                Permite acceder a nuevas fuentes de financiamiento: Fondos Administrados por Inversionistas Privados e Institucionales (AFP’s y Cías de Seguros), Fondos Mutuos y Bancos.
                            </li>
                            <li>
                                Permite mejorar las Razones de Patrimonio de la Empresa originadora de los créditos, ya que implica una venta efectiva de activos y por lo tanto posibilita la reducción de niveles de endeudamiento (Leverage).
                            </li>
                            <li>
                                Permite aumentar el volumen de negocios (colocaciones) con el mismo capital de trabajo.
                            </li>
                            <li>
                                Le permite a la Empresa originadora de los créditos mantener el negocio de administración de las cuentas por Cobrar y el negocio financiero (genera un spread mayor).
                            </li>
                            <li>
                                Aumenta la competitividad de la Empresa ya que puede acceder a una mayor flexibilidad en las condiciones de Financiamiento
                            </li>
                            <li>
                                Permite acelerar el plan de expansión del negocio.
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="row row-30-70 ventajas-bottom">
                    <div class="col" style="background-image:url(img/ventajas-content.png);"></div>
                    <div class="col">
                        <h3>¿Por qué trabajar<br>con Banchile Securitizadora?</h3>
                        <ul>
                            <li>Contamos con el apoyo del Banco de Chile.</li>
                            <li>Tenemos un mayor conocimiento del mercado del producto, ya que somos los únicos que hemos hecho bonos de Facturas y Créditos Sociales.</li>
                            <li>Tenemos los costos más competitivos del mercado.</li>
                            <li>Contamos con gran capacidad de distribución de los Bonos a través del Banco y de Banchile Corredores de Bolsa.</li>
                            <li>Tenemos la posibilidad de ofrecer Underwriting de Bonos.</li>
                        </ul>
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

                    $(".texto").addClass("animated fadeInLeft");
                    $(".dated-items").addClass("animated fadeInUp");

                    $('.ventajas-bottom').waypoint(function() {
                        $('.ventajas-bottom').addClass('animated fadeInRight');
                    }, {
                        offset: '75%'
                    });

                });

            </script>
            <!--build-js-end-->
</body>

</html>
