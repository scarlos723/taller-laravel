<?php

namespace App\Http\Controllers\ApiSample;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;  //los php al mismo nivel no se importan
use App\Models\Institucion;
use App\Services\InstitucionService;  //llamo al service para usaarlo

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $instService;
    public function __construct(){
        $this->instService = new InstitucionService();
    }

    public function index()
    {
        //$institucion = Institucion::all();
        //dd($institucion);
        $institucion=$this->instService->registrarInstitucion();
        return response()->json($institucion,200);  //enviar un json con su codigo de respuesta
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
        $institucion=$this->instService->registrarInstitucion($request->all());
        return response()->json($institucion,200);
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
