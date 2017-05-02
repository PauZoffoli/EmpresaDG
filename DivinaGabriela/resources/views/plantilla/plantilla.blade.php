<!DOCTYPE html>

<html>
<head>
  <title>Colegio Divina Gabriela</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="{{ asset('layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">

</head>
<style>


</style>
<body id="top">

  <div class="wrapper row0">

  </div>

  <div class="wrapper row1">

    <div class="rounded2" >

      <header id="header" class="clear"> 
    
    <div class="three_quarter first" style="background-color:">
        
          <div id="logo" class="">
            <div class="imgl"><img src="{{asset('images/demo/logo.png') }}" id="logo" style="max-width: 100px;
              max-height: 100px;" alt="logo">
            </div><br>
              <h1 style="color:white;">Colegio Divina Gabriela</h1>
              <p style="color:white;"> Free Website Template</p>  
           </div>
     </div>
     <div class="one_quarter " style="background-color:;margin-top:20px; text-align: right;  font-size:16px">
                    <a style="color:#979797" href="#">Visítanos en Facebook</a>
                    <a style="color:#06213f" class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a>
     </div>
        </header>

      </div> 

    </div>


    <!-- ################################################################################################ --> 
    <!-- ################################################################################################ --> 
    <!-- ################################################################################################ -->
    <div class="wrapper row2">
      <div class="rounded"  style="background-color:#06213f; color:white";>
        <nav id="mainav" class="clear"> 
          <!-- ################################################################################################ -->
          <ul class="clear">
            <li class="active"><a href="{{ route('welcome') }}">Inicio</a></li>
            <li><a class="drop" href="#">Utilidades Escolares</a>
              <ul>
                <li><a href="{{ route('pages.utiles') }}">Utiles Escolares</a></li>
                <li><a href="{{ route('pages.horarios') }}">Horarios Escolares</a></li>
                <li><a href="{{ route('pages.calendario') }}">Calendario Escolar</a></li>
              </ul>
            </li>
            <li><a class="drop" href="">Documentos Oficiales</a>
              <ul>
                <li><a href="#">Proyecto Educativo</a></li>
                <li><a href="#">Plan de Convivencia Escolar</a></li>
                <li><a href="#">Convenio de Igualdad</a></li>
                <li><a href="#">Reglamento Interno</a></li>
              </ul>
            </li>
            <li><a href="{{ route('pages.contacto') }}">Ubicación</a></li>
            <li><a href="{{ route('pages.talleres') }}">Talleres</a></li>
            <li><a href="{{ route('pages.profesores') }}">Profesores</a></li>

          </ul>
         
        </nav>
      </div>
    </div>
    <!-- ################################################################################################ --> 
    <!-- ################################################################################################ --> 
    <!-- ################################################################################################ -->

    @yield('content')

    <div class="wrapper row4">
      <div class="rounded">
        <footer id="footer" class="clear"> 
          <!-- ################################################################################################ -->
          <div class="one_third first">
            <figure class="center"><img class="btmspace-15" src="{{asset('images/demo/worldmap.png') }}" alt="">
              <figcaption><a href="#">Find Us With Google Maps &raquo;</a></figcaption>
            </figure>
          </div>
          <div class="one_third">
            <address>
              Colegio Divina Gabriela<br>
              Vecinal 2800 / Carelmapu 3017<br>
              Pedro Aguirre Cerda/ Santiago<br>

              <br>
              <i class="fa fa-phone pright-10">   &nbsp;  &nbsp; 22 5170097</i> <br>
              <i class="fa fa-envelope-o pright-10"></i> <a href="#">colegiodivinagabriela@gmail.com</a>
            </address>
          </div>
          <div class="one_third">
            <p class="nospace btmspace-10">Encuentranos en Facebook</p>
            <ul class="faico clear">

              <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>

            </ul>
            <form class="clear" method="post" action="#">
              <fieldset>

              </fieldset>
            </form>
          </div>
          
          <!-- ################################################################################################ --> 
        </footer>
      </div>
    </div>

    <div class="wrapper row5">
      <div id="copyright" class="clear"> 
        <!-- ################################################################################################ -->
        <p class="fl_left"><a href="#"></a></p>
        <p class="fl_right"><a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates"></a></p>
        <!-- ################################################################################################ --> 
      </div>
    </div>
    <!-- JAVASCRIPTS --> 
    <script src="{{asset('layout/scripts/jquery.min.js') }}"></script> 
    <script src="{{asset('layout/scripts/jquery.fitvids.min.js')}}"></script> 
    <script src="{{asset('layout/scripts/jquery.mobilemenu.js')}}"></script> 
    <script src="{{asset('layout/scripts/tabslet/jquery.tabslet.min.js')}}"></script>
 <script src="{{asset('layout/scripts/nivo-lightbox/nivo-lightbox.min.js')}}"></script>
   @yield('ScriptFooter')
   
  </body>
  </html>