<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $horarios = DB::table('horarios')->get();
        $empresa = Empresa::take(1)->first();
        return view('admin.empresa.index')->with(compact('horarios','empresa'));
    }

    public function update(Request $request, Empresa $empresa)
    {

        $data = $request->validate([
            'nombreEmpresa'    => 'required',
            'direccion'        => 'required',
            'telefono'         => 'required',
            'facebook'         => 'required',
            'instagram'        => 'required',
            'logo'             => 'image',
            'icono'            => 'image',
            'imgFooter'        => 'image',
            'openMonday'       => 'required',
            'closeMonday'      => 'required',
            'openTuesday'      => 'required',
            'closeTuesday'     => 'required',
            'openWednesday'    => 'required',
            'closeWednesday'   => 'required',
            'openThursdays'    => 'required',
            'closeThursdays'   => 'required',
            'openFriday'       => 'required',
            'closeFriday'      => 'required',
            'openSaturday'     => 'required',
            'closeSaturday'    => 'required',
            'openSunday'       => 'required',
            'closeSunday'      => 'required',
            'mapa'             => 'required',
        ]);


        DB::table('horarios')->where('id', 1)->update(['open_time' => $data['openMonday']]);
        DB::table('horarios')->where('id', 1)->update(['close_time' => $data['closeMonday']]);
        DB::table('horarios')->where('id', 2)->update(['open_time' => $data['openTuesday']]);
        DB::table('horarios')->where('id', 2)->update(['close_time' => $data['closeTuesday']]);
        DB::table('horarios')->where('id', 3)->update(['open_time' => $data['openWednesday']]);
        DB::table('horarios')->where('id', 3)->update(['close_time' => $data['closeWednesday']]);
        DB::table('horarios')->where('id', 4)->update(['open_time' => $data['openThursdays']]);
        DB::table('horarios')->where('id', 4)->update(['close_time' => $data['closeThursdays']]);
        DB::table('horarios')->where('id', 5)->update(['open_time' => $data['openFriday']]);
        DB::table('horarios')->where('id', 5)->update(['close_time' => $data['closeFriday']]);
        DB::table('horarios')->where('id', 6)->update(['open_time' => $data['openSaturday']]);
        DB::table('horarios')->where('id', 6)->update(['close_time' => $data['closeSaturday']]);
        DB::table('horarios')->where('id', 7)->update(['open_time' => $data['openSunday']]);
        DB::table('horarios')->where('id', 7)->update(['close_time' => $data['closeSunday']]);



        $empresa = Empresa::find(1);


        if( request('logo')) {
            $ruta_imagen = $request['logo']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"));
            $img->save();
            $empresa->logo = $ruta_imagen;
        }

        if( request('imgFooter')) {
            $ruta_imagen = $request['imgFooter']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(1200,550);
            $img->save();
            $empresa->imgFooter = $ruta_imagen;
        }

        if( request('icono')) {
            $ruta_imagen = $request['icono']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(512,512);
            $img->save();
            $empresa->icono = $ruta_imagen;
        }

        $empresa->nombreEmpresa = $data['nombreEmpresa'];
        $empresa->direccion = $data['direccion'];
        $empresa->telefono = $data['telefono'];
        $empresa->facebook = $data['facebook'];
        $empresa->instagram = $data['instagram'];
        $empresa->mapa = $data['mapa'];
        $empresa->save();


        return redirect()->action([EmpresaController::class, 'index']);
    }


    public function home()
    {
        $empresa = Empresa::take(1)->first();
        return view('admin.empresa.home')->with('empresa', $empresa);
    }

    public function home_update(Request $request, Empresa $empresa)
    {

        $data = $request->validate([
            'tituloHome'       => 'required',
            'sobreNosotros'    => 'required',
            'imagenHome'       => 'image',
            'imagenHome2'       => 'image',
            'imagenFija'       => 'image',

        ]);

        $empresa = Empresa::find(1);

        if( request('imagenHome')) {
            $ruta_imagen = $request['imagenHome']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(1200,550);
            $img->save();
            $empresa->imagenHome = $ruta_imagen;
        }

        if( request('imagenHome2')) {
            $ruta_imagen = $request['imagenHome2']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"));
            $img->save();
            $empresa->imagenHome2 = $ruta_imagen;
        }

        if( request('imagenFija')) {
            $ruta_imagen = $request['imagenFija']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"));
            $img->save();
            $empresa->imagenFija = $ruta_imagen;
        }

        $empresa->tituloHome = $data['tituloHome'];
        $empresa->sobreNosotros = $data['sobreNosotros'];
        $empresa->save();

        return redirect()->action([EmpresaController::class, 'home']);
    }


    public function conocenos()
    {
        $empresa = Empresa::take(1)->first();
        return view('admin.empresa.conocenos')->with('empresa', $empresa);
    }

    public function conocenos_update(Request $request, Empresa $empresa)
    {

        $data = $request->validate([
            'tituloConocenos'  => 'required',
            'conocenos'        => 'required',
            'parrafoConocenos'        => 'required',
            'imgConocenos'     => 'image',
            'imgConocenos2'     => 'image',
            'imagenFija2'     => 'image',
        ]);

        $empresa = Empresa::find(1);

        if( request('imgConocenos')) {
            $ruta_imagen = $request['imgConocenos']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(1200,550);
            $img->save();
            $empresa->imgConocenos = $ruta_imagen;
        }

        if( request('imgConocenos2')) {
            $ruta_imagen = $request['imgConocenos2']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"));
            $img->save();
            $empresa->imgConocenos2 = $ruta_imagen;
        }

        if( request('imagenFija2')) {
            $ruta_imagen = $request['imagenFija2']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"));
            $img->save();
            $empresa->imagenFija2 = $ruta_imagen;
        }

        $empresa->tituloConocenos = $data['tituloConocenos'];
        $empresa->parrafoConocenos = $data['parrafoConocenos'];
        $empresa->conocenos = $data['conocenos'];
        $empresa->save();

        return redirect()->action([EmpresaController::class, 'conocenos']);

    }


    public function menu()
    {
        $empresa = Empresa::take(1)->first();
        return view('admin.empresa.menu')->with('empresa', $empresa);
    }

    public function menu_update(Request $request, Empresa $empresa)
    {

        $data = $request->validate([
            'tituloMenu'       => 'required',
            'imgMenu'          => 'image',
        ]);

        $empresa = Empresa::find(1);


        if( request('imgMenu')) {
            $ruta_imagen = $request['imgMenu']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(1200,550);
            $img->save();
            $empresa->imgMenu = $ruta_imagen;
        }

        $empresa->tituloMenu = $data['tituloMenu'];
        $empresa->save();

        return redirect()->action([EmpresaController::class, 'menu']);
    }


    public function contacto()
    {
        $empresa = Empresa::take(1)->first();
        return view('admin.empresa.contacto')->with('empresa', $empresa);
    }

    public function contacto_update(Request $request, Empresa $empresa)
    {

        $data = $request->validate([
            'tituloContacto'   => 'required',
            'imgContacto'      => 'image',
        ]);

        $empresa = Empresa::find(1);

        if( request('imgContacto')) {
            $ruta_imagen = $request['imgContacto']->store('upload-images', 'public');
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(1200,550);
            $img->save();
            $empresa->imgContacto = $ruta_imagen;
        }

        $empresa->tituloContacto = $data['tituloContacto'];
        $empresa->save();

        return redirect()->action([EmpresaController::class, 'contacto']);
    }

}
