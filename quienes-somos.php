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
                <h1>Quienes Somos</h1>
            </div>
            <div class="row row-30-70 quienes-body">
                
                <? include 'layouts/sidebar-quienes-somos.php'; ?>
                
                <div class="col animated fadeInUp">
                    <h2>Quienes Somos</h2>
                    <p>
                        <q>
            Banchile Securitizadora es filial del Banco de Chile y es una sociedad anónima con giro exclusivo de adquisición de créditos a que se refiere el artículo 
          </q>
                    </p>
                    <p>
                        Banchile Securitizadora es filial del Banco de Chile y es una sociedad anónima con giro exclusivo de adquisición de créditos a que se refiere el artículo 135 de la Ley 18.045 de Mercado de Valores y la emisión de Títulos de deuda, que originará la formación de patrimonios separados del patrimonio común de la sociedad.
                    </p>
                    <p>
                        Banchile Securitizadora S.A. (ex Banedwards Securitizadora S.A.) se constituyó por escritura pública de fecha 26 de Julio de 2000, otorgada en la Notaría de Santiago de don Andrés Rubio Flores..
                    </p>
                    <p>
                        Los estatutos de Banchile Securitizadora S.A. fueron aprobados con Resolución Exenta N° 258 de fecha 20 de septiembre de 2000 de la Superintendencia de Valores y Seguros.
                    </p>
                    <p>
                        El 20 de diciembre de 2001, se acordó el cambio de nombre de Banedwards Securitizadora S.A. por Banchile Securitizadora S.A y con fecha 6 de febrero de 2002, la Superintendencia de Valores y Seguros aprobó esta modificación de sus estatutos, siendo publicado en el Diario Oficial el 13 de febrero de 2002.
                    </p>

                    <hr>
                    <div class="row row-50-50">
                        <div class="col">
                            <h2>¿Qué es la Securitización?</h2>

                            <p>La Securitización consiste en transformar un conjunto de activos de baja liquidez en instrumentos de deuda con rating crediticio.</p>

                            <p>La Securitización se realiza a través de la estructuración financiera de una o varias series de bonos que se sirven con los flujos que generan los activos subyacentes.</p>

                            <p>Existe una amplia variedad de activos a ser securitizados:</p>
                            
                            <ol>
                                <li>Créditos Hipotecarios</li>
                                <li>Créditos de Consumo</li>
                                <li>Tarjetas de Crédito</li>
                                <li>Créditos Sociales</li>
                                <li>Contratos de Leasing</li>
                                <li>Créditos Universitarios</li>
                                <li>Créditos Automotrices</li>
                                <li>Útiles y proyectos de infraestructura</li>
                                <li>Cuentas por Cobrar Facturas</li>
                                <li>Flujos Futuros</li>
                            </ol>
                            
                            <p>Los potenciales inversionistas de bonos securitizados son: privado o institucionales, locales o extranjeros, principalmente AFP´s y Cías de Seguros.</p>
                        </div>
                        <div class="col">
                            <img src="img/img-quienes-somos-1.png">
                            <img src="img/img-quienes-somos-2.png">
                        </div>
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
               
            $(".nav-icon").addClass("animated fadeInLeft");
            $(".inner").addClass("animated fadeInUp");
            
        });
    </script>
    <!--build-js-end-->
</body>

</html>