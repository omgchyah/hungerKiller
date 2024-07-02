<x-main-layout>
    <a href="<?php echo WEB_ROOT;?>/recipes">Volver</a>
    <h1>Aquí se mostrará!</h1>
    <div>Nombre: {{$recipe->name}}</div>
    <div>Descripción: {{ $recipe->description }}</div>
    <div>Servings: {{ $recipe->servings }}</div>
    <div>Difficulty: {{ $recipe->difficulty }}</div>
    <div>Category: {{ $recipe->category }}</div>
    <div>Restrictions: {{ $recipe->restrictions }}</div>
    <div>Prep time: {{ $recipe->prep_time }}</div>
    <div>Cooking time: {{ $recipe->cooking_time }}</div>
    <div>Total time: {{ $recipe->total_time }}</div>
    <div>Instrucciones: {{ $recipe->instructions }}</div>
    @if ($recipe->image_path)
        <div><?php echo $recipe->image_path ?><img src="{{ asset('storage/' . $recipe->image_path) }}" alt="Recipe Image"></div>
    @endif
</x-main-layout>