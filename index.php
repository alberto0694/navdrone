<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NAVDRONE - Navegantes</title>
    <link rel="icon"  type="image/png" href="assets/images/navdrone-navegantes.png" />
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    
    
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/full-slider.css">

    
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/owl.transitions.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/material.css">    
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/color/blue.css" title="blue">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/easyzoom.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/modernizr.custom.js"></script>

</head>

<body class="index">

<!-- 
    ############ MODAIS ######################
 -->

         <!-- Modal -->
<div id="areas-atuacao" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <img id="modal-icon" src="" alt="">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="content">
              
            </div>
        </div>
        <div class="row">
        <h3 align="center">Entre em contato conosco!</h3>
          <img class="logo-modal" src="assets/images/navdrone-logo-medium.png" alt="">
            <div class="contact_email">
                    <div class="row">
                      <div class="col-md-12">
                          <div class="message-info">
                            
                          </div>
                      </div>
                    </div>
                    <form name="sentMessage" id="contactFormModal" novalidate>
                        <div class="row">
                            <div class="col-md-12 col-xs-12 col-xs-12 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="form-group waves-effect col-md-12 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Seu nome *" id="nameModal" required data-validation-required-message="Por gentileza, digite seu nome.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group waves-effect col-md-12 col-xs-12">
                                    <input type="email" class="form-control" placeholder="Seu e-mail *" id="emailModal" required data-validation-required-message="Por gentileza, informe seu e-mail.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group waves-effect col-md-12 col-xs-12">
                                    <input type="tel" class="form-control" placeholder="Seu telefone *" id="phoneModal" required data-validation-required-message="Por gentileza, informe um telefone.">
                                    <p class="help-block text-danger"></p>
                                </div> 
                                <div class="form-group waves-effect col-md-12 col-xs-12">
                                    <textarea class="form-control" placeholder="Em que podemos ajudar?" id="messageModal" required data-validation-required-message="Porque entrou em contato com a gente?"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>                                
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="button" onclick="emailNavdrone('.modal-title', '#nameModal', '#phoneModal', '#emailModal', '#messageModal', modal = true)" class="btn btn-primary waves-effect">Enviar</button>
                            </div>
                        </div>
                    </form>
            </div>
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
</div>
<!-- 
    ############ MODAIS ######################
 -->

    <div class="menu-float hidden-sm hidden-xs">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-social text-center">
                    <ul>
                        <li class="waves-effect"><a href="https://www.instagram.com/navdrone/?hl=pt-br" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li class="waves-effect"><a href="https://www.facebook.com/navdroneimagensaerea/?ref=bookmarks" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <h4><i class="fa fa-fw fa-envelope-o"></i><a id="#contact" href="#contact">Entre em Contato</a></h4>
            </div>
        </div>
    </div>

    <div class="menu-float hidden-md hidden-lg">
        <div class="row">
            <div class="col-xs-12">
                <div class="footer-social text-center">
                    <ul>
                        <li class=" waves-effect"><a href="https://www.instagram.com/navdrone/?hl=pt-br" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li class=" waves-effect"><a href="https://www.facebook.com/navdroneimagensaerea/?ref=bookmarks" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class=" waves-effect"><a href="https://www.facebook.com/navdroneimagensaerea/?ref=bookmarks" target="_blank"><i class="fa fa-fw fa-envelope-o"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Off=Canvas Navigation Section -->
    <div class="menu-wrap">
		<nav class="menu">
			<div class="icon-list">
				<a href="#home" class="logo page-scroll waves-effect">NAVDRONE</a>
				<a href="#about-us" class="page-scroll waves-effect"><i class="fa fa-fw fa-user"></i><span>Sobre Nós</span></a>
				<a href="#portfolio" class="page-scroll waves-effect"><i class="fa fa-fw fa-bell-o"></i><span>Portfolio</span></a>
				<a href="#service" class="page-scroll waves-effect"><i class="fa fa-fw fa-bar-chart-o"></i><span>Serviços</span></a>
				<a href="#contact" class="page-scroll waves-effect"><i class="fa fa-fw fa-envelope-o"></i><span>Contato</span></a>
			</div>
		</nav>
		<button class="close-button" id="close-button">Fechar</button>
	</div>
	<button class="menu-button waves-effect" id="open-button">Abrir</button>
     <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
            <section class="header" id="home">
                    <div class="container">
                        <div class="intro-text">
                            <h1><span><img src="assets/images/navdrone.png" alt=""></span></h1>
                            

                        </div>
                    </div>
                </section>            
                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('assets/images/background.jpg');"></div>
                    <div class="carousel-caption">
                        <p class="slogan-1">Filmagens e fotos aéreas com</p>
                        <p class="slogan-1"> drone em alta definição</p>
                    </div>
                </div>
                <div class="item">
                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('assets/images/background-2.jpg');"></div>
                    <div class="carousel-caption">
                          <p class="slogan-2" style="font-size: 21pt; text-align: center; ">
                            Faça seu TIMELAPSE conosco!
                          </p>
                          <p class="slogan-2">

                            A NAVDRONE irá capturar o seu projeto de duração de dias, semanas ou meses em um vídeo de minutos que pode ser apresentado, em seu iPad ou laptop ou YouTube. Mostre aos a seus clientes o que estava envolvido no processo do começo ao fim.<br>
                            <!-- Empreendimentos de engenharia, Montagem industriais, Acompanhamento de Obras de Construção Civil e Marítima -->
                          </p>
                    </div>
                </div>
<!--                 <div class="item">
                    
                    <div class="fill" style="background-image:url('assets/images/background.jpg');"></div>
                    <div class="carousel-caption">
                        <h2>Caption 3</h2>
                    </div>
                </div> -->
            </div>

            <!-- Controls -->
            <a  class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span style="color: #28abe3; font-size: 80pt;" class="icon-prev"></span>
            </a>
            <a  class="right carousel-control" href="#myCarousel" data-slide="next">
                <span style="color: #28abe3; font-size: 80pt;" class="icon-next"></span>
            </a>

        </header> 



    
    <section id="about-us" class="about-us-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h2>Quem somos</h2>
                            <p>A NAVDRONE imagens aéreas & Subaquaticas surgiu visando atender a grande demanda por produção de imagens aéreas que pudessem ser executadas sem o alto custo de uma produção com diárias de aeronaves. Somos especializados em fotografia e filmagem aérea com qualidade ULTRA HD  utilizando V.A.N.T. (Veículos Aéreos Não Tripulados), além de dispor de profissionais na área de mergulho profissional, a Navdrone oferece inspeção submersa com vídeo e foto, serviços de inspeção em naufrágios, embarcações e  reservatórios de água potável com foto e vídeo acompanhado de monitoramento na superfície.</p>
                        </div>
                </div>
                <div class="quem-somos-mobile row">
                  <div class="row">
                      <div class="col-sm-6 col-md-3">
                            <div id="ind_cons" class="thumbnail">
                                  <img src="assets/images/industria_e_construcao.jpg" alt="...">
                                  <div class="caption">
                                    <h3>INDÚSTRIA E CONSTRUÇÃO</h3>
                                    <ul class="lista-areas">
                                      <li>Filmagens e fotos aéreas institucionais de fábricas </li>
                                      <li>indústrias e páteos de produção </li>
                                      <li>Filmagem e fotos aéreas de Projetos de Engenharia civil</li>
                                      <li>Acompanhamento da Obras</li>
                                    </ul>
                                    <p><a  class="btn btn-primary" onclick="callModal('Indústria e Construção','#ind_cons .lista-areas', 'assets/images/industria_e_construcao.jpg')" role="button">Saiba Mais+</a> </p>

                                  </div>
                            </div>
                      </div>
                      <div class="col-sm-6 col-md-3">
                            <div id="pref" class="thumbnail">
                                  <img src="assets/images/prefeitura.jpg" alt="...">
                                  <div class="caption">
                                    <h3>PREFEITURA</h3>
                                    <ul class="lista-areas">
                                      
                                      <li>Regularização de Aterros Sanitários e Plano de Gestão de Resíduos Sólidos </li>
                                      <li>Levantamento para cobrança de IPTU </li>
                                      <li>Crescimento da região </li>
                                      <li>auxilia  sua Empresa e órgãos Públicos ao combate ao mosquito Aedes Aegypti </li>
                                    </ul>
                                    <p><a  class="btn btn-primary" onclick="callModal('Prefeitura','#pref .lista-areas', 'assets/images/prefeitura.jpg')"  role="button">Saiba Mais+</a> </p>
                                  </div>
                            </div>
                      </div>    
                      <div class="col-sm-6 col-md-3">
                            <div id="agr_pec" class="thumbnail">
                                  <img src="assets/images/agricultura.jpg" alt="...">
                                  <div class="caption">
                                    <h3>AGRICULTURA E PECUÁRIA</h3>
                                    <p>
                                      <ul class="lista-areas">
                                        
                                        <li>Fotos Aéreas</li>
                                        <li>Análise de Qualidade do Plantio</li>
                                        <li>Contagem de rebanho</li>
                                        <li>Uso e ocupação do solo</li>
                                      </ul>
                                    </p>
                                    <p><a  class="btn btn-primary" onclick="callModal('Agricultura e Pecuária','#agr_pec .lista-areas', 'assets/images/agricultura.jpg')" role="button">Saiba Mais+</a> </p>
                                  </div>
                            </div>
                      </div> 


                      <div class="col-sm-6 col-md-3">
                            <div id="camp_pub" class="thumbnail">
                                  <img src="assets/images/campanhas_publicitarias.jpg" alt="...">
                                  <div class="caption">
                                    <h3>CAMPANHAS PUBLICITÁRIAS</h3>
                                    <p>
                                      <ul class="lista-areas">
                                        
                                        <li>Tomadas aéreas diferenciadas para filme publicitário</li>
                                        <li>Taks aéreos exclusivos para filmes publicitário </li>
                                        <li>Filmagens aéreas de cenas para filme publicitários</li>
                                      </ul>
                                    </p>
                                    <p><a  class="btn btn-primary" onclick="callModal('Campanhas Publicitárias','#camp_pub .lista-areas', 'assets/images/campanhas_publicitarias.jpg')" role="button">Saiba Mais+</a> </p>
                                  </div>
                            </div>
                      </div> 

                  </div>
                  <div class="row">

                      <div class="col-sm-6 col-md-3">
                            <div id="esp" class="thumbnail">
                                  <img src="assets/images/esportes.jpg" alt="...">
                                  <div class="caption">
                                    <h3>ESPORTES</h3>
                                    <p>
                                      <ul class="lista-areas">
                                        <li>Filmagens e fotos aéreas de campeonatos, eventos e demostrações de surf</li>
                                        <li>Filmagem e fotos aéreas de campeonatos, eventos e demostrações naúticas</li>
                                        <li>Filmagem e fotos aéreas de campeonatos, eventos e demostrações de futebol</li>
                                        <li>Filmagem e fotos aéreas de campeonatos, eventos e demostrações de skate</li>
                                      </ul>
                                    </p>
                                    <p><a  class="btn btn-primary" onclick="callModal('Esportes','#esp .lista-areas', 'assets/images/esportes.jpg')" role="button">Saiba Mais+</a> </p>
                                  </div>
                            </div>
                      </div>                         
                      <div class="col-sm-6 col-md-3">
                            <div id="est" class="thumbnail">
                                  <img src="assets/images/estaleiros.jpg" alt="...">
                                  <div class="caption">
                                    <h3>ESTALEIROS</h3>
                                    <p>
                                      <ul class="lista-areas">
                                        
                                        <li>Filmagens aéreas de lançamento de embarcações </li>
                                        <li>Taks aéreos exclusivos para vídeo institucionais </li>
                                        <li>Time-Lapse progresso de uma construção</li>
                                      </ul>
                                    </p>
                                    <p><a  class="btn btn-primary" onclick="callModal('Estaleiros','#est .lista-areas', 'assets/images/estaleiros.jpg')" role="button">Saiba Mais+</a> </p>
                                  </div>
                            </div>
                      </div> 
                      <div class="col-sm-6 col-md-3">
                            <div id="evt" class="thumbnail">
                                  <img src="assets/images/eventos.jpg" alt="...">
                                  <div class="caption">
                                    <h3>EVENTOS</h3>
                                    <p>
                                      <ul class="lista-areas">
                                        <li>Filmagens e fotos aéreas da montagem do evento</li>
                                        <li>Filmagem e fotos aéreas da participação do público</li> 
                                        <li>Filmagem e fotos aéreas da interação dos participantes</li>
                                      </ul>
                                    </p>
                                    <p><a  class="btn btn-primary" onclick="callModal('Eventos','#evt .lista-areas', 'assets/images/eventos.jpg')" role="button">Saiba Mais+</a> </p>
                                  </div>
                            </div>
                      </div> 
                      <div class="col-sm-6 col-md-3">
                            <div id="imob" class="thumbnail">
                                  <img src="assets/images/imobiliario.jpg" alt="...">
                                  <div class="caption">
                                    <h3>IMOBILIÁRIO</h3>
                                    <p>
                                      
                                      <ul class="lista-areas">
                                        <li>Filmagens e fotos aéreas de diferenciais</li>
                                        <li>Projetos, Arquitetura, Segurança e Lazer </li>
                                        <li>Filmagem e fotos aéreas para Implantação de empreendimentos</li>
                                        <li>Filmagem e fotos aéreas de detalhes do empreendimento imobiliário</li>
                                        <li>Filmagem e fotos aéreas da região entorno do empreendimento</li>
                                      </ul>
                                    </p>
                                    <p><a  class="btn btn-primary" onclick="callModal('Imobiliário','#imob .lista-areas', 'assets/images/imobiliario.jpg')" role="button">Saiba Mais+</a> </p>
                                  </div>
                            </div>
                      </div>                       
                  </div>
                  <div class="row">
                      <div class="col-sm-6 col-md-3">
                            <div id="lot" class="thumbnail">
                                  <img src="assets/images/loteamentos.jpg" alt="...">
                                  <div class="caption">
                                    <h3>LOTEAMENTOS</h3>
                                    <p> 
                                        <ul class="lista-areas">
                                          <li>Filmagens e fotos aéreas de loteamentos e terrenos com detalhes de área
                                           infraestrutura</li>
                                        </ul>
                                    </p>
                                    <p><a  class="btn btn-primary" onclick="callModal('Loteamentos','#lot .lista-areas', 'assets/images/loteamentos.jpg')" role="button">Saiba Mais+</a> </p>
                                  </div>
                            </div>
                      </div>

                  </div>                
                </div>
            </div>
                      
            
        </div><!-- /.container -->
    </section>
    <!-- End About Us Section -->
    <!-- Start Call to Action Section -->
    <section class="background-10-vezes call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Um clipe feito com um drone chega a ter <strong>10 vezes mais</strong> visualizações que um vídeo terrestre normal</h1>
                    <img src="assets/images/navdrone-logo-medium.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Call to Action Section -->    
    <!-- Start Portfolio Section -->
    <section id="portfolio" class="portfolio-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Um pouco de nosso trabalho</h2>
                        <!-- <p>Duis aute irure dolor in reprehenderit in voluptate</p> -->
                    </div>                        
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="container">

                    <div class="intro-album">
                        <div class="row">                        
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('V','https://player.vimeo.com/video/207341301')">
                                <img src="assets/images/portfolio/video.jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-video-camera" aria-hidden="true"></i> 01:28</span>
                                
                            </div>
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('V','https://player.vimeo.com/video/207341056')">
                                <img src="assets/images/portfolio/video2.jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-video-camera" aria-hidden="true"></i> 00:56</span>
                                
                            </div>
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('V','https://player.vimeo.com/video/207340721')">
                                <img src="assets/images/portfolio/video3.jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-video-camera" aria-hidden="true"></i> 01:12</span>

                            </div>


                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('V','https://player.vimeo.com/video/208415319')">
                                <img src="assets/images/portfolio/video4.jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-video-camera" aria-hidden="true"></i> 02:35</span>

                            </div>
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('V','https://player.vimeo.com/video/216942783')">
                                <img src="assets/images/portfolio/video5.jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-video-camera" aria-hidden="true"></i> 02:35</span>

                            </div>
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('V','https://player.vimeo.com/video/208415319')">
                                <img src="assets/images/portfolio/video6.jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-video-camera" aria-hidden="true"></i> 02:06</span>

                            </div>                            

                
                            
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('V','https://player.vimeo.com/video/214928854')">
                                <img src="assets/images/portfolio/video7.jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-video-camera" aria-hidden="true"></i> 02:35</span>

                            </div> 
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('V','https://player.vimeo.com/video/216942873')">
                                <img src="assets/images/portfolio/video8.jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-video-camera" aria-hidden="true"></i> 02:35</span>

                            </div> 

                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (9).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (9).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 1,15Mb</span>
                            </div> 
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (10).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (10).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 953MB</span>
                            </div> 
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (11).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (11).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 808KB</span>
                            </div> 
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (12).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (12).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 957KB</span>
                            </div>  
                            
                            
                        </div><!-- /.row -->
                        <div class="row">
                            
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (13).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (13).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 655Kb</span>
                            </div> 
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (14).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (14).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 844KB</span>
                            </div> 
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (15).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (15).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 1,25Mb</span>
                            </div> 
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (16).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (16).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 700Kb</span>
                            </div> 
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (17).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (17).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 1,27Mb</span>
                            </div> 
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (18).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (18).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 1,9Mb</span>
                            </div>  

                            
                            
                        </div><!-- /.row -->
                        <div class="row">
                              <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (4).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (4).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 833Kb</span>
                            </div>
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens_5).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens_5).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 3,87Mb</span>
                            </div>
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (6).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (6).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 733Kb</span>
                            </div> 
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens_19).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens_19).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 3,49Mb</span>

                            </div>

                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (2).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (2).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 812KB</span>
                            </div>   
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (20).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (20).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 1MB</span>
                            </div>                               
                        </div>
                        <div class="row">
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (7).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (7).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 797KB</span>
                            </div> 
                            <div class="col-md-2 img-thumbnail-intro" onclick="chamaMidia('I','assets/images/portfolio/navdrone-imagens (8).jpg')">
                                <img src="assets/images/portfolio/navdrone-imagens (8).jpg" class="img-responsive" alt="..">
                                <span><i class="fa fa-picture-o" aria-hidden="true"></i> 1,17Mb</span>
                            </div>                         	
                        </div>

                    </div>

                    <div class="play-file" style="display: none">
                        <h1 align="center" class="back-midia" style="text-align: center; font-size:26pt">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </h1>
                          <div class="midia-imagem" style="display: none">


                        <!-- Placeholder for demo purposes only -->
                       

                            <div class="col-md-12 ">
                                <a href="assets/images/banner.jpg">
                                    <img id="img-big-size-port" style="    
                                      width: 100%;
                                      height: auto;" src="" alt="" width="310" height="400" />
                                </a>
                            </div>


                        </div>

                        <div class="midia-video">
                          <div class="col-md-12">
                              <iframe id="video-port" src="https://player.vimeo.com/video/207341301" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                         
                          </div>
                        </div>
                       
                    </div>
                        
            </div> 
                        
                            
                    </ul>
                    <!-- End Portfolio items -->
                </div>
            </div>
        </div>

    </section>
    <!-- End Portfolio Section -->
    

    
    <!-- Start Service Section -->
    <section id="service" class="services-section">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Nossos serviços</h2>
                        <p>Encontre o que procura!</p>

                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 20px">
               
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service waves-effect">
                        <i class="fa fa-plane"></i>
                        <div class="border"></div>
                        <div id="img_areas" class="service-content">
                            <h4>Imagens Aéreas</h4>
                            <p class="lista-service">
                              INDÚSTRIA E CONSTRUÇÃO <br>
                              PREFEITURA<br>
                              AGRICULTURA E PECUÁRIA<br>
                              CAMPANHAS PUBLICITÁRIAS<br>
                              LOTEAMENTOS<br>
                              ESTALEIROS <br>
                              EVENTOS<br>
                              IMOBILIÁRIO<br>
                              ESPORTES<br>
                            </p>
                            <p><a onclick="callModal('Imagens Aéreas','#img_areas .lista-service', '')" class="btn btn-primary"  role="button">Saiba Mais+</a> </p>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service waves-effect">
                        <i class="fa fa-video-camera"></i>
                        <div class="border"></div>
                        <div id="time" class="service-content">
                            <h4>Timelapse</h4>
                            <p class="lista-service">                              
                              ACOMPANHE SUA OBRA 24HORAS POR DIA.<br>
                              TIME-LAPSE PARA OBRAS<br>
                              TIME-LAPSE CONTRUÇÃO DE SEU PROJETO<br>
                              
                            </p>
                            <p><a  class="btn btn-primary" onclick="callModal('Timelapse','#time .lista-service', '')" class="btn btn-primary" role="button">Saiba Mais+</a> </p>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->                
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service waves-effect">
                        <i class="fa fa-tint"></i>
                        <div class="border"></div>
                        <div id="sub_aq" class="service-content">
                            <h4>Imagens Subaquáticas</h4>
                            <p class="lista-service">
                              IMAGENS SUBÁQUATICAS<BR>
                              INSPEÇÃO SUBÁQUATICAS COM FILMAGENS EM TEMPO REAL<BR>
                            </p>
                            <p><a  class="btn btn-primary" onclick="callModal('Imagens Subaquáticas','#sub_aq .lista-service', '')" role="button">Saiba Mais+</a> </p>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service waves-effect">
                        <i class="fa fa-users"></i>
                        <div class="border"></div>
                        <div id="outro_ser" class="service-content">
                            <h4>Outros Serviços</h4>
                            <p class="lista-service">Faça contato conosco e buscaremos lhe atender.</p>
                            <p><a  class="btn btn-primary" onclick="callModal('Imagens Subaquáticas','#outro_ser .lista-service', '')"  role="button">Saiba Mais+</a> </p>                        
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->                
            </div>
        </div>
    </section>
    <!-- End Service Section -->
    
    
    
    <!-- Start Fun Facts Section -->
    <section class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                      <div class="counter-item waves-effect">
                        <i class="fa fa-cloud-upload"></i>
                        <div class="timer" id="item1" data-to="253" data-speed="2000"></div>
                        <h5>Vídeos e Imagens</h5>                               
                      </div>
                    </div>  
                    <div class="col-xs-12 col-sm-6 col-md-4">
                      <div class="counter-item waves-effect">
                        <i class="fa fa-check"></i>
                        <div class="timer" id="item2" data-to="28" data-speed="2000"></div>
                        <h5>Projetos</h5>                               
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                      <div class="counter-item waves-effect">
                        <i class="fa fa-male"></i>
                        <div class="timer" id="item4" data-to="22" data-speed="2000"></div>
                        <h5>Clientes</h5>                               
                      </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Section -->
    <!-- Start Contact Us Section -->
    <section id="contact" class="contact contact-section">
        <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                          <div class="message-info">
                              
                          </div>
                      </div>
                    </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
                        <h2>Entre em contato conosco</h2>
                        <!-- <p>Duis aute irure dolor in reprehenderit in voluptate</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="form-group waves-effect">
                                    <input type="text" class="form-control" placeholder="Seu nome *" id="name" required data-validation-required-message="Por gentileza, digite seu nome.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group waves-effect">
                                    <input type="email" class="form-control" placeholder="Seu e-mail *" id="email" required data-validation-required-message="Por gentileza, informe seu e-mail.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group waves-effect">
                                    <input type="tel" class="form-control" placeholder="Seu telefone *" id="phone" required data-validation-required-message="Por gentileza, informe um telefone.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="form-group waves-effect">
                                    <textarea class="form-control" placeholder="Motivo de seu contato *" id="message" required data-validation-required-message="Porque entrou em contato com a gente?"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <input name='assunto-email' type="hidden" value="Contato de Clientes">
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="button" onclick="emailNavdrone('input[name=assunto-email]', '#name', '#phone', '#email', '#message', modal = false)" class="btn btn-primary waves-effect">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </section>
    
    
    
    
    <!-- Start Map Section -->
    <div class="google-map">
        <div id="map"></div>
        <div class="contact-info waves-effect">
            <h4>Contato</h4>
            <ul>
                <li><strong>E-mail :</strong> contato@navdrone.com.br</li>
                <li><strong>Fone 1 :</strong> (47) 99181-1959</li>
                <li><strong>Fone 2 :</strong> (47) 99943-5794</li>     
                <li><strong>Fone 3 :</strong> (47) 3065-6079</li>           
            </ul>
        </div>
    </div>
    <!-- End Map Section -->
    
    
    
    <!-- Start Footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="row">             
                    <div class="col-md-12 col-xs-12">
                        <div class="footer-social text-center">
                            <ul>
                                <li class="waves-effect"><a href="https://www.instagram.com/navdrone/?hl=pt-br" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li class="waves-effect"><a target="_blank" href="https://www.facebook.com/navdroneimagensaerea/?ref=bookmarks"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>                    
                </div>

                <div class="row">
                  <h3 align="center" style="color:white">Profissionais Associados:</h3>
                    <div class="col-md-12">
                            <div class="col-md-9 col-md-offset-3">
                                    <div class="text-center">
                                        <div class="col-md-3">
                                            <img style="display:block; margin: 0 auto" src="assets/images/anac.png" alt="">
                                        </div>
                                        <div class="col-md-2">
                                            <img style="display:block; margin: 0 auto" src="assets/images/drone.png" alt="">
                                        </div>
                                        <div class="col-md-3">
                                            <img style="display:block; margin: 0 auto" src="assets/images/anatel.png" alt="">
                                        </div>                          
                                    </div>                        
                            </div>                        
                    </div>


                            

                </div>


            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <!-- jQuery Version 2.1.3 -->
    <script src="assets/js/jquery-2.1.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.fitvids.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Materialize js -->
    <script src="assets/js/material.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.elevateZoom-3.0.8.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="assets/js/script.js"></script>
    
    
</body>
</html>
