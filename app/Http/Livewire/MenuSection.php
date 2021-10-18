<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{Meal,Category};

class MenuSection extends Component
{
    public function render()
    {
        $categories = Category::with('meals')->orderby('section')->get();

        // dd($categories);

        return view('livewire.menu-section', compact('categories')); 
    }
}
