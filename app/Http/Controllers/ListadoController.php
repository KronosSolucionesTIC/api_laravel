<?php

namespace App\Http\Controllers;

use App\Listado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Consulta todos los libros con autores
        $libros = DB::table('Books')
            ->join('Authors', 'Authors.author_id', '=', 'Books.author_id')
            ->select('Books.publish_date','Books.title','Authors.name')
            ->get();
        return $libros;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Listado  $listado
     * @return \Illuminate\Http\Response
     */
    public function show(Listado $listado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listado  $listado
     * @return \Illuminate\Http\Response
     */
    public function edit(Listado $listado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listado  $listado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listado $listado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listado  $listado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listado $listado)
    {
        //
    }
}
