<?php

namespace App\Http\Controllers;

use App\Models\ReportAsistencia;
use Illuminate\Http\Request;

class ReportAsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportAsistencia=reportAsistencia::all();
        return view('reportAsistencia.index',compact('reportAsistencia'));
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
     * @param  \App\Models\ReportAsistencia  $reportAsistencia
     * @return \Illuminate\Http\Response
     */
    public function show(ReportAsistencia $reportAsistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReportAsistencia  $reportAsistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportAsistencia $reportAsistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportAsistencia  $reportAsistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportAsistencia $reportAsistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportAsistencia  $reportAsistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportAsistencia $reportAsistencia)
    {
        //
    }
}
