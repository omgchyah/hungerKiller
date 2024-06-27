<x-main-layout>
    <a href="<?php echo WEB_ROOT;?>/recipes">Volver</a>
    <h1>Aquí se mostrará!</h1>
    <div>Nombre: {{$recipe->name}}</div>
    <div>Descripción: {{ $recipe->description }}</div>
    <div>Instrucciones: {{ $recipe->instructions }}</div>
</x-main-layout>