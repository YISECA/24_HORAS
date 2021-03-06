<?php



namespace App\Http\Controllers;





use Illuminate\Http\Request;



use App\Http\Controllers\Controller;



use Illuminate\Routing\Controller as BaseController;



use Illuminate\Support\Facades\DB as DB;



use App\Http\Requests;



use Validator;



use Session;



use PDF;



use App\Form;

use App\Equipo;



class PdfController extends BaseController {

    public function carnet(Request $request)



    {

      date_default_timezone_set('America/Bogota');

      $post = $request->input();

      $id = $post['id'];

      $usuario = Form::where('cedula', $id)->with('equipo')->first();   

      if(!empty($usuario->equipo)){

        $integrantes = Form::where('id_equipo',$usuario->equipo['id'])->get();


          
          /* return view('carnetequipos', ['formulario' => $usuario, 'equipo' => $usuario->equipo,'integrantes' =>$integrantes ]);

            exit();*/

            $view =  view('carnetequipos', ['formulario' => $usuario, 'equipo' => $usuario->equipo,'integrantes' =>$integrantes ])->render();

            $pdf = PDF::loadHTML($view);

            return $pdf->setPaper('a5', 'portrait')->stream('24 Horas de Ciclomontañismo 2018'.date('l jS \of F Y h:i:s A')); 

      }


/* inscripción individual*/
      if (empty($usuario)) { return view('error',['error' => 'No existe este usuario'] ); exit(); }
/*
     return view('carnet', ['formulario' => $usuario]);

      exit();*/

      $view =  view('carnet', ['formulario' => $usuario])->render();

      $pdf = PDF::loadHTML($view);

      return $pdf->setPaper('a5', 'portrait')->stream('24 Horas de Ciclomontañismo 2018'.date('l jS \of F Y h:i:s A'));     

    }



}