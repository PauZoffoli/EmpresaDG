@extends('plantilla.plantilla')
  <head>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
   
  </head>
@section('content')
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 

      <div id="gallery">
      
      </figcaption>
        <figure>

          <h1 style="color: #06213f">Dirección y Contacto</h1>
         
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.092863480902!2d-70.67835658479939!3d-33.49896098076018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662db2ea4498f11%3A0x8338d131fbd0c293!2sVecinal+2800%2C+Pedro+Aguirre+Cerda%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1486435588007" width="600" id="map" frameborder="0" style="border:0" allowfullscreen></iframe>
          
           
           <br>
           <figcaption align="" style="color:#7b7f84;">
           <img src="{{asset('images/map-icon.png') }}"" style="max-width: 30px;
    max-height: 30px;" alt="entradaprincipal" > Entrada Principal: Pedro Aguirre Cerda Vecinal 2800 <br>
    <img src="{{asset('images/map-icon.png') }}"" style="max-width: 30px;
    max-height: 30px;" alt="entradaprincipal" >
      Entrada Alternativa: Pedro Aguirre Cerda Carelmapu 3017<br>
      <img src="{{asset('images/phone.png') }}"" style="max-width: 30px;
    max-height: 30px;" alt="entradaprincipal" > Teléfono: 22 5170097<br>
     <img src="{{asset('images/gmail.png') }}"" style="max-width: 30px;
    max-height: 30px;" alt="entradaprincipal" >  Mail de Contacto: colegiodivinagabriela@gmail.com<br>

    
      </figure>
          <ul class="nospace clear">
          
           <br>
           <header class="heading" style="color: #06213f">Horario de Atención</header>
           <figcaption style="color:#7b7f84;" >
           Lunes a Viernes <br>
              Durante Período de Clases : 8:30 -13:00 y
              14:30-17:00 <br>
              Durante Período de Vacaciones: 09:00-14:00
            </figure>
          </ul>
          
        
      </div>
    
      <div class="clear"></div>
    </main>
  </div>
</div>
@endsection
