<x-main-layout>
    <h1>Aquí se mostrará!</h1>
    <div>Nombre: {{$recipe->name}}</div>
    <div>{{ $recipe->description }}</div>
    <div>{{ $recipe->instructions }}</div>
</x-main-layout>