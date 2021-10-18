<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Events;

class EventsSection extends Component
{
    public function render()
    {
        $events = Events::latest()->get();

        return view('livewire.events-section', compact('events'));
    }
}
