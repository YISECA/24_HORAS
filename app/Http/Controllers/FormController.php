<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB as DB;
use Redirect;
use Validator;
use Session;
use App\Form;
use Idrd\Usuarios\Repo\Departamento;
use Idrd\Usuarios\Repo\Pais;
use Idrd\Usuarios\Repo\Ciudad;
use Idrd\Usuarios\Repo\Localidad;
use Idrd\Usuarios\Repo\Acceso;
use App\Equipo;
use Mail;

class FormController extends BaseController


{
    var $url;

     public function registro()
    {

    
     $localidad = Localidad::orderby('Nombre_Localidad','asc')->get();
      //dd($horas); exit();
      return view('form',["localidades"=>$localidad]);
    }
     public function registro2()
    {

    
     $localidad = Localidad::orderby('Nombre_Localidad','asc')->get();
      //dd($horas); exit();
      return view('form2',["localidades"=>$localidad]);
    }

    private function cifrar($M)
    {   
      $C="";
      $k = 18; 
      for($i=0; $i<strlen($M); $i++)$C.=chr((ord($M[$i])+$k)%255);
      return $C;
    }

    private function decifrar($C)
    {   
      $M="";
      $k = 18;
      for($i=0; $i<strlen($C); $i++)$M.=chr((ord($C[$i])-$k+255)%255);
      return $M;
    }

    public function listar_datos()
    {
    $acceso = Form::whereYear('created_at', '=', date('Y'))->get(); 

    $tabla='<strong><table id="lista" style="color: #FFFFFF">

        <thead>
           <tr>
             <th style="text-transform: capitalize;">Código de Inscripción</th>
              <th style="text-transform: capitalize;">equipo</th>
              <th style="text-transform: capitalize;">Categoría</th>
             <th style="text-transform: capitalize;">cedula</th>
             <th style="text-transform: capitalize;">tipo_documento</th>
             <th style="text-transform: capitalize;">nombres</th>
             <th style="text-transform: capitalize;">apellidos</th>
             <th style="text-transform: capitalize;">genero</th>
             <th style="text-transform: capitalize;">fecha_nacimiento</th>
             <th style="text-transform: capitalize;">mail</th>
             <th style="text-transform: capitalize;">celular</th>
             <th style="text-transform: capitalize;">eps</th>
             <th style="text-transform: capitalize;">Talla</th> 
             <th style="text-transform: capitalize;">Localidad</th>   
             <th style="text-transform: capitalize;">Tipo de sangre</th>   
             <th style="text-transform: capitalize;">Nombre contacto emergencia</th>   
             <th style="text-transform: capitalize;">número de contacto de emergencia</th> 
             <th style="text-transform: capitalize;">Fecha de Inscripción</th>             
            </tr>
        </thead>
        <tbody id="tabla"></strong>';

      foreach ($acceso as $key => $value) 
      {

       $tabla.='<tr style="color: #000000"><td>'.$value->id.'</td>';
       $tabla.='<td>'.$value->equipo['nombre_equipo'].'</td>';
       $tabla.='<td>'.$value->equipo['categoria'].'</td>';
       $tabla.='<td>'.$value->cedula.'</td>';
       $tabla.='<td>'.$value->tipo_documento.'</td>';
       $tabla.='<td>'.$value->nombres.'</td>';
       $tabla.='<td>'.$value->apellidos.'</td>';
       $tabla.='<td>'.$value->genero.'</td>';
       $tabla.='<td>'.$value->fecha_nacimiento.'</td>';
       $tabla.='<td>'.$value->mail.'</td>';
       $tabla.='<td>'.$value->celular.'</td>';
       $tabla.='<td>'.$value->eps.'</td>';
       $tabla.='<td>'.$value->talla.'</td>';
       $tabla.='<td>'.$value->localidades['localidad'].'</td>';
       $tabla.='<td>'.$value->tipo_sangre.'</td>';
       $tabla.='<td>'.$value->nombre_contacto.'</td>';
       $tabla.='<td>'.$value->numero_contacto.'</td>';
       $tabla.='<td>'.$value->created_at.'</td></tr>';

      }

      $tabla.='</tbody></table>';
      echo $tabla;
    }

      public function logear(Request $request)

      {

      $usuario = $request->input('usuario');
      $pass = $request->input('pass');
      $acceso = Acceso::where('Usuario',$usuario)->where('Contrasena', sha1($this->cifrar($pass)) )->first();
      if (empty($usuario)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }
      if (empty($acceso)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }

      session_start() ;
      
      $_SESSION['id_usuario'] = json_encode($acceso);
      return view('admin'); exit(); 
      }

    public function insertar(Request $request)
    {

     $post = $request->input();
     $usuario = Form::where('cedula', $request->input('cedula'))->first(); 
     if (!empty($usuario)) { return view('error',['error' => 'Este usuario ya fue registrado!'] ); exit(); 
    }


     if($this->inscritos()<=12)
     {

         if (!empty($request->equipo)) {
            
            $equipo = new Equipo;
            $equipo->nombre_equipo = $request->equipo;
            $equipo->categoria = $request->categoria;
            $equipo->nombre_representante = $request->nombre_representante;
            $equipo->save();
            $formulario = $this->store_equipo($request,$equipo->id);
        }else{

            if($this->inscritosIndividual()<=2){
                $formulario = new Form([]);
                $formulario = $this->store($formulario, $request);
            }else{
                return view('error', ['error' => 'Lo sentimos el limite para cupos individuales fue superado!']);
            }
        }
            //$this->store($formulario, $request->input());
           /*Mail::send('email', ['user' => $request->input('mail'),'formulario' => $formulario], function ($m) use ($request) 
            {
                $m->from('no-reply@idrd.gov.co', 'Registro Exitoso a 24 horas de ciclo montañismo');
                $m->to($request->input('mail'), $request->input('primer_nombre'))->subject('Registro Exitoso a 24 horas de ciclo montañismo!');
            });*/
          
      }else{
        return view('error', ['error' => 'Lo sentimos el limite de inscritpciones ya fue superado']);
      }
        return view('error', ['error' =>'  BIENVENIDO, YA HACES PARTE DE 24 HORAS DE CICLOMONTAÑISMO 2018, descarga tu comprobante de inscripción en el menú "Descargar inscripción" que se encuentra en la parte superior de la página.']);
    }

 // conteo de la tabla

    private function inscritos()
    {

      $cant = Form::count('id');
      return $cant+1;
    }

    private function inscritosIndividual()
    {
     
      $cant = Form::where('id_equipo',null)->count('id');
      return $cant+1;
    }

    private function store($formulario, $input)

    {
        $formulario['cedula'] = $input['cedula'];
        $formulario['tipo_documento'] = $input['tipo_documento'];
        $formulario['nombres'] = $input['nombres'];
        $formulario['apellidos'] = $input['apellidos'];
        $formulario['genero'] = $input['genero'];
        $formulario['fecha_nacimiento'] = $input['fecha_nacimiento'];
        $formulario['mail'] = $input['mail'];
        $formulario['celular'] = $input['celular'];
        $formulario['eps'] = $input['eps'];
        $formulario['localidad'] = $input['localidad'];
        $formulario['tipo_sangre'] = $input['tipo_sangre'];
        $formulario['nombre_contacto'] = $input['nombre_contacto'];
        $formulario['numero_contacto'] = $input['numero_contacto'];
        $formulario->save();
        return $formulario;        
    }

     private function store_equipo( $input,$id_equipo)

    {   
      $i=0;
      foreach ($input['cedula'] as $cedula) {  
        $formulario = new Form([]);
          $formulario['id_equipo'] = $id_equipo;
          $formulario['cedula'] = $input['cedula'][$i];
          $formulario['tipo_documento'] = $input['tipo_documento'][$i];
          $formulario['nombres'] = $input['nombres'][$i];
          $formulario['apellidos'] = $input['apellidos'][$i];
          $formulario['genero'] = $input['genero'][$i];
          $formulario['fecha_nacimiento'] = $input['fecha_nacimiento'][$i];
          $formulario['mail'] = $input['mail'][$i];
          $formulario['celular'] = $input['celular'][$i];
          $formulario['eps'] = $input['eps'][$i];
          $formulario['localidad'] = $input['localidad'][$i];
          $formulario['tipo_sangre'] = $input['tipo_sangre'][$i];
          $formulario['nombre_contacto'] = $input['nombre_contacto'][$i];
          $formulario['numero_contacto'] = $input['numero_contacto'][$i];
          $formulario->save();
          $i++;
      }
        return $formulario;        
    }

}

