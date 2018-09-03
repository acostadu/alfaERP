<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use sasco\LibreDTE\FirmaElectronica;
use sasco\LibreDTE\Chile;

use sasco\LibreDTE\Sii;
//use sasco\LibreDTE\Estado;
//use sasco\LibreDTE\PDF;
//
//use sasco\LibreDTE\I18n;
use sasco\LibreDTE\Sii\Certificacion\SetPruebas;
use Illuminate\Support\Facades\Storage;


class DteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$config = [
            'firma' => [
                'file' => storage_path().'\app\public\certs\100.cer', //'../ruta/al/certificado.p12',
                //'data' => '', // contenido del archivo certificado.p12
                'pass' => '',
            ],
        ];*/

        //var_dump(Sii::CERTIFICACION);
        // trabajar en ambiente de certificación
        Sii::setAmbiente(Sii::CERTIFICACION);

        // trabajar con maullin para certificación
        Sii::setServidor('maullin');        
        //var_dump(Sii::getServidor());
        // Objetos de Firma
        //$Firma = new FirmaElectronica($config['firma']);
        // folios a usar para el set de pruebas
        $folios = [
            33 => 10,
            56 => 20,
            61 => 30,
        ];

        // Obtener JSON del set de pruebas
        dd(SetPruebas::getJSON(file_get_contents(storage_path().'\app\public\set_pruebas\001-basico.txt'), $folios));
        //$url = Storage::url('file1.jpg');
        //echo storage_path().'\app\public';
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo Chile::getCiudad($id);
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
