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
            <div class=" row row-30-70 quienes-body">
                
                <? include 'layouts/sidebar-quienes-somos.php'; ?>
                
                <div class="col animated fadeInUp">
                    <h3>Lista de Accionistas</h3>
                    
                    <q>
                        Banchile Securitizadora es filial del Banco de Chile y es una sociedad anónima con giro exclusivo de adquisición de créditos a que se refiere el artículo 
                    </q>
                    
                    <hr>
                    
                    <h4>Listado de accionistas</h4>
                    <div class="row row-50-50">
                        <div class="col">
                           <ul>
                               <li><strong>RUT</strong></li>
                               <li>96.543.250-7</li>
                               <li><strong>Nombre</strong></li>
                               <li>Banchile Asesoría Financiera S.A.</li>
                               <li><strong>Dirección</strong></li>
                               <li>Av. Andrés Bello 2687 Piso 6</li>
                               <li><strong>Comuna</strong></li>
                               <li>Las Condes</li>
                               <li><strong>Acciones suscritas</strong></li>
                               <li>43</li>
                               <li><strong>Acciones pagadas</strong></li>
                               <li>43</li>
                           </ul>
                           <p>
                                Propiedad y Control de la Entidad:
                                Su propiedad está constituida en un 99% por el Banco de Chile y un 1% Banchile Asesoría Financiera S.A.
                            </p>
                        </div>
                        
                        <div class="col">
                            <ul>
                                <li><strong>RUT</strong></li>
                                <li>97.004.000-5</li>
                                <li><strong>Nombre</strong></li>
                                <li>Banco de Chile</li>
                                <li><strong>Dirección</strong></li>
                                <li>Ahumada 251</li>
                                <li><strong>Comuna</strong></li>
                                <li>Santiago</li>
                                <li><strong>Acciones suscritas</strong></li>
                                <li>4.307</li>
                                <li><strong>Acciones pagadas</strong></li>
                                <li>4.307</li>
                            </ul>
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
            $(".accionistas-content").addClass("animated fadeInUp");
            
        });
    </script>
    <!--build-js-end-->
</body>

</html>