<?php

namespace App\Http\Controllers;

use App\Srvdoc;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class SrvdocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $srvdocs = Srvdoc::orderBy('id', 'ASC')->paginate(7);

        return view('admin.srvdocs.index')->with('srvdocs',$srvdocs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.srvdocs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $srvdoc = new Srvdoc($request->all());
        
        $srvdoc->nombre = $request->input('nombre');
        $srvdoc->abreviatura = $request->input('abreviatura');
        $srvdoc->descripcion = $request->input('descripcion');
        $srvdoc->logo = $request->input('logo');
        $srvdoc->link = $request->input('link');
        $srvdoc->prioridad = $request->input('prioridad');
        $srvdoc->idServicio = $request->input('idServicio');
        
        $srvdoc->save();

        Flash::success("Se ha registrado el documento " . $srvdoc->nombre . " de forma exitosa!");

        return redirect()->action('SrvdocController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Srvdoc  $srvdoc
     * @return \Illuminate\Http\Response
     */
    public function show(Srvdoc $srvdoc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Srvdoc  $srvdoc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $srvdoc = Srvdoc::find($id);
        return view('admin.srvdocs.edit')->with('srvdoc', $srvdoc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Srvdoc  $srvdoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Srvdoc $srvdoc)
    {
        $srvdoc = Srvdoc::find($id);

        $srvdoc->nombre = $request->input('nombre');
        $srvdoc->abreviatura = $request->input('abreviatura');
        $srvdoc->descripcion = $request->input('descripcion');
        $srvdoc->logo = $request->input('logo');
        $srvdoc->link = $request->input('link');
        $srvdoc->prioridad = $request->input('prioridad');
        $srvdoc->idServicio = $request->input('idServicio');

        $srvdoc->save();

        flash::warning('El documento ' . $srvdoc->nombre . ' ha sido editado con exito!');

        return redirect()->action('SrvdocController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Srvdoc  $srvdoc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $srvdoc = Srvdoc::find($id);
        $srvdoc->delete();

        Flash::error('El documento ' . $srvdoc->nombre . ' ha sido borrado de forma exitosa!');

        return redirect()->action('SrvdocController@index');
    }
}
