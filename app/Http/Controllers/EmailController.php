<?php

namespace App\Http\Controllers;

use App\Models\Contactenos;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = array(
            'nombre' => $request->input('nombre'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email') ,
            'localidad' => $request->input('localidad'),
            'intereses' => $request->input('intereses'),
            'comentarios'  => $request->input('comentarios')
        );

        $contactenos = new Contactenos();
        $contactenos->nombre = $request->input('nombre');
        $contactenos->telefono = $request->input('telefono');
        $contactenos->correo = $request->input('email');
        $contactenos->localidad = $request->input('localidad');
        $contactenos->temainteres = $request->input('nombre');
        $contactenos->comentarios = $request->input('comentarios');

        $contactenos->save();

        return "El mensaje fue guardado con éxito";
    }
}
