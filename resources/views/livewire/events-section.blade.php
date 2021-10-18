<div style="color: white; margin-top: 30px;">
    <h1>Proximos Eventos</h1>
   @foreach($events as $event)
    @if($event->active == 'on')
        <div>
            {{ $event->title }}
        </div>
        <div>
            <img src="{{ $event->get_image }}" alt="">
        </div>
        <div>
            {{ $event->description }}
        </div>
        <div>
            {{ $event->date }}
        </div>
    @endif
   @endforeach
</div>
