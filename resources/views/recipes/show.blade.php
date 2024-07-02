<x-main-layout>
    <a href="<?php echo WEB_ROOT;?>/recipes">Volver</a>
    <h1>Aquí se mostrará!</h1>
    <div>Nombre: {{$recipe->name}}</div>
    <div>Descripción: {{ $recipe->description }}</div>
    <div>Servings: {{ $recipe->servings }}</div>
    <div>Difficulty: {{ $recipe->difficulty }}</div>
    <div>Category: {{ $recipe->category }}</div>
    <div>Restrictions: {{ $recipe->restrictions }}</div>
    <div>Prep time: {{ $recipe->restrictions }}</div>
    <div>Cooking time: {{ $recipe->restrictions }}</div>
    <div>Restrictions: {{ $recipe->restrictions }}</div>
    <div>Instrucciones: {{ $recipe->instructions }}</div>
    <div></div>
</x-main-layout>