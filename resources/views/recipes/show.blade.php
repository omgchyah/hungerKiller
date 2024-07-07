<x-main-layout>
    <div class="flex items-center justify-between p-4 font-plex">
        <a href="{{ url('/recipes') }}" class="text-red-500 hover:underline">Volver al inicio</a>
        @if($recipe)
        <div class="flex space-x-4">
            <a href="{{ url('/recipes/' . $recipe->id . '/edit') }}" class="text-blue-500 hover:underline">Editar receta</a>
            <form action="{{ url('/recipes/' . $recipe->id) }}" method="POST" onsubmit="return confirmDelete()">
                @csrf
                @method('DELETE')
                <button class="text-red-500 hover:underline">
                    Eliminar post
                </button>
            </form>
        </div>
        @endif
    </div>

    @if($recipe)
    <!-- First Division: Image and Basic Info -->
    <div class="flex justify-around p-4 mb-4">
        <div class="w-1/2 pr-4">
            @if ($recipe->image_path)
                <img src="{{ asset('storage/' . $recipe->image_path) }}" alt="Recipe Image" class="w-full h-auto">
            @else
                <div class="w-full h-auto bg-gray-200"></div>
            @endif
        </div>
        <div class="w-1/2 pl-4">
            <div class="text-2xl font-bold">{{ $recipe->name }}</div>
            <div class="mt-2 font-plex">{{ $recipe->description }}</div>
            <div class="mt-2 font-plex">Servings: {{ $recipe->servings }}</div>
            <div class="mt-2 font-plex">Difficulty: {{ $recipe->difficulty }}</div>
            <div class="mt-2 font-plex">Category: {{ $recipe->category }}</div>
            <div class="mt-2 font-plex">Restrictions: {{ $recipe->restrictions }}</div>
        </div>
    </div>

    <!-- Thin Black Bar -->
    <div class="w-full h-0.5 mx-auto my-1 bg-black"></div>

    <!-- Second Division: Time Information -->
    <div class="flex justify-center px-4 py-2 space-x-4 text-center font-plex">
        <div>Prep time: {{ $recipe->prep_time }}</div>
        <div> | Cooking time: {{ $recipe->cooking_time }}</div>
        <div>| Total time: {{ $recipe->total_time }}</div>
    </div>
    
    <!-- Thin Black Bar -->
    <div class="w-full h-0.5 mx-auto my-1 bg-black"></div>

    <!-- Third Division: Ingredients and Instructions -->
    <div class="flex justify-around p-4 mb-16">
        <div class="w-1/2 pr-4">
            <h2 class="text-xl font-bold">Ingredients:</h2>
            <ul class="ml-4 list-disc list-inside font-plex">
                @foreach ($recipe->ingredients as $ingredient)
                    <li>{{ $ingredient->pivot->quantity }} {{ $ingredient->pivot->measurement }} {{ $ingredient->name }}</li>
                @endforeach
            </ul>
        </div>
        <div class="w-1/2 pl-4">
            <h2 class="text-xl font-bold">Instructions:</h2>
            <div class="mt-2 font-plex">{{ $recipe->instructions }}</div>
        </div>
    </div>

    @else
        <div class="p-4">Recipes not found.</div>
    @endif

    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this recipe? This action cannot be undone.');
        }
    </script>
    
</x-main-layout>
