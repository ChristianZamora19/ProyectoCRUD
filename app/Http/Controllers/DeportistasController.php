<?php

namespace App\Http\Controllers;

use App\Models\deportistas;
use Illuminate\Http\Request;

class DeportistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['deportista']=deportistas::paginate(50);
        return view('Deportistas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Deportistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosDeportista = request()->all();
        $datosDeportista = request()->except('_token');
        deportistas::insert($datosDeportista);
        //return response()->json($datosDeportista);
        return redirect('Deportistas')->with('mensaje','Deportista agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\deportistas  $deportistas
     * @return \Illuminate\Http\Response
     */
    public function show(deportistas $deportistas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\deportistas  $deportistas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $deportistas=deportistas::findOrFail($id);
        return view('Deportistas.edit', compact('deportistas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\deportistas  $deportistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosDeportista = request()->except(['_token','_method']);
        deportistas::where('id','=',$id)->update($datosDeportista);

        $deportistas=deportistas::findOrFail($id);
        return view('Deportistas.edit', compact('deportistas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\deportistas  $deportistas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        deportistas::destroy($id);
        return redirect('deportistas')->with('mensaje','Deportista Eliminado');
    }
}
