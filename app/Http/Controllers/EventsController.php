<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Http\Requests\EventsRequest;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $events = Events::latest()->get();

        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventsRequest $request)
    {
        $event = Events::Create( $request->all() );

        if($request->file('image')){
            $event->image = $request->file('image')->store('events', 'public');

            $event->save();
        }

        return back()->with('status', 'Evento Creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(EventsRequest $request, Events $event)
    {
        $img_actual = $event->image;
        $event->active = 'off';

        $event->update( $request->all() );

        if($request->file('image')){

            Storage::disk('public')->delete($img_actual);

            $event->image = $request->file('image')->store('events', 'public');

            $event->save();

        }

        return back()->with('status', 'Evento Actualizado');
                
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $event)
    {
        Storage::disk('public')->delete($event->image);

        $event->delete();

        return back()->with('status', 'Evento Eliminado');

    }
}
