<?php

namespace App\Http\Controllers;

use App\Models\{Meal,Category};
use App\Http\Requests\MealRequest;
use Illuminate\Support\Facades\Storage;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::latest()->paginate(15);

        return view('admin.meal.index', compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();

        return view('admin.meal.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\MealRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MealRequest $request)
    {
        $meal = Meal::create( $request->all() );

        if($request->file('image')){
            $meal->image = $request->file('image')->store('meals', 'public');
            $meal->save();
        }

        return back()->with('status', 'Se creo platillo');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        $categories = Category::get();

        return view('admin.meal.edit', compact('meal','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\MealRequest  $request
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(MealRequest $request, Meal $meal)
    {
        $img_actual = $meal->image;
        
        $meal->update( $request->all() );

        if($request->file('image')){

            Storage::disk('public')->delete($img_actual);

            $meal->image = $request->file('image')->store('meals', 'public');
            $meal->save();
        }


        return back()->with('status', 'Platillo Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {

        Storage::disk('public')->delete($meal->image);

        $meal->delete();

        return back()->with('status', 'Platillo Eliminado');
    }
}
