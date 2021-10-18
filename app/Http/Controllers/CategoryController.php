<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::latest()
        ->where('name', 'LIKE', "%$request->adminlteSearch%" )
        ->paginate(10);

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CategoryRequest  $CategoryRequest
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $CategoryRequest)
    {
        $category = Category::create( $CategoryRequest->all() );


        if($CategoryRequest->file('image')){
            $category->image = $CategoryRequest->file('image')->store('categories','public');
            $category->save();
        }

        return back()->with('status','Se creo categoria con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\CategoryRequest  $CategoryRequest
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $CategoryRequest, Category $category)
    {
        
        $img_actual = $category->image;
        
        $category->update($CategoryRequest->all());

        if($CategoryRequest->file('image')){

            Storage::disk('public')->delete($img_actual);
            
            $category->image = $CategoryRequest->file('image')->store('categories', 'public'); //almacenar la img y retornar la url 
            $category->save();
        }

        return back()->with('status', 'Categoria Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Storage::disk('public')->delete($category->image);

        $category->delete();

        return back()->with('status','Categoria Eliminada');
    }
}
