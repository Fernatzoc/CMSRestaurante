@php 
    $aux2 = false;
@endphp


<div style="color: rgba(255, 255, 255, 0.616); margin-top: 50px;">

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
        <div class="texto-historia" style="margin-top: 60px;">
            <div class="historia-restaurante mb-4">
                <h2>{{ $event->title }}</h2>
            </div>
        </div>
        <div class="texto-historia">
            <div class="imagen-acercade"> <img src="{{ $event->get_image }}" alt=""></div>
            <div class="historia-restaurante h3 mt-4">
                {{ $event->description }}
                <h2>
                    {{ $event->date }}
                </h2>
            </div>
        </div>

    @endif
   @endforeach
</div>
