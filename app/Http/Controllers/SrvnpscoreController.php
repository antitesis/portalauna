<?php

namespace App\Http\Controllers;

use App\Srvnpscore;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class SrvnpscoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $srvnpscores = Srvnpscore::orderBy('id', 'ASC')->paginate(7);

        return view('admin.srvnpscores.index')->with('srvnpscores',$srvnpscores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.srvnpscores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $srvnpscore = new Srvnpscore($request->all());
        
        $srvnpscore->nombre = $request->input('nombre');
        $srvnpscore->tipo = $request->input('tipo');
        $srvnpscore->año = $request->input('año');
        $srvnpscore->localidad = $request->input('localidad');
        $srvnpscore->frecuencia = $request->input('frecuencia');
        $srvnpscore->origen = $request->input('origen');
        $srvnpscore->contacto = $request->input('contacto');
        $srvnpscore->link = $request->input('link');
        $srvnpscore->idServicio = $request->input('idServicio');
        
        $srvdoc->save();

        Flash::success("Se ha registrado el documento " . $srvdoc->nombre . " de forma exitosa!");

        return redirect()->action('SrvnpscoreController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Srvnpscore  $srvnpscore
     * @return \Illuminate\Http\Response
     */
    public function show(Srvnpscore $srvnpscore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Srvnpscore  $srvnpscore
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $srvnpscore = Srvnpscore::find($id);
        return view('admin.srvnpscores.edit')->with('srvnpscore', $srvnpscore);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Srvnpscore  $srvnpscore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $srvnpscore = Srvnpscore::find($id);

        $srvnpscore->nombre = $request->input('nombre');
        $srvnpscore->tipo = $request->input('tipo');
        $srvnpscore->año = $request->input('año');
        $srvnpscore->localidad = $request->input('localidad');
        $srvnpscore->frecuencia = $request->input('frecuencia');
        $srvnpscore->origen = $request->input('origen');
        $srvnpscore->contacto = $request->input('contacto');
        $srvnpscore->link = $request->input('link');
        $srvnpscore->idServicio = $request->input('idServicio');

        $srvnpscore->save();

        flash::warning('El NPS ' . $srvnpscore->nombre . ' ha sido editado con exito!');

        return redirect()->action('SrvnpscoreController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Srvnpscore  $srvnpscore
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $srvnpscore = Srvnpscore::find($id);
        $srvnpscore->delete();

        Flash::error('El NPS ' . $srvnpscore->nombre . ' ha sido borrado de forma exitosa!');

        return redirect()->action('SrvnpscoreController@index');
    }
}
