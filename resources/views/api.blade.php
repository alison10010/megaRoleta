<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>MegaLoteria</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Css Manual -->
    <link href="cssManual.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#" style="font-size: 40px !important;">Lotomania</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">                                
                                    <li class="nav-item"><a class="nav-link" href="{{route('lotofacil')}}">Lotofácil</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('lotomania')}}">Lotomania</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('api')}}">Api</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                    <div class="wellcome-heading">
                        <h2>Simples e Fácil</h2>
                        <h3>L</h3>
                        <h4 style="color: #fff">Aumente suas chances de ganhar</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
    </section>
    <!-- ***** Wellcome Area End ***** -->

    @yield('content') {{-- CONTEUDO DAS PAGINAS --}}

    <!-- ***** Awesome Features Start ***** -->
    <section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <h3>API de Resultados das Loterias</h3>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <h5>URL dos Serviços</h5>

            <div class="row">
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-10 col-lg-10">
                    <div class="single-feature">
                        <h5>Api - Resultado especifico</h5>
                        <p>
                            /api/v1/lotomania/concurso/ + concurso<br />                            
                            exemplo: https://megaloteria.epizy.com/api/v1/lotomania/concurso/2344<br /><br />

                            /api/v1/lotofacil/concurso/ + concurso<br />
                            exemplo: https://megaloteria.epizy.com/api/v1/lotofacil/concurso/2600<br /><br />

                          <script type="text/javascript">
                            if (screen.width < 640 || screen.height < 480) {
                            // sirva a versão pra celular
                            } else if (screen.width < 1024 || screen.height < 768) {
                                // tablet
                            } else {
                                atOptions = {
                                    'key' : '5a95c58de76fac7bc61bc092ed4eca2a',
                                    'format' : 'iframe',
                                    'height' : 60,
                                    'width' : 468,
                                    'params' : {}
                                };
                                document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/5a95c58de76fac7bc61bc092ed4eca2a/invoke.js"></scr' + 'ipt>');
                            }
                        </script>
                        
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-lg-10">
                    <div class="single-feature">
                        <h5>Api - últimos jogos</h5>
                        <p>
                            /api/v1/lotomania/concurso/last/ + últimos jogos<br />
                            exemplo: https://megaloteria.epizy.com/api/v1/lotomania/concurso/last/10<br /><br />

                            /api/v1/lotofacil/concurso/last/ + últimos jogos<br />
                            exemplo: https://megaloteria.epizy.com/api/v1/lotofacil/concurso/last/10<br /><br />

                          <script type="text/javascript">
                            if (screen.width < 640 || screen.height < 480) {
                            // sirva a versão pra celular
                            } else if (screen.width < 1024 || screen.height < 768) {
                                // tablet
                            } else {
                                atOptions = {
                                    'key' : '677fa7b418905e872d89565f90a1569d',
                                    'format' : 'iframe',
                                    'height' : 50,
                                    'width' : 320,
                                    'params' : {}
                                };
                                document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/677fa7b418905e872d89565f90a1569d/invoke.js"></scr' + 'ipt>');
                                }
                            </script>
                        </p>
                    </div>
                </div>

                <div class="col-12 col-sm-10 col-lg-10">
                    <div class="single-feature">
                        <h5>Api - Números e suas repetição nos últimos jogos</h5>
                        <p>
                            /api/v1/lotomania/last/ + últimos jogos<br />
                            exemplo: https://megaloteria.epizy.com/api/v1/lotomania/last/10<br /><br />

                            /api/v1/lotofacil/last/ + últimos jogos<br />
                            exemplo: https://megaloteria.epizy.com/api/v1/lotofacil/last/10<br /><br />

                          <script type="text/javascript">
                            if (screen.width < 640 || screen.height < 480) {
                            // sirva a versão pra celular
                            } else if (screen.width < 1024 || screen.height < 768) {
                                // tablet
                            } else {
                                atOptions = {
                                    'key' : '677fa7b418905e872d89565f90a1569d',
                                    'format' : 'iframe',
                                    'height' : 50,
                                    'width' : 320,
                                    'params' : {}
                                };
                                document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/677fa7b418905e872d89565f90a1569d/invoke.js"></scr' + 'ipt>');
                                }
                            </script>
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ***** Awesome Features End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- Foooter Text-->
        <div class="copyright-text">
            <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
            <p>Copyright ©2022 - <b>MegaRoleta</b></p>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>

    <script src="function/jsManual.js"></script>
</body>

</html>
