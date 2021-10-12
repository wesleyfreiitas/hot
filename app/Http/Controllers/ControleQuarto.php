<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quarto;

class ControleQuarto extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function indexView()
    {
        return view('quartos');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quarto = Quarto::all();
        return $quarto->toJson();

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
        $quarto = new Quarto();
        $quarto->nome = $request->input('nome');
        $quarto->vlr_diaria = $request->input('vlr_diaria');
        $quarto->save();
        return json_encode($quarto);
    }


    public function show($id)
    {
        $quartos = Quarto::find($id);
        if (isset($quartos)){
            return json_encode($quartos);
        }
        return response('Quarto não encontrado', 404);
    }


    public function edit($id)
    {
        //
    }
    public function atualizaQuarto(Request $request, $id){
        $quarto = Quarto::find($id);
        if (isset($quarto)){
            $quarto->id = $request->input('quarto_id');
            $quarto->status = $request->input('status');
            $quarto->save();
            return json_encode($quarto);
        }
        return view('404');
    }
    public function update(Request $request, $id)
    {
        $quarto = Quarto::find($id);
        if (isset($quarto)){
            $quarto->nome = $request->input('nome');
            $quarto->vlr_diaria = $request->input('vlr_diaria');
            $quarto->save();
            return json_encode($quarto);
        }
        return view('404');
    }



    public function destroy( Request $request, $id)
    {
        $quarto = Quarto::find($id);
        if(isset($quarto)){
            $quarto->delete();
            return response('OK', 200);
        }
        return view('404');
    }
}
