@extends('layouts.app')

@section('image-header')
<header style="background-image: url('/storage/{{$empresa->imgConocenos}}');">
@endsection

@section('content')
<section class="conocenos contenedor">
    <div>
        <div class="parrafouno">
            <h4>Winners of international cooking competitions, James and Steve are the co-founders and head chefs at Steak House. We are experienced and passionate chefs wanting to serve you the best delicacies that will satisfy your taste buds.</h4>
            <img src="https://websitedemos.net/steak-house-02/wp-content/uploads/sites/841/2021/05/about-img.jpg" alt="">
        </div>
        <div class="titulohistoria">
            <h2>Nuestra Historia</h2>
            <div class="nuestrahistoria">
                <h3>Most loved steak house since 1985 </h3>
                <p>Our steak story dates back to 1985 when James, a steak lover himself, had the urge of serving the most delicious recipes for foodies like him. It was then that he met Steve, a passionate chef who shared similar interests.
                    They started a small food let that offered takeaways only.</p>
                <p>Seeing the love the city had for steak, they expanded their team with 8 more chefs from different parts of the country so we could serve more variety on the table. .
                    Ever since, we’ve been known as the best Steak house in town serving over 1000 customers everyday. Humbled by the love we’ve received, we strive to continue giving you the best.</p>
            </div>
        </div>
    </div>
</section>
<div class="fondo-fijo img-conocenos"></div>
@endsection