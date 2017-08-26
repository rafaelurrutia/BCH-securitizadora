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
            <div class="row row-30-70">
                
                <? include 'layouts/sidebar-quienes-somos.php'; ?>
                
                <div class="col">
                    <div class="border-box">
                        <h2>Estatutos de Banchile Securitizadora</h2>
                        <ul class="dated-items style-4">
                            <li>
                                <a href="">Escritura Constitución</a>
                            </li>
                            <li>
                                <a href="">Certificado Autorización Reforma</a>
                            </li>
                            <li>
                                <a href="">Certificado Autorización Existencia</a>
                            </li>
                            <li>
                                <a href="">Segunda Modificación</a>
                            </li>
                            <li>
                                <a href="">Primera Modificación</a>
                            </li>
                            <li>
                                <a href="">Certificado Autorización Segunda Reforma</a>
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
               
            $(".dated-items").addClass("animated fadeInUp");
            $(".nav-icon").addClass("animated fadeInLeft");
            
        });
    </script>
    <!--build-js-end-->
</body>

</html>