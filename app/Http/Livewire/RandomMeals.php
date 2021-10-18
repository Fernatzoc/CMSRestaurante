<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Meal;

class RandomMeals extends Component
{
    public function render()
    {
        $meals = Meal::inRandomOrder()->get()
        ->where('price','>','25')
        ->where('active','=','on')
        ->where('category_id', '!=', null) 
        ->take(4); 

        return view('livewire.random-meals', compact('meals'));
    }
}
