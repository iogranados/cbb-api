<?php

namespace App\Http\Controllers;

use App\Alumno;
use Laravel\Lumen\Http\Request;

class AlumnosController extends Controller{
    function index(){
        $alumnos = Alumno::all();
        return response()->json($alumnos, 200);
    }

    function createAlumno(Request $req){
        $data = $req->json()->all();
        $alumno = Alumno::create([
           'name' => $data['name'],
           'last_name' => $data['last_name'],
           'birthday' => $data['birthday'],
           'hobby' => $data['hobby'],
           'profession' => $data['profession'],
           'about_you' => $data['about_you'],
           'photo_small' => $data['photo_small'],
           'photo_large' => $data['photo_large']
        ]);

        return response()->json($alumno, 201);
    }
}
