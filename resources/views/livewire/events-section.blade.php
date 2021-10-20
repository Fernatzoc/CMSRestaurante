@php 
    $aux2 = false;
@endphp


<div style="color: white; margin-top: 30px;">

    @foreach ($events as $event) {{-- Revisa que almenos uno este activo --}}
    @if($event->active == 'on')
        @php $aux2 = true; @endphp
    @endif
    @endforeach
    
    @if($aux2)
    <h1>Proximos Eventos</h1>
    @endif

   @foreach($events as $event)
    @if($event->active == 'on')
        <h1>
            {{ $event->title }}
        </h1>
        <div class="imagen-acercade"> <img src="{{ $event->get_image }}" alt="" width="100%" height="auto"></div>
        <div class="mt-5">
            <h2>
                {{ $event->description }}
            </h2>
        </div>
        <h1>
            {{ $event->date }}
        </h1>
    @endif
   @endforeach
</div>
