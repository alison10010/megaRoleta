@extends('template.template')  {{-- USA O LAYOUT PADRÃO --}}
@section('title', 'Painel') {{-- TITULO DA PAGE --}}

@section('content') {{-- CONTEUDO DA PAGE - INICIO --}}

<!-- ***** Special Area Start ***** -->
<section class="special-area bg-white section_padding_100" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading Area -->
                <div class="section-heading text-center">
                    <h3>Remova os números</h3>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>

        <label style="color: #5b32b4;">O jogo vai marcar 5 números a cada 10, marque no máximo 5 números por dezenas para não sair nos números aleatórios.</label>

        <div class="row">
            <!-- Single Special Area -->
            <div class="col-12 col-md-12">
                <div class="single-special text-center wow fadeInUp" style="height: 37rem;" data-wow-delay="0.2s">
                    <div class="single-icon">
                        <i class="ti-world" aria-hidden="true"></i>
                    </div>   
                        <p>
                            <?php
                                for ($x = 1; $x <= 100; $x++) {                                                       
                                    echo '<button type="button" id='.$x.' class="dot" onclick="numberSelecionado('.$x.')">'.$x.'</button>';
                                }
                            ?>
                        </p>
                </div>
            </div>

        </div>
    </div>

    <br />

    <div class="form-inline" style="justify-content: center;">
        <center><button class="btn btn-danger btn-circle btn-lg" onclick="limpaNumbers();">Limpar</button></center>
        <center><button class="btn btn-primary btn-circle btn-lg" onclick="gerarNumeros();" style="margin-left: 16px;">Gerar</button></center>
    </div>
    <br />
    <div class="form-inline" style="justify-content: center;" id="welcome">
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
    </div>
    

</section>
<!-- ***** Special Area End ***** -->

@endsection  {{-- CONTEUDO DA PAGE - FIM --}}