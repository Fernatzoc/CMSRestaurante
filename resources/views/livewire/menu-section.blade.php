@php $aux = 1; @endphp

@foreach($categories as $category)
    @if( @sizeof($category->meals) != '0')
    @php $aux++; @endphp
    <div class="menu-section @php if($aux == 2){ echo 'menu-2'; $aux=0;  }  @endphp"> 
    
        <div style="color: white; font-size: 18px;">
            <img src="{{ $category->get_image }}" alt="">
        </div>
    
        <div class="menu-list">
            <h2>{{ $category->name }}</h2>
            @foreach($category->meals as $meal)
                @if($meal->active == 'on')
                    <x-meal-component :meal="$meal"/>
                @endif
            @endforeach
        </div>
    </div>
    @endif
@endforeach




