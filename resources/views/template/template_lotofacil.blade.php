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

    <style>
        .header_area.sticky {
            background-color: #3f57bf; 
        }
        #scrollUp {
            background-color: #3f57bf;
        }
    </style>

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
                            <a class="navbar-brand" href="{{route('lotofacil')}}" style="font-size: 40px !important;">Lotofácil</a>
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
    <section class="wellcome_area_lotofacil clearfix" id="home">
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
                        <h3>Últimos sorteios</h3>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row" id="ultimosJogos">
                <!-- Single Feature Start -->
                {{-- <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-world" aria-hidden="true"></i>
                        <h5>Concurso 2350 (10/08/2022)</h5>
                        <p>
                            <label class="resultado">03</label> 
                        </p>
                    </div>
                </div> --}}
            </div>

        </div>
    </section>
    <!-- ***** Awesome Features End ***** -->
    
    <!-- ***** Awesome Features Start ***** -->
    <section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <h3>Números que mais sairam</h3>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        <center>
            <button class="btn btn-azul btn-circle btn-lg" style="margin-bottom: 7px;" onclick="listaRepeticao(10);">10 últimos jogos</button>
            <button class="btn btn-azul btn-circle btn-lg" style="margin-bottom: 7px" onclick="listaRepeticao(20);">20 últimos jogos</button>
            <button class="btn btn-azul btn-circle btn-lg" style="margin-bottom: 7px" onclick="listaRepeticao(30);">30 últimos jogos</button>
            <button class="btn btn-azul btn-circle btn-lg" style="margin-bottom: 7px" onclick="listaRepeticao(40);">40 últimos jogos</button>
            <button class="btn btn-azul btn-circle btn-lg" style="margin-bottom: 7px" onclick="listaRepeticao(50);">50 últimos jogos</button>
        </center>
        <br />
            <div class="row">

                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-12 top">
                    <div class="container">
                        <div class="row" id="myItemList">

                            {{-- <ul class="dezenas-sc dezenas-sc--sorteio-0 dezenas-sc--lotomania">

                                <li class="dezenas-sc__item shortcode dezenas-sc__item--lotomania">
                                    <div class="dezenas-sc__dezena shortcode dezenas-sc__dezena--lotomania">47</div>
                                    <div class="dezenas-sc__quantidade shortcode dezenas-sc__quantidade--lotomania">523 vezes</div>
                                </li>                           

                            </ul> --}}

                            {{-- <ul class="dezenas-sc dezenas-sc--sorteio-0 dezenas-sc--lotomania" id="myItemList"></li> --}}
                          
                        </div>
                      </div>
                      <br />
                      <div class="form-inline" style="justify-content: center;" id="adsLotomaniaTemplate">
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

    <script src="function/lotofacil.js"></script>

    <script src="function/api_lotofacil.js"></script>

    <script src="function/ultimosJogosLotofacil.js"></script> 
</body>

</html>
