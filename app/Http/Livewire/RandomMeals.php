<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class RandomMeals extends Component
{
    public function render()
    {
        $categories = Category::inRandomOrder()->get()->take(4);

        return view('livewire.random-meals', compact('categories'));
    }
}
