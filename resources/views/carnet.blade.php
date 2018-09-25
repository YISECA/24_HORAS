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

      <p style="font-family: times, serif; font-size:15pt; font-style:italic" align="center">{{$formulario->primer_nombre}}&nbsp;{{$formulario->segundo_nombre}}&nbsp;{{$formulario->primer_apellido}}&nbsp;{{$formulario->segundo_apellido}} </p>
      <p align="center"><strong>BIENVENIDO, YA HACES PARTE 24 HORAS DE CICLO MONTAÑISMO 2018</strong></p><br>
      <p align="justify">Este documento será tu comprobante de inscripción, el cual deberás entregar impreso o descargarlo en tu celular para verificar los datos el día del evento.</p>
      <p>Fecha: Sábado 29 de septiembre a Domingo 30 de Septiembre de 2018.</p>
      <p>Hora: Inicio a las 12:00 m, termina 24 horas después.</p>
      <p>Lugar de encuentro: Parque Simón Bolívar.</p>

      <p align="center"><strong >DETALLES DE TU INSCRIPCIÓN</strong></p>
  
     <strong>Nombre  Completo:</strong> {{$formulario->nombres}}&nbsp;{{$formulario->apellidos}}
     <br>      
     <strong>Documento:</strong> {{$formulario->cedula}}
     <br>
     <strong>Fecha  de Registro:</strong> {{$formulario->created_at}}
     <br>  
     <strong>Número  de Inscripción:</strong> <font size="4" color="#00ade6">{{$formulario->id}}</font>
     <br><br>
     <p align="center" style="font-size: 12pt"><br>
        * El kit del evento será entregado en la Charla Técnica el día viernes 28 de septiembre en las Instalaciones del IDRD Calle 63 No 59a-06 a las 4:00 pm.<br>
        * Para la entrega de los kits se requiere presentar cedula de ciudadanía, certificado médico que garantice que el participante se encuentra en óptimas condiciones para competir y soporte de inscripción. En el caso en el que no pueden asistir a la entrega, deberá autorizar a un tercero por medio de una carta anexando copia de la cédula de ciudadanía y certificado médico del participante para la entrega de los mismos.<br>
      </p><br>
      <p align="center" style="font-size: 12pt"><br>
        Cualquier inquietud acércate a las Instalaciones del IDRD Calle 63 No 59a-06 Área de Recreación, o llama al teléfono 6605400 Ext. 2007 y 3002.
      </p>
 
  

  
    </body>

</html>
