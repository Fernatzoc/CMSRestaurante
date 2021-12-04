<div class="separador-platillo"></div>

<div class="menu-platillo">
    <div class="menu-platillo-content">
        @if(@$meal->active != 'on')
            <h3>(no disponible)</h3>
        @endif
        <h3>{{ $meal->name }}</h3>
        <p>{{ $meal->description }}</p>
    </div>
    <div class="menu-platillo-price">
        <p>Q{{ $meal->price }}</p>
    </div>
</div>

<style>
    @media only screen and (max-width: 767px){
        .separador-platillo{
            border-bottom: 1px solid #f89e4a; margin: 20px auto; width: 30%
        }
    }
</style>
