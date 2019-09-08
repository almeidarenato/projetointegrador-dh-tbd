<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PhoneVerse</title>

    <!-- Range Requires -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/fd9dba5260.js"></script>

    <!--< Componente Range  >-->
    <script render src="js/range.js"></script>
    <link rel="stylesheet" href="css/range.css">
    <!--</ Componente Range > -->

    <!--<MultiStep> -->
    <link rel="stylesheet" type="text/css" href="/css/MultiStep.min.css">
    <link rel="stylesheet" type="text/css" href="/css/MultiStep-theme.min.css">
    <!--</MultiStep> -->
    <!-- Bootstrap Core CSS -->
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- icon -->
    <link rel="apple-touch-icon" sizes="152x152" href="frontend/icon/apple-touch-icon.png">
    <link rel="icon" type="frontend/image/png" sizes="32x32" href="frontend/icon/favicon-32x32.png">
    <link rel="icon" type="frontend/image/png" sizes="16x16" href="frontend/icon/favicon-16x16.png">
    <link rel="manifest" href="frontend/icon/site.webmanifest">
    <link rel="mask-icon" href="frontend/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Fonts -->
    <link href="frontend/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="frontend/css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="frontend/css/style.css" rel="stylesheet">
    <link href="frontend/color/default.css" rel="stylesheet">



</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <!-- Preloader -->
    <div id="preloader">
        <div id="load"></div>
    </div>
    @include('frontend.header')
    <!-- Section: intro -->
    <section id="intro" class="intro">

        <div class="slogan">
            <h2><span class="text_color">Clique e conheça o seu próximo smartphone</span> </h2>
            <h4></h4>
        </div>
        <div class="page-scroll">
            <a href="#service" class="btn btn-circle">
                <i class="fa fa-angle-double-down animated"></i>
            </a>
        </div>
    </section>
    <!-- /Section: intro -->

    <!-- Section: about -->
    <section id="about" class="home-section text-center">
        <div class="heading-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow bounceInDown" data-wow-delay="0.4s">
                            <div class="section-heading">
                                <h2>Sobre Nós</h2>
                                <i class="fa fa-2x fa-angle-down"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-2 col-lg-offset-5">
                    <hr class="marginbot-50">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                        <div class="team boxed-grey">
                            <div class="inner">
                                <h5>Anna Hanaceck</h5>
                                <p class="subtitle">Pixel Crafter</p>
                                <div class="avatar"><img src="frontend/img/team/1.jpg" alt="" class="img-responsive img-circle" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wow bounceInUp" data-wow-delay="0.5s">
                        <div class="team boxed-grey">
                            <div class="inner">
                                <h5>Maura Daniels</h5>
                                <p class="subtitle">Ruby on Rails</p>
                                <div class="avatar"><img src="frontend/img/team/2.jpg" alt="" class="img-responsive img-circle" /></div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wow bounceInUp" data-wow-delay="0.8s">
                        <div class="team boxed-grey">
                            <div class="inner">
                                <h5>Jack Briane</h5>
                                <p class="subtitle">jQuery Ninja</p>
                                <div class="avatar"><img src="frontend/img/team/3.jpg" alt="" class="img-responsive img-circle" /></div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wow bounceInUp" data-wow-delay="1s">
                        <div class="team boxed-grey">
                            <div class="inner">
                                <h5>Tom Petterson</h5>
                                <p class="subtitle">Typographer</p>
                                <div class="avatar"><img src="frontend/img/team/4.jpg" alt="" class="img-responsive img-circle" /></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: about -->


    <!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">

        <div class="heading-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow bounceInDown" data-wow-delay="0.4s">
                            <div class="section-heading">
                                <h2>Seu Smartphone</h2>
                                <i class="fa fa-2x fa-angle-down"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-lg-offset-5">
                    <hr class="marginbot-50">
                </div>
            </div>

            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="frontend/img/think.png" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5>Me ajude a escolher</h5>
                            <p>Escolhendo esta opção, nós te mostraremos as melhores opções de aparelhos com base em suas respostas em um rápido questionário </p>
                            <button type="button" class="buttonsp" data-toggle="modal" data-target="#submitModal">Preciso de Ajuda</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInRight" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon">
                            <img src="frontend/img/light.png" alt="" />
                        </div>
                        <div class="service-desc">
                            <h5>Eu sei exatamente oque preciso</h5>
                            <p>Escolhendo esta opção, você poderá escolher cada detalhe especifico dos aparelhos que deseja ver. </h2>
                            </p>
                            <button type="button" class="buttonsp" data-toggle="modal2" data-target="#eu-sei">Eu me viro</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
    <!-- /Section: services -->

@auth

@endauth
    <div id="submitModal" class="multi-step">

    </div>

    <!-- iframe 1 -->
    <div class="modal fade me-ajude-a-escolher" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div id='menuesquerda'>
                            <h1> Olá, tudo bem? Nós somos a Phoneverse e estamos aqui para te ajudar a encontrar seu novo celular. </h4>
                            <div>
                                teste
                            </div>
                            <h1>1 - Vamos começar? Primeiramente, qual o seu nome?</h5>
                            <div class="form-group">
                                oi 2
                            </div>
                            <h1>2 - Olá {nome} ! Então você precisa de um novo celular? vamos te ajudar, qual a sua idade?</h1>
                            <div class="form-group">
                            3 - Agora nos conte o motivo de você precisar de um novo aparelho.
                            > Meu atual quebrou :(
                            > Meu celular vive na tomada, parece telefone fixo (bateria não dura)
                            > Meu celular trava
                            > Enjoei da cara dele

                            4 - Qual o seu aparelho atual?

                            5- Você usa mais o celular para:
                            > Jogar (e rodar benchmarks pra esfregar na cara dos outros :D)
                            > Acessar redes sociais e ouvir musica
                            > Assistir vídeos e ler
                            > Trabalhar
                            > Tirar Fotos e Gravar vídeos
                            > Fazer Ligações (sério? O.o)

                            6 - Agora, Nos diga seu e-mail

                            7 - Crie uma senha para cadastrarmos você e salvarmos suas respostas

                            Obrigado! Aguarde que vamos te direcionar para as melhores opções para você ;)
                        </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- /iframe2 -->
    <div class="modal fade eu-sei" id='eu-sei' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                <h4>Olá, tudo bem? Nós somos a Phoneverse e estamos aqui para te ajudar a encontrar seu novo celular. Aqui você pode selecionar as especificações que mais te chamam a atenção:</h4>
                <form>
                <div class="form-group">
                    <h5>Marca</h5>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Motorola</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Apple</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                        <label class="custom-control-label" for="customCheck3">Samsung</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Xiaomi</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                        <label class="custom-control-label" for="customCheck5">LG</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                        <label class="custom-control-label" for="customCheck6">Asus</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                        <label class="custom-control-label" for="customCheck7">Google Pixel</label>
                    </div>
                </div>
                <div class="form-group">
                    <h5>Versão do Sistema</h5>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck8">
                        <label class="custom-control-label" for="customCheck8">iOs 12</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck9">
                        <label class="custom-control-label" for="customCheck9">Android 7</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck10">
                        <label class="custom-control-label" for="customCheck10">Android 8</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck11">
                        <label class="custom-control-label" for="customCheck11">Android 9</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck12">
                        <label class="custom-control-label" for="customCheck12">Android 10</label>
                    </div>
                </div>
                <div class="form-group">
                    <h5>Processador</h5>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck13">
                        <label class="custom-control-label" for="customCheck13">Snapdragon</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck14">
                        <label class="custom-control-label" for="customCheck14">Exynos</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck15">
                        <label class="custom-control-label" for="customCheck15">Apple A</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck16">
                        <label class="custom-control-label" for="customCheck16">Mediatek</label>
                    </div>
                </div>
                <div class="form-group">
                    <h5>Tamanho</h5>

                    Range
                </div>
                <span class="border border-white">
                    <div class="form-group">
                        <h5>Memoria RAM</h5>
                        <div class="custom-control custom-checkbox">
                                <div class="col-md-6" >
                                    <div class="slider-wrapper slider-primary  slider-ghost">
                                        <input class="input-range" type="text" data-slider-step="1" data-slider-value="1" data-slider-min="1" data-slider-max="12" data-slider-range="true" data-slider-tooltip_split="true" />
                                    </div>
                                </div>
                            </div>
                    </div>
                </span>
                <div class="form-group">
                    <h5>Memoria Interna</h5>
                </div>
                <div class="form-group">
                    <h5>Camera</h5>
                    >
                    >
                    >
                    >
                </div>
                <div class="form-group">
                    <h5>Bateria</h5>
                </div>
                <div class="form-group">
                    <h5>Preço</h5>
                    <div class="custom-control custom-checkbox">
                        <div class="col-md-6" >
                            <div class="slider-wrapper slider-primary  slider-ghost">
                                <input class="input-range" type="text" data-slider-step="1" data-slider-value="1000,3000" data-slider-min="400" data-slider-max="6000" data-slider-range="true" data-slider-tooltip_split="true" />
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                <h5>Agora, Nos diga seu e-mail</h5>
                <input class="form-control" type="text" placeholder="email@email.com.br" autocomplete="username">
                </div>
                <div class="form-group">
                    <h5>Crie uma senha para cadastrarmos você e salvarmos suas respostas</h5>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" autocomplete="new-password">
                </div>
                    <h4>Obrigado! Aguarde que vamos te direcionar para as melhores opções para você ;)</h4>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Me mostre os resultados!</button>
                </div>
        </form>
    </div>
        </div>
    </div>
</div>

    <!-- Section: contact -->
    <section id="contact" class="home-section text-center">
        <div class="heading-contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow bounceInDown" data-wow-delay="0.4s">
                            <div class="section-heading">
                                <h2>Entre em contato</h2>
                                <i class="fa fa-2x fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-2 ">
                    <hr class="marginbot-50">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="boxed-grey">

                        <div id="sendmessage">Sua mensagem foi enviada! Obrigado</div>
                        <div id="errormessage"></div>
                        <form id="contact-form" action="" method="post" role="form" class="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">
                                            Nome</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" data-rule="minlen:4" data-msg="" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            E-mail </label>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Seu E-mail" data-rule="email" data-msg="Digite um e-mail válido" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">
                                            Assunto</label>
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">
                                            Mensagem</label>
                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Escreva Algo para nós" placeholder="Message"></textarea>
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                                        Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- /Section: contact -->


    @include('frontend.footer');


    <!-- Core JavaScript Files -->
    <script src="frontend/js/jquery.min.js"></script>
    <script src="frontend/js/bootstrap.min.js"></script>
    <script src="frontend/js/jquery.easing.min.js"></script>
    <script src="frontend/js/jquery.scrollTo.js"></script>
    <script src="frontend/js/wow.min.js"></script>
    <script src="questionario.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="frontend/js/custom.js"></script>
    <script src="frontend/contactform/contactform.js"></script>

    <script type="text/javascript" src="/js/MultiStep.min.js"></script>
    <script type="text/javascript" src="/js/questionario.js"></script>
</body>

</html>
