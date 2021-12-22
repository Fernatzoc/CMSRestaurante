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
    aux = false,
    items_menu_categories = document.getElementsByClassName('item_menu_categories'),
    button_menu_categories = document.getElementById('button_dropup_menu')

for(let i=0; i < items_menu_categories.length; i++ ){
    items_menu_categories[i].onclick = () => {
        aux = false
        button_menu_categories.innerHTML = '<i class="fas fa-hamburger"></i>'
        button_menu_categories.classList.remove('dropup-menu-animation-forwards')
        button_menu_categories.classList.add('dropup-menu-animation-backwards')
        menu_categories.classList.remove('anim_menu_categories')
        menu_categories.classList.add('anim_menu_categories_close')
    }
}

button_menu_categories.onclick = function(){

    if(!aux){
        this.innerHTML = '<i class="fas fa-times" style=" font-size: 33px; margin-left: 5px; margin-right: 5px;"></i>'
        this.classList.remove('dropup-menu-animation-backwards')
        this.classList.add('dropup-menu-animation-forwards')
        menu_categories.classList.remove('anim_menu_categories_close')
        menu_categories.classList.add('anim_menu_categories')
        aux = true
    }else{
        this.innerHTML = '<i class="fas fa-hamburger"></i>'
        this.classList.remove('dropup-menu-animation-forwards')
        this.classList.add('dropup-menu-animation-backwards')
        menu_categories.classList.remove('anim_menu_categories')
        menu_categories.classList.add('anim_menu_categories_close')
        aux = false
    }

}

</script>


@endsection
