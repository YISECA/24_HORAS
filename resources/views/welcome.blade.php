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

                        <h1 align="center" style="font-family:cursive; color: #58D3F7">24 HORAS DE CICLO MONTAÑISMO</h1>
                
                        <br>
                        <h3 style="font-family:cursive; color: #58D3F7" >Descripción del evento</h3>

                        <p align="justify"><font size="3" color="#FBEFEF" face="Calibri" style="line-height: 25px;">El evento 24 HORAS DE CICLO MONTAÑISMO es un perímetro de campo travesía, donde se compite con obstáculos naturales de diferente complejidad en un circuito previamente demarcado, en distancias de 3,5 a 5 km por vuelta; se compite de forma individual o por equipos conformados de 4 personas realizando la mayor cantidad de kilómetros en 24 horas. A los participantes se les entregará número y chip de competencia.<br>
                        Evento recreativo y de actividad física que contribuirá al desarrollo de la recreación como parte del propósito de la administración Distrital de lograr convertir a Bogotá D.C, como Capital Americana de la Bicicleta, por la cultura y el número de personas que utilizan las bicicletas en todos los ámbitos.</font></p>

                      <br>
                        <font size="4"><center><table width="500">

                            <col width="281">

                                <col width="282">

                                    <tr valign="top">

                                        <td width="281"  style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color:#FBEFEF; font-size: 15px; font-family: calibri"><strong>Día</strong></p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri">Sábado 30 de septiembre a Domingo 1 de octubre.</p>

                                        </td>

                                    </tr>
                              
                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri"><strong>Hora</strong></p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                        <p style="color: #FBEFEF; font-size: 15px; font-family: calibri">Inicio a las 12:00 m Final 24 horas después.</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri"><strong>Lugar</strong></p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri">Parque Simón Bolívar.</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri"><strong># Participantes</strong></p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri">400 Personas.</p>

                                        </td>

                                    </tr>
                                

                        </table></center></font>



                   <h3 style="font-family:cursive; color: #58D3F7;font-size: 25px">Políticas del Evento</h3><br>

                        <ul class="ul_inicio">

                            <font size="3" color="#FBEFEF">

                                               <li style="color: #FBEFEF; font-size: 23px; font-family: calibri; color: #58D3F7">La categoría especial INFANTIL se abren las inscripciones el 30 de septiembre a las 10:00 a.m en la carpa de los jueces.</li><br>
                               
                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">El kit del evento será entregado en la charla técnica el día 29 de Septiembre en las Instalaciones del IDRD Calle 63 No 59a-06 de 6:00pm a 8pm.</li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Presentarse con bicicleta todo terreno en excelente estado mecánico, 40 minutos antes de la hora de inicio del evento.</li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Portar los elementos básicos de mecánica para el despinche o mantenimiento de su bicicleta (La organización contará con mecánicos dispuestos para su colaboración).</li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Portar sistema de iluminación para la bicicleta y reflectivos.</li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Dentro de los integrantes de los equipos que van a participar en la categoría Mixta, debe existir mínimo una mujer.</li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">En la inscripción de equipos la suma de las edades debe ser superior a 100 años.</li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Se informa que el IDRD dispondrá de una zona de camping para que los participantes coloquen sus equipos e implementos. Cabe resaltar que a esta zona sólo ingresan los participantes más un asistente de cada equipo previamente registrado. (El registro de los asistentes se realizará el mismo día del evento).<br><br>
                                               <strong><font style="font-size: 22px">Nota:</font></strong> El IDRD, ni la Administración del Parque Simón Bolívar, ni los organizadores asumirán daños, pérdidas o perjuicios que puedan presentarse dentro de esta zona o dentro del parque.
                                               </li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Para habilitar la participación en la competencia  en cada una de las categorías deben de existir mínimo 8 equipos inscritos.</li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Se habilitará  un máximo de 400 participantes, teniendo en cuenta que hay categoría individual, y categoría de equipos de 4 participantes.</li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">El tiempo estipulado en todos los casos para la realización del evento es desde las 12m del día sábado 30 de Septiembre hasta las 12m del día Domingo 1 de octubre, después de éste horario la responsabilidad es exclusiva del participante.</li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">No realizar maniobras peligrosas que puedan afectar su integridad o la de los demás.</li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Transitar únicamente por el recorrido delimitado para las<strong> 24 HORAS DE CICLO MONTAÑISMO</strong>.</li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">En caso de abandono durante las <strong>24 HORAS DE CICLO MONTAÑISMO,</strong> informar al equipo logístico.</li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Respetar y cuidar la naturaleza.</li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">No arrojar basura durante el trayecto.</li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Se prohíbe el consumo de bebidas alcohólicas, sustancias alucinógenas durante la competencia dentro de la zona de camping  y el recorrido.</li><br>

                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Se recomienda visitar el médico antes de su participación en el evento para conocer su estado de salud y físico.</li><br>
                                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">No arrojar basura durante el trayecto.</li><br>
                                               
        
                            </font>
                            <br><br>

                        </ul><center><a class="btn btn-primary" href="registro" style="font-size:13pt; width: 300px"" >Registro Individual</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="form2" style="font-size:13pt; width: 300px"" >Registro por Equipos</a></center></div>

                </div>

            </div>

        </div>

</section>

@stop