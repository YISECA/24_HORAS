@extends('master')                              
@section('content') 
<style type="text/css">
   table, td, tr {
   background-color: rgba(0, 0, 255, 0) !important;
   }
   section#page1 {
   background-color: rgba(8, 8, 8, 0.44) !important;
   }
   .box {
    border: #00edff solid 1px;
    margin: 5px;
    padding: 24px;
   }
/*css del acordion*/
         .container {
  width: 1180px;
  margin-top: 3em;
}
#accordion .panel {
  border-radius: 0;
  border: 0;
  margin-top: 0px;
}
#accordion a {
  display: block;
  padding: 10px 15px;
  border-bottom: 1px solid #b42b2b;
  text-decoration: none;
}
#accordion .panel-heading a.collapsed:hover,
#accordion .panel-heading a.collapsed:focus {
  background-color: #b42b2b;
  color: white;
  transition: all 0.2s ease-in;
}
#accordion .panel-heading a.collapsed:hover::before,
#accordion .panel-heading a.collapsed:focus::before {
  color: white;
}
#accordion .panel-heading {
  padding: 0;
  border-radius: 0px;
  text-align: center;
}
#accordion .panel-heading a:not(.collapsed) {
  color: white;
  background-color: #b42b2b;
  transition: all 0.2s ease-in;
}

/* Add Indicator fontawesome icon to the left */
#accordion .panel-heading .accordion-toggle::before {
  font-family: 'FontAwesome';
  content: '\f00d';
  float: left;
  color: white;
  font-weight: lighter;
  transform: rotate(0deg);
  transition: all 0.2s ease-in;
}
#accordion .panel-heading .accordion-toggle.collapsed::before {
  color: #444;
  transform: rotate(-135deg);
  transition: all 0.2s ease-in;
}

/*fin de css*/
</style>
<script type="text/javascript">
$( function() {
   var max_fields =5; //maximum input boxes allowed
   var wrapper = $(".input_fields_wrap"); //Fields wrapper
   var x = 1; //initlal text box count
   $('body').delegate('.add_field_button','click',function(){
   if(x < max_fields){ //max input box allowed
    //text box increment
   $(wrapper).append('<div class="box col-md-12"> <h3>Participante'+x+'</h3> <div class="col-xs-4 col-sm-3"> <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput" style="color: #FBF8EF; font-size: 11px"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Documento de identidad </label> <input title="Se necesita una cedula" required type="number" class="form-control" id="cedula" name="cedula[]"> </div><div class="col-xs-4 col-sm-3"> <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF; font-size: 11px"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Tipo de Documento </label> <select name="tipo_documento[]" id="tipo_documento" class="form-control col-md-"> <option value="">Seleccione</option> <option value="1">Cédula de Ciudadania</option> <option value="2">Cédula de Extranjeria</option> </select> </div><div class="col-xs-4 col-sm-3"> <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF; font-size: 11px"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Nombres </label> <input required type="text" class="form-control" id="nombres" name="nombres[]" onkeyup="javascript:this.value=this.value.toUpperCase();"> </div><div class="col-xs-4 col-sm-3"> <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF; font-size: 11px">Apellidos </label> <input type="text" class="form-control" id="apellidos" name="apellidos[]" onkeyup="javascript:this.value=this.value.toUpperCase();"> </div><div class="col-xs-4 col-sm-3"> <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF; font-size: 11px"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Género </label> <select required name="genero[]" id="genero" class="form-control col-md-"> <option value="">Seleccione</option> <option value="1">Masculino</option> <option value="2">Femenino</option> </select> </div><div class="col-xs-4 col-sm-3"> <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF; font-size: 11px"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Fecha Nacimiento </label> <input required type="text" class="form-control dp" id="fecha_nacimiento" name="fecha_nacimiento[]"> </div><div class="col-xs-4 col-sm-3"> <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF; font-size: 11px"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Email</label> <input required type="mail" class="form-control" id="mail" name="mail[]"> </div><div class="col-xs-4 col-sm-3"> <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF; font-size: 11px"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Celular</label> <input required type="number" class="form-control" id="celular" name="celular[]"> </div><div class="col-xs-4 col-sm-3"> <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF; font-size: 11px"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Eps</label> <input required type="text" class="form-control" id="eps" name="eps[]" onkeyup="javascript:this.value=this.value.toUpperCase();"> </div><div class="col-xs-4 col-sm-3"> <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF; font-size: 11px"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Barrio</label> <input required type="text" class="form-control" id="barrio" name="barrio[]" onkeyup="javascript:this.value=this.value.toUpperCase();"> </div><div class="col-xs-4 col-sm-3"> <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF; font-size: 11px"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Tipo de sangre</label> <select name="tipo_sangre[]" id="tipo_sangre" class="form-control col-md-"> <option value="">Seleccionar</option> <option value="A-">A-</option> <option value="A+">A+</option> <option value="AB-">AB-</option> <option value="AB+">AB+</option> <option value="B-">B-</option> <option value="B+">B+</option> <option value="O-">O-</option> <option value="O+">O+</option> </select> </div><div class="col-xs-4 col-sm-3"> <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF; font-size: 11px"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Nombre de contacto de emergencia</label> <input required type="text" class="form-control" id="nombre_contacto" name="nombre_contacto[]"> </div><div class="col-xs-4 col-sm-3"> <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF; font-size: 11px"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Número de contacto de emergencia</label> <input required type="text" class="form-control" id="numero_contacto" name="numero_contacto[]"> </div></div>');
       $('.dp').datepicker({
           minDate: new Date(1900,1-1,1), maxDate: '1999-09-24',
      dateFormat: 'yy-mm-dd',
      yearRange: "-100:-18",
      changeMonth: true,
      changeYear: true,
      });

   x++;
   }
   });
});
</script>
<script type="text/javascript">
   
$(document).ready(function() {
   $('.accordion').find('.accordion-toggle').click(function() {
      $(this).next().slideToggle('600');
      $(".accordion-content").not($(this).next()).slideUp('600');
   });
   $('.accordion-toggle').on('click', function() {
      $(this).toggleClass('active').siblings().removeClass('active');
   });
});
   
</script>
<link rel="stylesheet" type="text/css" href="public/Css/form.css">
<form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">
   <section id="page1">
   <div class="panel panel-default">
   <div class="panel-heading">Inscripción de Equipos</div>
   <div class="panel-body">

    <div class="row">
      <br>
      <div class="col-sm-1"></div>
      <div class="col-md-5">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput" style="color: #FBF8EF"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>NOMBRE DEL EQUIPO: </label>
         <input  type="text" class="form-control" id="equipo" name="equipo" required>
      </div>
      <div class="col-md-5">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2"style="color: #FBF8EF" ><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>SELECCIONAR CATEGORÍA</label>
         <select name="tipo_documento" id="tipo_documento" class="form-control" required>
            <option value="">Seleccione</option>
            <option value="1">MASCULINO</option>
            <option value="2">FEMENINO</option>
            <option value="3">MIXTO </option>
            <option value="4">INFANTIL</option>
         </select>
        
      </div>
   </div>

   <div class="row">
      <br>
      <div class="col-sm-1"></div>
      <div class="col-lg-10">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput" style="color: #FBF8EF"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>NOMBRE DEL REPRESENTANTE DEL EQUIPO </label>
         <input  required type="text" class="form-control" id="representante" name="representante">
      </div>
   </div>
 <!--inicio del acordion-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 

<div class="container">
  <div id="accordion" class="panel-group">
    <div class="panel">
      <div class="panel-heading">
      <h4 class="panel-title">
        <a href="#panelBodyOne" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">Content One</a>
        </h4>
      </div>
      <div id="panelBodyOne" class="panel-collapse collapse in">
      <div class="panel-body">
          <p>Energistically drive standardized communities through user friendly results. Phosfluorescently initiate superior technologies vis-a-vis low-risk high-yield solutions. Objectively facilitate clicks-and-mortar partnerships vis-a-vis superior partnerships. Continually generate long-term high-impact methodologies via wireless leadership. Holisticly seize resource maximizing solutions via user friendly outsourcing.</p>
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="panel-heading">
      <h4 class="panel-title">
        <a href="#panelBodyTwo" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">Content Two</a>
        </h4>
      </div>
      <div id="panelBodyTwo" class="panel-collapse collapse">
      <div class="panel-body">
          <p>Energistically drive standardized communities through user friendly results. Phosfluorescently initiate superior technologies vis-a-vis low-risk high-yield solutions. Objectively facilitate clicks-and-mortar partnerships vis-a-vis superior partnerships. Continually generate long-term high-impact methodologies via wireless leadership. Holisticly seize resource maximizing solutions via user friendly outsourcing.</p>
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="panel-heading">
      <h4 class="panel-title">
        <a href="#panelBodyThree" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">Content Three</a>
        </h4>
      </div>
      <div id="panelBodyThree" class="panel-collapse collapse">
      <div class="panel-body">
          <p>Energistically drive standardized communities through user friendly results. Phosfluorescently initiate superior technologies vis-a-vis low-risk high-yield solutions. Objectively facilitate clicks-and-mortar partnerships vis-a-vis superior partnerships. Continually generate long-term high-impact methodologies via wireless leadership. Holisticly seize resource maximizing solutions via user friendly outsourcing.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!--fin de acordion-->

<fieldset class="form-group">

<a class="add_field_button">Agregar<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
</fieldset>
<div class="input_fields_wrap">
</div>

   </fieldset>
   <div class="freebirdFormviewerViewFormContent ">
   <div class="freebirdFormviewerViewHeaderTitleRow">
      <div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"></div>
      <div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto"></div>
   </div>
   <div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" jsname="bLLMxc" role="heading">
      <div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText"></div>
      <div class="freebirdFormviewerViewItemsPagebreakDescriptionText"></div>
      <div role="listitem" class="freebirdFormviewerViewItemsItemItem" jsname="ibnC6b" jscontroller="hIYTQc" jsaction="JIbuQc:qzJD1c;sPvj8e:e4JwSe" data-required="true" data-other-input="qSV85" data-other-hidden="MfYA1e" data-item-id="131124881">
         <div class="freebirdFormviewerViewItemsItemItemheader">
            <div class="freebirdFormviewerViewItemsItemItemTitleContainer">
               <div class="freebirdFormviewerViewItemsItemItemTitle" dir="auto" id="i1" role="heading" aria-level="2" aria-describedby="i.desc.131124881" style="color: #58D3F7;font-size: 20px; font-family: calibri">CONSENTIMIENTO INFORMADO <span class="freebirdFormviewerViewItemsItemRequiredAsterisk" aria-hidden="true" style="font-size: 20px;text-transform: capitalize;color:#00ade6">*</span><br><br><br><br><br><br><br><br><br><br></div>
               <div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto" align="justify" style="color: #FBF8EF;font-size: 16px; font-family: calibri">Manifiesto que he decidido participar voluntariamente en la actividad ECOTRAVESÍA CERROS ORIENTALES, mediante el uso de una bicicleta Todo Terreno, haciéndolo bajo mi entera responsabilidad, manifestando que me encuentro en perfecto estado físico y de salud. Adicionalmente DECLARO que me dieron las recomendaciones necesarias y que aceptaré cualquier decisión de la organización y del Instituto Distrital de Recreación y Deporte – IDRD, sobre mi participación. <br>
                  Asumo todos los riesgos asociados con mi recorrido, incluidos pero no limitados, a caídas y demás accidentes, enfermedades generales, enfermedades de tipo cardíaco, por el contacto con otras personas o elementos, las condiciones climáticas incluida temperatura, lluvia y humedad, tránsito vehicular, estado de las vías, y en general cualquier tipo de riesgos que declaro conocidos y valorados por mí. Así mismo declaro que conozco la información general. <br>
                  Manifiesto que libero a los organizadores, al Instituto Distrital de Recreación y Deporte – IDRD, Alcaldía Mayor de Bogotá, aliados, patrocinadores, representantes y sucesores, de todo reclamo o responsabilidad de cualquier tipo que surja por mi participación en el recorrido, aunque esta responsabilidad pueda surgir por negligencia o culpa de la organización; así como de cualquier extravío, robo y/o hurto. <br>
                  Por último, autorizo a los organizadores a iniciar las acciones que consideren pertinentes, en caso de que por mi participación genere un hecho que pueda afectar los intereses del Instituto Distrital de Recreación y Deporte – IDRD. Igualmente, autorizo al IDRD para que haga uso de las fotografías, películas, videos, grabaciones y cualquier otro medio de registro de este programa para su uso legítimo, sin reclamación o compensación económica alguna.
               </div>
            </div>
         </div>
         <div jsname="JNdkSc" role="group" aria-labelledby="i1" aria-describedby="i.desc.131124881 i.err.131124881 i.req.131124881" class="">
            <div class="" jsname="MPu53c" jscontroller="GJQA8b" jsaction="JIbuQc:aj0Jcf" data-value="Acepto">
               <div class="freebirdFormviewerViewItemsCheckboxChoice">
                  <label class="docssharedWizToggleLabeledContainer freebirdFormviewerViewItemsCheckboxContainer">
                     <div class="exportLabelWrapper">
                        <input type="checkbox" required style="float: left;
                           margin: 0px;" name="acepto" id="acepto">
                        <div class="docssharedWizToggleLabeledContent">
                           <div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel" style="color: #FBF8EF;font-size: 20px; font-family: calibri; line-height: 11px">&nbsp;&nbsp;Acepto</span></div>
                        </div>
                     </div>
                  </label>
               </div>
               <input name="entry.1642827248" jsname="ekGZBc" disabled="" type="hidden">
            </div>
         </div>
         <div id="i.req.131124881" class="screenreaderOnly"></div>
         <div jsname="XbIQze" class="freebirdFormviewerViewItemsItemErrorMessage" id="i.err.131124881" role="alert"></div>
      </div>
   </div>
   <div class="freebirdFormviewerViewNavigationNavControls" jscontroller="lSvzH" jsaction="rcuQ6b:npT2md;JIbuQc:V3upec(GeGHKb),HiUbje(M2UYVd),NPBnCf(OCpkoe)" data-shuffle-seed="-2327421662174229681">
   <div class="freebirdFormviewerViewNavigationButtonsAndProgress">
   <div class="freebirdFormviewerViewNavigationButtons">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="enviar" type="submit" value="Enviar" style="background-color:#00ade6; width: 200px">
   <!--</div><div class="freebirdFormviewerViewNavigationProgress"><div class="freebirdFormviewerViewNavigationProgressIndicator" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-labelledby="lpd4pf" role="progressbar"><div class="freebirdFormviewerViewNavigationProgressIndicatorFill done" style="width:100%"></div></div><div id="lpd4pf" class="quantumWizButtonPaperbuttonContent" aria-hidden="true">Página 1 de 1</div></div></div><div class="freebirdFormviewerViewNavigationPasswordWarning">.</div></div>-->
</form>
<script type="text/javascript" src="public/Js/form.js?n=1" ></script>
@stop