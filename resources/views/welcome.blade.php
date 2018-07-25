<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Portal Auna GGYDP</title>

        <link href="{{ URL::asset( 'css_public/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset( 'css_public/css/nivo-lightbox.css')}}" rel="stylesheet" />
        <link href="{{ URL::asset( 'css_public/css/nivo-lightbox-theme/default/default.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset( 'css_public/css/animations.css')}}" rel="stylesheet" />
        <link href="{{ URL::asset( 'css_public/css/style.css')}}" rel="stylesheet">
        <link href="{{ URL::asset( 'css_public/color/default.css')}}" rel="stylesheet">
        <link href="{{ URL::asset( 'css_public/css/bootstrap.min.css')}}" rel="stylesheet">
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
        
        @include('layouts.partials.nav')

        <!-- Section: about -->
        <section id="about" class="home-section color-dark">

            <div  style="margin-top:-90px; padding: 0px; align-items: center;">
            <div class="animatedParent">
                <div class="animated fadeIn slower">
                <div class="col-lg-12 text-center">
                    <img src="{{ URL::asset( 'css_public/img/banner2_3.png')}}" width="100%" >
                    </div>
                </div>
            </div> 
            </div>
            <div style="height: 280px;"></div>

        </section>
        <!-- /Section: about -->
        
        <!-- Section: works -->
        <section id="works" class="home-section color-dark text-center bg-white">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="animatedParent">
                            <div class="section-heading text-center">
                                <h2 class="h-bold animated bounceInDown">Conoce nuestros servicios principales</h2>
                                <div class="divider-header"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
               <div class="row animatedParent">
                    <div class="col-sm-12 col-md-12 col-lg-12" >
                        <div class="row gallery-item">
                            <div class="col-md-1"></div>
                            @foreach( $servicios as $servicio)
                                @if( $servicio->tipo == 'publico')
                                    <div class="col-md-2 animated {{$servicio->descripcionAlt2}}">
                                        <a href="{{$servicio->imagen1}}" title="{{$servicio->nombre}}" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{$servicio->imagen1}}">
                                            <img src="{{asset($servicio->imagen1)}}"" class="img-responsive" alt="{{$servicio->abreviatura}}">
                                        </a>
                                    </div>    
                                @endif
                            @endforeach
                         </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        @foreach( $servicios as $servicio)
                            @if( $servicio->tipo == 'publico')
                                <div class="col-sm-2 animated {{$servicio->descripcionAlt2}} ">
                                    <a href="{{$servicio->link}}">
                                        <h4>{{$servicio->nombre}}</h4>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>  
            </div>
        </section>
        <!-- /Section: works -->    

        <!-- Section: services -->
        <section id="service" class="home-section color-dark bg-gray">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Conoce nuestros Servicios Personalizados</h2>
                            <div class="divider-header"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="container">
                    <div class="row animatedParent">
                        @foreach($servicios as $servicio)
                            @if($servicio->tipo == 'privado')
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="animated rotateInDownLeft">
                                        <div class="service-box">
                                            <div class="service-icon">
                                                <img src="{{asset($servicio->icono1)}}" height="82" width="82">
                                            </div>
                                            <div class="service-desc">
                                                <h5>{{$servicio->nombre}}</h5>
                                                <div class="divider-header"></div>
                                                <p>{{$servicio->descripcion}}</p>
                                                <a href="#" class="btn btn-skin" data-toggle="modal" data-target="#{{$servicio->abreviatura}}"><i class="fa fa-chart-bar left"></i>Ver más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach                        
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="container">
                    <div class="row animatedParent">
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="animated rotateInDownLeft">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <img src="{{ URL::asset('css_public/img/gestticke.png')}}"  height="82" width="82"> 
                                    </div>
                                    <div class="service-desc">                      
                                        <h5>Gestión de Tickets</h5>
                                        <div class="divider-header"></div>
                                        <p>
                                        Accede al sistema de gestión de tickets de atención de la red asistencial
                                        </p>
                                        <a href="#" class="btn btn-skin" data-toggle="modal" data-target="#Modal3"><i class="fa fa-chart-bar left"></i>Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="animated rotateInDownLeft slow">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <img src="{{ URL::asset('css_public/img/arboservi.png')}}" height="82" width="82"> 
                                    </div>
                                    <div class="service-desc">
                                        <h5>Arbol de Servicios</h5>
                                        <div class="divider-header"></div>
                                        <p>
                                        Conoce los distintos servicios ofrecidos por las clínicas de la red AUNA
                                        </p>
                                        <a href="#" class="btn btn-skin" data-toggle="modal" data-target="#Modal1"><i class="fa fa-chart-bar left"></i>Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="animated rotateInDownLeft slower">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <img src=" {{ URL::asset('css_public/img/herrgesti.png')}}" height="82" width="82"> 
                                    </div>
                                    <div class="service-desc">
                                        <h5>Herramientas de gestión</h5>
                                        <div class="divider-header"></div>
                                        <p>
                                        Conoce algunos de los desarrollos realizados para soportar procesos en la red AUNA
                      
                                        </p>
                                        <a href="#" class="btn btn-skin" data-toggle="modal" data-target="#Modal2"><i class="fa fa-chart-bar left"></i>Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: services -->

        <!-- /Section: Other services-->
        <section id="service2" class="home-section color-dark bg-gray">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Servicios disponibles próximamente:</h2>
                            <div class="divider-header"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="container">
                    <div class="row animatedParent">
                        @foreach($servicios as $servicio)
                            @if($servicio->tipo == 'en desarrollo')
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="animated rotateInDownLeft">
                                        <div class="service-box">
                                            <div class="service-icon">
                                                <img src="{{asset($servicio->icono1)}}" height="82" width="82">
                                            </div>
                                            <div class="service-desc">
                                                <h5>{{$servicio->nombre}}</h5>
                                                <div class="divider-header"></div>
                                                <p>{{$servicio->descripcion}}</p>
                                                <a href="#" class="btn btn-skin" data-toggle="modal" data-target="#{{$servicio->abreviatura}}"><i class="fa fa-chart-bar left"></i>Ver más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach                        
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="container">
                    <div class="row animatedParent">
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="animated rotateInDownLeft">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <img src="{{URL::asset('css_public/img/webindica.png')}}" height="82" width="82"> 
                                    </div>
                                    <div class="service-desc">                      
                                        <h5>Web de Indicadores</h5>
                                        <div class="divider-header"></div>
                                        <p>
                                        Accede a diversos indicadores de rendimiento de las clinicas de la red AUNA
                                        </p>
                                        <a href="#" class="btn btn-skin" data-toggle="modal" data-target="#myModal"><i class="fa fa-chart-bar left"></i>Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="animated rotateInDownLeft slow">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <img src="{{ URL::asset('css_public/img/bita.png')}}" height="82" width="82"> 
                                    </div>
                                    <div class="service-desc">
                                        <h5>Gestión de Bitácoras</h5>
                                        <div class="divider-header"></div>
                                        <p>
                                        Accede al sistema de gestión de bitácoras para incidentes y mejoras relacionados a HIS
                                        </p>
                                        <a href="#" class="btn btn-skin" data-toggle="modal" data-target="#Modal4"><i class="fa fa-chart-bar left"></i>Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="animated rotateInDownLeft slower">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <img src="{{ URL::asset('css_public/img/doc.png')}}" height="82" width="82"> 
                                    </div>
                                    <div class="service-desc">
                                        <h5>Gestión de Documentos</h5>
                                        <div class="divider-header"></div>
                                        <p>
                                        Accede al sistema de gestión de documentos para la red asistencial AUNA
                                        </p>
                                        <a href="#" class="btn btn-skin" data-toggle="modal" data-target="#Modal5"><i class="fa fa-chart-bar left"></i>Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: Other services -->
        
        <!-- Section: contact -->
        <section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Contactate con nosotros:</h2>
                            <div class="divider-header"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="animatedParent ">
                            <div class="panel panel-primary align-middle">
                                <div class="panel-heading">
                                    <h4 class="h-bold animated bounceInDown text-center">¿Tienes alguna duda?</h4>
                                </div>
                                <div class="panel-body">
                                    <p class="h-bold animated bounceInDown text-center">Escríbenos al siguiente correo y te responderemos lo más pronto posible.</p>
                                    <p class="h-bold animated bounceInDown text-center">procesos.herramientas@auna.pe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div> 
        </section>
        <!-- /Section: contact -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="footer-menu">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="https://aunamas.gointegro.com">Auna+</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-right">
                        <p>Elaborado por GGYDP - Procesos y Herramientas Prestacionales</p>
                    </div>
                </div>  
            </div>
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">WEB DE INDICADORES</h4>
                    </div>
                    <div class="modal-body" style="text-align:justify;" >
                        <lavel>En este espacio vamos a poder encontrar el Tablero de Indicadores para la Gestión Asistencial y Administrativa que van a ayudar con el seguimiento a las Unidades de Negocio y facilitar la toma de decisiones a nivel Operacional.</lavel>
                    </div>
                    <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal -->

        <!-- Modal1 -->
        <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">ARBOL DE SERVICIOS</h4>
                    </div>
                    <div class="modal-body" style="text-align:justify;" >
                        <lavel>En este espacio vamos a poder encontrar información del Catálogo de los principales Servicios ofrecidos en la Red , teniendo como objetivo centralizar la información y facilitar la búsqueda.</lavel>
                    </div>
                    <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal1 -->

        <!-- Modal2 -->
        <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">HERRAMIENTAS DE GESTIÓN</h4>
                    </div>
                    <div class="modal-body" style="text-align:justify;" >
                        <lavel>En este espacio vamos a poder encontrar los  productos elaboradorados por el área de Procesos y Herramientas que estan ayudando con la automatización de las principales actividades; permitiendo que con los desarrollos propuestos influyan en la rentabilidad,costes de la empresa, en la satisfacción del cliente y en la productividad de los colaboradores.</lavel>
                    </div>
                    <div class="modal-footer">
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal2 -->

        <!-- Modal3 -->
        <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">GESTIÓN DE TICKETS</h4>
                    </div>
                    <div class="modal-body" style="text-align:justify;" >
                        <lavel>En este espacio encontraremos la herramienta que esta ayudando con la estandarización de las incidencias reportadas de las principales Sede HIS ( Clínica Delgado, Oncosalud,Clínica Camino Real y Clínica Vallesur), permitiendo elaborar tableros de Toma de Desición. </lavel>
                    </div>
                    <div class="modal-footer">
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal3 -->

        <!-- Modal4 -->
        <div class="modal fade" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">GESTIÓN DE BITÁCORAS</h4>
                    </div>
                    <div class="modal-body" style="text-align:justify;" >
                        <lavel>En este espacio vas a poder encontrar la herramienta que permitirá el registro y seguimiento de las solicitudes y mejoras en relación a la herramienta HIS, que ayudaran a una mejor gestión a los Coordinadores HIS y Responsables de Bitácoras .</lavel>
                    </div>
                    <div class="modal-footer">
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal4 -->

        <!-- Modal5 -->
        <div class="modal fade" id="Modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">GESTIÓN DE DOCUMENTOS</h4>
                    </div>
                    <div class="modal-body" style="text-align:justify;" >
                        <lavel>Gestíón de documentos</lavel>
                    </div>
                    <div class="modal-footer">
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal5 -->

            @foreach($servicios as $servicio)
                @if($servicio->tipo == 'privado')
                    <div class="modal fade bg-light" id="{{$servicio->abreviatura}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">{{$servicio->nombre}}</h4>
                            </div>
                            <div class="modal-body" style="text-align:justify;">
                                <lavel>{{$servicio->descripcionAlt1}}</lavel>   
                            </div>
                            <div class="modal-footer">
                                <a href="login" class="btn btn-skin" ><i class="fa fa-chart-bar left"></i>Acceder</a>
                            </div>
                        </div>
                    </div>                    
                @endif
            @endforeach
        <!-- Core JavaScript Files -->
        <script src="{{ URL::asset( 'css_public/js/jquery.min.js')}}"></script>     
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/promise-polyfill"></script>

        <script src="{{ URL::asset( 'css_public/js/jquery.sticky.js')}}"></script>
        <script src="{{ URL::asset( 'css_public/js/jquery.easing.min.js')}}"></script>    
        <script src="{{ URL::asset( 'css_public/js/jquery.scrollTo.js')}}"></script>
        <script src="{{ URL::asset( 'css_public/js/jquery.appear.js')}}"></script>
        <script src="{{ URL::asset( 'css_public/js/stellar.js')}}"></script>
        <script src="{{ URL::asset( 'css_public/js/nivo-lightbox.min.js')}}"></script>
        
        <script src="{{ URL::asset( 'css_public/js/custom.js')}}"></script>
        <script src="{{ URL::asset( 'css_public/js/css3-animate-it.js')}}"></script>
    </body>
</html>
