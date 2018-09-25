   

@extends('master')                              
@section('content')    
<style type="text/css">
   table, td, tr {
   background-color: rgba(0, 0, 255, 0) !important;
   }
   section#page1 {
   background-color: rgba(8, 8, 8, 0.57) !important;
   }
</style>
<style type="text/css">
   @media only screen and (max-width : 1024px) {
   table, thead, tbody, th, td, tr { display: block; }
   thead tr { position: absolute;top: -9999px;left: -9999px; }
   tr { border: 1px solid #ccc; }
   td { border: none;border-bottom: 1px solid #ccc; position: relative;padding-left: 50%;text-align:left }
   td:before {  position: absolute; top: 6px; left: 6px; width: 45%; padding-right: 10px; white-space: nowrap;}
   }
</style>
<link rel="stylesheet" type="text/css" href="public/Css/form.css">
<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">
<section id="page1">
   <div class="panel panel-default">
   <!--<div class="panel-heading">Inicio</div>-->
   <div class="panel-body">
      <div class="freebirdFormviewerViewFormContent ">
         <div class="freebirdFormviewerViewHeaderHeader">
            <div class="freebirdFormviewerViewHeaderTitleRow">
               <!--<div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1">ECO-TRAVESÍA POR LOS CERROS ORIENTALES</div>-->
            </div>
            <br>
            <script src="public/Js/jquery.sldr.js"></script>
            <div class="freebirdFormviewerViewHeaderDescription" dir="auto">
               <h2 align="center" style="color: #58D3F7">24 HORAS DE CICLO MONTAÑISMO 2018</h2>
               <br>
               <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                     <h3 style="color: #58D3F7" >Descripción del evento</h3>
                     <center>
                        <p align="justify" style="line-height: 27px; font-size: 15px; color:#FBEFEF ">El evento 24 HORAS DE CICLO MONTAÑISMO es un perímetro de campo travesía, donde se compite con obstáculos naturales de diferente complejidad en un circuito previamente demarcado, en distancias de 3,5 a 5 km por vuelta; se compite de forma individual o por equipos conformados de 4 personas realizando la mayor cantidad de kilómetros en 24 horas. A los participantes se les entregará número, rompevientos y número de competencia.<br>
                        Evento recreativo y de actividad física que contribuirá al desarrollo de la recreación dentro del propósito de seguir posicionando a Bogotá como capital mundial de la bicicleta, por la cultura y el número de personas que utilizan las bicicletas en todos los ámbitos.
                        </font>
                        </p>
                     </center>
                     </p>
                  </div>
                  <div class=" col-md-1"></div>
               </div>
               <br>
               <font size="5">
                  <center>
                     <table>
                        <tr>
                           <td  style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color:#FBEFEF; font-size: 17px; font-family: calibri"><strong>Día</strong></p>
                           </td>
                           <td bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 17px; font-family: calibri">Sábado 29 de septiembre a Domingo 30 de Septiembre.</p>
                           </td>
                        </tr>
                        <tr>
                           <td bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 17px; font-family: calibri"><strong>Hora</strong></p>
                           </td>
                           <td bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 17px; font-family: calibri">Inicio a las 12:00 m, termina 24 horas después.</p>
                           </td>
                        </tr>
                        <tr>
                           <td bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 17px; font-family: calibri"><strong>Lugar</strong></p>
                           </td>
                           <td bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 17px; font-family: calibri">Parque Simón Bolívar</p>
                           </td>
                        </tr>
                        <tr>
                           <td bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 17px; font-family: calibri"><strong># Participantes</strong></p>
                           </td>
                           <td bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 17px; font-family: calibri">400 Personas.</p>
                           </td>
                        </tr>
                     </table>
                  </center>
               </font>
               <br>
                

                 <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                     <h3 style="color: #58D3F7;font-size: 25px">Políticas del Evento</h3>
                     <center>
                        <ul class="ul_inicio">
                  <font size="3" color="#FBEFEF">
                     <!--<em><li style=" font-size: 21px; font-family: calibri; color: #58D3F7">La categoría especial INFANTIL se abren las inscripciones el 30 de septiembre a las 10:00 a.m en la carpa de los jueces.</li></em>-->
                     <br>
                     <li style="color: #FBEFEF; font-size: 17px; font-family: calibri; line-height: 25px"> El kit del evento será entregado en la Charla Técnica el día viernes 28 de septiembre en las Instalaciones del IDRD Calle 63 No 59a-06 a las 4:00 pm.</li><br>

                     <li style="color: #FBEFEF; font-size: 17px; font-family: calibri; line-height: 25px"> Para la entrega de los kits se requiere presentar cedula de ciudadanía, certificado médico que garantice que el participante se encuentra en óptimas condiciones para competir y soporte de inscripción. En el caso en el que no pueden asistir a la entrega, deberá autorizar a un tercero por medio de una carta anexando copia de la cédula de ciudadanía y certificado médico del participante para la entrega de los mismos.</li>
                     <br>
                     <li style="color: #FBEFEF; font-size: 17px; font-family: calibri; line-height: 25px"> Presentarse el día del evento con bicicleta todo terreno en excelente estado mecánico, 40 minutos antes de la hora de inicio del evento.</li>
                     <br>
                     <li style="color: #FBEFEF; font-size: 17px; font-family: calibri; line-height: 25px"> Portar los elementos básicos de mecánica para el despinche o mantenimiento de su bicicleta (La organización contará con mecánicos dispuestos para su colaboración).</li>
                     <br>
                     <li style="color: #FBEFEF; font-size: 17px; font-family: calibri; line-height: 25px"> Dentro de los integrantes de los equipos que van a participar en la categoría mixta, debe existir mínimo una mujer. </li>
                     <br>
                     <li style="color: #FBEFEF; font-size: 17px; font-family: calibri; line-height: 25px"><strong><em>Dentro de los integrantes de los equipos que van a participar en la categoría Mixta, debe existir mínimo una mujer.</em></strong></li>
                     <br>
                     <li style="color: #FBEFEF; font-size: 17px; font-family: calibri; line-height: 25px"> Para habilitar la participación en la competencia  en cada una de las categorías deben de existir mínimo 8 equipos inscritos. </li>
                     <br>
                     <li style="color: #FBEFEF; font-size: 17px; font-family: calibri; line-height: 25px"> Se habilitará  un máximo de 400 participantes, teniendo en cuenta que hay categoría individual, y categoría de equipos de 4 participantes.
                     </li>
                     <br>
                     <li style="color: #FBEFEF; font-size: 17px; font-family: calibri; line-height: 25px"> El tiempo estipulado en todos los casos para la realización del evento es desde las 12 pm del día sábado 29 de septiembre hasta las 12 pm del Domingo 30 de septiembre, después de éste horario la responsabilidad es exclusiva del participante.</li>
                     <br>
                     <li style="color: #FBEFEF; font-size: 17px; font-family: calibri; line-height: 25px"> No realizar maniobras peligrosas que puedan afectar su integridad o la de los demás.</li>
                     <br>
                     <li style="color: #FBEFEF; font-size: 17px; font-family: calibri; line-height: 25px"> Transitar únicamente por el recorrido delimitado para las 24 HORAS DE CICLO MONTAÑISMO.</li>
                     <br>
                     <li style="color: #FBEFEF; font-size: 17px; font-family: calibri; line-height: 25px"> En caso de abandono durante las 24 HORAS DE CICLO MONTAÑISMO, informar al equipo logístico.</li>
                     <br>
                     <li style="color: #FBEFEF; font-size: 17px; font-family: calibri; line-height: 25px"> Respetar y cuidar la naturaleza.</strong>.</li>
                     <br>
                     <li style="color: #FBEFEF; font-size: 17px; font-family: calibri; line-height: 25px">  No arrojar basura durante el trayecto.</li>
                     <br>
                  
                     </center>
                     </p>
                  </div>
                  <div class=" col-md-1"></div>
               </div>




                  <br><br>
               </ul>
               <center><a class="btn btn-primary" href="registro" style="font-size:13pt; width: 300px"" >Registro Individual</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="form2" style="font-size:13pt; width: 300px"" >Registro por Equipos</a></center>
            </div>
         </div>
      </div>
   </div>
</section>
@stop

