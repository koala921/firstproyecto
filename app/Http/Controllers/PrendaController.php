<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use Illuminate\Http\Request;
use App\Models\categoria;


class PrendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prendas= Prenda::all();
        return view('prendaIndex', compact('prendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('prendaCreate',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Producto::create([
        //     'Sudaderas' => $request->input('Sudaderas')
        //     'Playeras' => $request->input('Playeras')
        // ]);
        // $datosProducto = $request ->only(['Sudaderas','Playeras'])
        // Producto :: create ($datosProducto);
        $prenda= new Prenda();
        $prenda->Sudaderas = $request->Sudaderas;
        $prenda->Playeras = $request->Playeras;
        $prenda->created_at= $request->created_at;
        $prenda->save();
        $prenda->categorias()->attach($request->categorias);
        Session()->flash('success', 'Se ha guardado con exito');
        return redirect('/prenda');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prenda $prenda)
    {
        return view('/prendaShow', compact('prenda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prenda $prenda)
    {
        $categorias = Categoria::all();
        return view('prendaEdit', compact('categorias','prenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prenda $prenda)
    {
        $prenda->Sudaderas = $request->Sudaderas;
        $prenda->Playeras = $request->Playeras;
        $prenda->created_at= $request->created_at;
        $prenda->save();
        if($request->has('categorias')){
            $prenda->categorias()->sync($request->categorias);
        }else{
            $prenda->categorias()->detach();
        }
        return redirect('/prenda');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prenda $prenda)
    {
        $prenda->delete();
        Session()->flash('success','Se ha eliminado con éxito');
        return redirect('/prenda');
    }
}
