<?php

namespace App\Http\Controllers;

use App\Incidencia;
use App\Objeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $incidencias = Incidencia::all(); //Todas las incidencias
      $objetos = DB::table('objetos')->get(); //Todos los objetos
      return view('incidenciasIndex', compact('incidencias', 'objetos'));
    }

    public function indexEncontrados()
    {
      $incidencias = DB::table('incidencias')->where('tipo', TRUE)->get(); //Objetos encontrados
      $objetos = DB::table('objetos')->where('tipo', TRUE)->get(); //Objetos encontrados
      //$objetos = Objetos::all();
      return view('encontradosIndex', compact('incidencias', 'objetos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('encontradoFormulario'); //Reportar objeto encontrado
    }

    public function createReporte()
    {
      return view('perdidoFormulario'); //Reportar objeto perdido
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if($request->tipo == "Encontrado") //Si fue encontrado
      {
        $request->validate([
          'nombre' => 'required|string|min:3|max:50',
          'color' => 'string|min:3|max:100',
          'edificio' => 'required|string|min:1|max:50',
          'aula' => 'max:25',
          'ubicacionActual' => 'required|string|min:1|max:50',
        ]);

        $obj = new Objeto();
        $obj->nombre = $request->nombre;
        $obj->color = $request->color;
        $obj->tipo = true;
        $inc = new Incidencia();
        $inc->tipo = true;
        $inc->estado = false;
        $inc->fechaIncidente = \Carbon\Carbon::today()->toDateString();
        $inc->edificio = $request->edificio;
        $inc->aula = $request->aula;
        $inc->ubicacionActual = $request->ubicacionActual;
        //$inc->objeto_id = DB::select('SELECT COUNT(*)+1 FROM `vistoqci`.`incidencias`', [1]);
        //$inc->objeto_id = (int)$inc->objeto_id;
        $inc->objeto_id = DB::table('incidencias')->count()+1;
        $obj->save();
        $inc->save();

        return redirect()->route('inicio')
          ->with([
              'mensaje' => 'Gracias por tu reporte, el objeto perdido ha sido añadido a la lista.',
              'alert-class' => 'alert-warning'
          ]);
      }
      else if($request->tipo == "Perdido") //Si fue perdido
      {
        $request->validate([
          'nombre' => 'required|string|min:3|max:50',
          'color' => 'string|min:3|max:100',
          'edificio' => 'required|string|min:1|max:50',
          'aula' => 'max:25',
          'name' => 'required|string|min:1|max:50',
          'contacto' => 'required|string|min:1|max:50',
        ]);

        $obj = new Objeto();
        $obj->nombre = $request->nombre;
        $obj->color = $request->color;
        $obj->tipo = false;
        $inc = new Incidencia();
        $inc->tipo = false;
        $inc->estado = false;
        $inc->fechaIncidente = \Carbon\Carbon::createFromFormat('Y-m-d', $request->input('fechaIncidente'))->toDateString();
        $inc->edificio = $request->edificio;
        $inc->aula = $request->aula;
        $inc->ubicacionActual = "Perdido";
        $inc->nombre = $request->name;
        $inc->contacto = $request->contacto;
        //$inc->objeto_id = DB::select('SELECT COUNT(*)+1 FROM `vistoqci`.`incidencias`', [1])[0];
        $inc->objeto_id = DB::table('incidencias')->count()+1;
        $obj->save();
        $inc->save();

        return redirect()->route('inicio')
          ->with([
              'mensaje' => 'Gracias por tu reporte, el objeto perdido ha sido añadido a la lista.',
              'alert-class' => 'alert-warning'
          ]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
