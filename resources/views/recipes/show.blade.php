<x-main-layout>
    <a href="<?php echo WEB_ROOT;?>/recipes">Volver</a>
    @if($recipe)
    <h1>Aquí se mostrará!</h1>
    <div>Nombre: {{ $recipe->name }}</div>
    <div>Descripción: {{ $recipe->description }}</div>
    <div>Servings: {{ $recipe->servings }}</div>
    <div>Difficulty: {{ $recipe->difficulty }}</div>
    <div>Category: {{ $recipe->category }}</div>
    <div>Restrictions: {{ $recipe->restrictions }}</div>
    <div>Prep time: {{ $recipe->prep_time }}</div>
    <div>Cooking time: {{ $recipe->cooking_time }}</div>
    <div>Total time: {{ $recipe->total_time }}</div>
    <div>Instrucciones: {{ $recipe->instructions }}</div>
    <div>
        <h2>Ingredients:</h2>
        <ul>
            @foreach ($recipe->ingredients as $ingredient)
                <li>
                     {{ $ingredient->pivot->quantity }} {{ $ingredient->pivot->measurement}} {{ $ingredient->name}}
                </li>
            @endforeach
        </ul>
    </div>
    @if ($recipe->image_path)
        <div><img src="{{ asset('storage/' . $recipe->image_path) }}" alt="Recipe Image"></div>
    @endif
    <div>
        <a href="<?php echo WEB_ROOT;?>/recipes/{{ $recipe->id }}/edit">
            Editar receta
        </a>
        <form action="<?php echo WEB_ROOT;?>/recipes/{{$recipe->id}}" method="POST">

            @csrf

            @method('DELETE')
            <button>
                Eliminar post
            </button>
        </form>
    </div>
    @else
        <div>Recipes not found.</div>
    @endif
</x-main-layout>