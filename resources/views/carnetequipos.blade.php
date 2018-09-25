<!DOCTYPE html>

<html>

<head>

<style>
body{
    font-family: sans-serif;
}
img{
    width: 100%;
}
</style> 
</head>
<body>

 <img src="https://www.idrd.gov.co/sitio/idrd/sites/default/files/Cabezote%20limpio.jpg">
    
<!--
$equipo
 "id" => 1
    "nombre_equipo" => "Bos 1´s"
    "categoria" => "MIXTO"
    "nombre_representante" => "Leopoldo Gonzalez Velandia "
    "created_at" => "2017-09-25 12:40:45"
    "updated_at" => "2017-09-25 12:40:45"

$integrantes
     "id" => 5
        "id_equipo" => 1
        "cedula" => 1022346051
        "tipo_documento" => "Cédula de Ciudadania"
        "nombres" => "LEOPOLDO"
        "apellidos" => "GONZALEZ VELANDIA"
        "genero" => "Masculino"
        "fecha_nacimiento" => "1988-03-30"
        "mail" => "Leo.gonzalezv@hotmail.com"
        "celular" => "300698955"
        "eps" => "SANITAS"
        "barrio" => "BOSA LA LIBERTAD"
        "tipo_sangre" => "O+"
        "nombre_contacto" => "javier gonzalez"
        "numero_contacto" => "3013366087"
        "created_at" => "2017-09-25 12:40:45"
        "updated_at" => "2017-09-25 12:40:45"


-->


      <p style="font-family: times, serif; font-size:20pt; font-style:italic" align="center"> {{$equipo->nombre_equipo}} </p>
      <p align="center"><strong>BIENVENIDOS, YA HACEN PARTE DEL EVENTO 24 HORAS DE CICLO MONTAÑISMO 2018</strong></p><br>
      <p align="justify">Este documento será su comprobante de inscripción, el cual deberán entregar impreso o descargarlo en el celular para verificar los datos el día del evento.</p>
      <p>Fecha: Sábado 29 de septiembre a Domingo 30 de Septiembre de 2018</p>
      <p>Hora: Inicio a las 12:00 m, termina 24 horas después. </p>
      <p>Lugar de encuentro: Parque Simón Bolívar.</p>

      <p align="center"><strong >DETALLES DE TU INSCRIPCIÓN EQUIPO</strong></p>
  
     <strong>Nombre  del equipo:</strong>  {{$equipo->nombre_equipo}}
     <br>   
     <strong>Nombre del Representante:</strong>  {{$equipo->nombre_representante}}
     <br>   
     <strong>Fecha  de Registro:</strong> {{$equipo->created_at}}
     <br>  
     <strong>Número  de Inscripción:</strong> <font size="4" color="#00ade6">{{$equipo->id}}</font>
     <br><br>
     <p align="center"><strong >INTEGRANTES</strong></p>
     @foreach($integrantes as $integrante)

      <strong>Nombre completo:</strong>  {{$integrante->nombres}}&nbsp;{{$integrante->apellidos}}
      <br> 
      <strong>Documento:</strong> {{$integrante->cedula}}
      <br>

     @endforeach

     <br>
      <p align="center" style="font-size: 12pt"><br>
        Cualquier inquietud acércate a las Instalaciones del IDRD Calle 63 No 59a-06 Área de Recreación, o llama al teléfono 6605400 Ext. 2007 y 3002.
      </p>
 
  

  
    </body>

</html>
