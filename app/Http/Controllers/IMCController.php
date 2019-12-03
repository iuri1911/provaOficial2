<?php

namespace App\Http\Controllers;

use App\Models\IMC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IMCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultado = new IMC;
        $resultado = DB::select('select * from i_m_c_s');
        return view('index')->with('resultado', $resultado);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        //
        $imc = new IMC();
        $imc->nome = $request->nome;
        $imc->peso = $request->peso;
        $imc->altura = $request->altura;
        $imc->resultado = $request->resultado;


        $nomec = $request->nome;
        $pesoc = $request->peso;
        $alturac = $request->altura;

        $massa = $pesoc / ($alturac * $alturac);    //calculo
        $imc->resultado = round($massa);

        if ($massa < 20) {
            $imc->diagnostico ="magro";
            } elseif(($massa > 20) and ($massa <25)) {
            $imc->diagnostico = "normal";
            } else {	
            $imc->diagnostico = "gordo";
            }
            $imc->save();

        return redirect()->route('listarIMC');
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
