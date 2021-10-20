@php 
    $aux = 1; 
    $aux2 = false;
@endphp

@foreach($categories as $category)
    @if( @sizeof($category->meals) != '0') {{-- Revisa si existe algun platillo --}}
        @php $aux2  = false; @endphp

        @foreach ($category->meals as $meal) {{-- Revisa que almenos uno este activo --}}
            @if($meal->active == 'on')
                @php $aux2 = true; @endphp
            @endif
        @endforeach

        @if($aux2)
            @php $aux++; @endphp
            <div class="menu-section @php if($aux == 2){ echo 'menu-2'; $aux=0;  }  @endphp"> 
            
                <div>
                    <img src="{{ $category->get_image }}" alt="" width="100%" height="auto">
                </div>
            
                <div class="menu-list">
                    <h2>{{ $category->name }}</h2>
                    @foreach($category->meals as $meal)
                        @if($meal->active == 'on')
                            {{-- <x-meal-component :meal="$meal"/> --}}
                            @include('components.meal-component', $meal)
                        @endif
                    @endforeach
                </div>
            </div>  
        @endif
    @endif
@endforeach




