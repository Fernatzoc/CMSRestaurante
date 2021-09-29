<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = Empresa::take(1)->first();
        return view('admin.empresa.index')->with('empresa', $empresa);
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
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {

        $data = $request->validate([
            'nombreEmpresa'    => 'required',
            'direccion'        => 'required',
            'telefono'         => 'required',
            'facebook'         => 'required',
            'instagram'        => 'required',
            'conocenos'        => 'required',
            'tituloHome'       => 'required',
            'sobreNosotros'    => 'required',
            'tituloConocenos'  => 'required',
            'tituloMenu'       => 'required',
            'tituloContacto'   => 'required',
            'logo'             => 'image',
            'imagenHome'       => 'image',
            'imgConocenos'     => 'image',
            'imgMenu'          => 'image',
            'imgContacto'      => 'image',

        ]);

        $empresa = Empresa::find(1);

        if( request('logo')) {
            $ruta_imagen = $request['logo']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(1200,550);
            $img->save();
            $empresa->logo = $ruta_imagen;
        }

        if( request('imagenHome')) {
            $ruta_imagen = $request['imagenHome']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(1200,550);
            $img->save();
            $empresa->imagenHome = $ruta_imagen;
        }

        if( request('imgConocenos')) {
            $ruta_imagen = $request['imgConocenos']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(1200,550);
            $img->save();
            $empresa->imgConocenos = $ruta_imagen;
        }

        if( request('imgMenu')) {
            $ruta_imagen = $request['imgMenu']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(1200,550);
            $img->save();
            $empresa->imgMenu = $ruta_imagen;
        }


        if( request('imgContacto')) {
            $ruta_imagen = $request['imgContacto']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(1200,550);
            $img->save();
            $empresa->imgContacto = $ruta_imagen;
        }
        
        

        $empresa->nombreEmpresa = $data['nombreEmpresa'];
        $empresa->conocenos = $data['conocenos'];
        $empresa->tituloHome = $data['tituloHome'];
        $empresa->sobreNosotros = $data['sobreNosotros'];
        $empresa->tituloConocenos = $data['tituloConocenos'];
        $empresa->tituloMenu = $data['tituloMenu'];
        $empresa->tituloContacto = $data['tituloContacto'];
        $empresa->direccion = $data['direccion'];
        $empresa->telefono = $data['telefono'];
        $empresa->facebook = $data['facebook'];
        $empresa->instagram = $data['instagram'];

        $empresa->save();


        return redirect()->action([EmpresaController::class, 'index']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
