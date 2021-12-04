@php
    $aux = 1;
@endphp

@foreach($categories as $category)
    @if( @sizeof($category->meals) != '0') {{-- Revisa si existe algun platillo --}}
        @php $aux++; @endphp
        <div id="{{$category->name}}" class="menu-section @php if($aux == 2){ echo 'menu-2'; $aux=0;  }  @endphp">



            <div>
                <img src="{{ $category->get_image }}" alt="" width="100%" height="auto">
            </div>


            <div class="menu-list">
                <h2 class="titulo_categoria">{{ $category->name }}</h2>
                @foreach($category->meals as $meal)
                @include('components.meal-component', $meal)
                @endforeach
            </div>

            <div style="border-bottom: 2px dotted #f89e4a; margin-top: 80px"></div>

        </div>
    @endif
@endforeach


<div class="menu_categories" id="menu_categories">

    @foreach($categories as $category)

    <div class="item_menu_categories"> <i class="fas fa-utensils"></i> <a href="#{{$category->name}}"> {{$category->name}} </a> </div>
    <hr>

    @endforeach

</div>

<style>
    @media only screen and (max-width: 400px){
        .titulo_categoria{
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 40px !important;
        }
    }
</style>



