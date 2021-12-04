@extends('layouts.app')

@section('image-header')
<header style="background-image: url('/storage/{{$empresa->imgMenu}}');">
@endsection

@section('titulo')
    <div>
        {{$empresa->tituloMenu}}
    </div>
@endsection

@section('content')
<section class="contenedor">

    {{-- <livewire:menu-section> --}}
    @livewire('menu-section')

</section>


{{-- drop up menu for categories --}}

<div class="dropup-menu" id="button_dropup_menu">
    <i class="fas fa-hamburger"></i>
</div>


<script>

var menu_categories = document.getElementById('menu_categories'),
    aux = false

document.getElementById('button_dropup_menu').onclick = function(){

    if(!aux){
        this.innerHTML = '<i class="fas fa-times" style=" font-size: 33px; margin-left: 5px; margin-right: 5px;"></i>'
        menu_categories.classList.remove('anim_menu_categories_close')
        menu_categories.classList.add('anim_menu_categories')
        aux = true
    }else{
        this.innerHTML = '<i class="fas fa-hamburger"></i>'
        menu_categories.classList.remove('anim_menu_categories')
        menu_categories.classList.add('anim_menu_categories_close')
        aux = false
    }

}

</script>


@endsection
