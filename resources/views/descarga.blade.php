@extends('master')                              



@section('content') 

 <link rel="stylesheet" type="text/css" href="public/Css/form.css">

         <section id="page2">

    	<div class="panel panel-default">

  	<div class="panel-heading">Información personal</div>

  	<div class="panel-body">

    

    <form action="carnet" method="POST"> 

		<fieldset class="form-group">
		<h1>Para descargar la inscripción de los equipos solo debe digitar el número de cédula de cualquiera de los integrantes</h1>

			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput"><font color="#FFFFFF">Documento de identidad</font></label>

			<input title="Se nesesita el codigo" required type="number" class="form-control" id="id" name="id" >

		</fieldset>

		<fieldset class="form-group">

	

			<input type="submit" class="btn btn-success" value="Descargar">

		</fieldset>

				

	</section>

      

       

@stop

