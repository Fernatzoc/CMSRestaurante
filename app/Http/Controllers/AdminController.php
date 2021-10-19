<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Events;
use App\Models\Meal;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $users = User::count();
        $categories = Category::count();
        $meals = Meal::count();
        $events = Events::count();

        return view('admin.index', 
            compact('users', 'categories', 'meals', 'events')
        );
        
    }
}
