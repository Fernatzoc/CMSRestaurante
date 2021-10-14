@php
    $aux = 1;
@endphp

@foreach($categories as $category)
@php
    $aux++;
@endphp
<div class="menu-section @php if($aux == 2){ echo 'menu-2'; $aux=0;  }  @endphp"> 

    <div style="color: white; font-size: 18px;">
        <img src="{{ $category->get_image }}" alt="">
    </div>

    <div class="menu-list">
        <h2>{{ $category->name }}</h2>
        @foreach($category->meals as $meal)
        <div class="menu-platillo">
            <div class="menu-platillo-content">
                <h3>{{ $meal->name }}</h3>
                <p>{{ $meal->description }}</p>
            </div>
            <div class="menu-platillo-price">
                <p>Q{{ $meal->price }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endforeach




