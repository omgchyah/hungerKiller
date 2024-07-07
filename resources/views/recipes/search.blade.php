<x-main-layout>
    <div class="flex items-center justify-between p-4 font-plex">
        <a href="{{ url('/recipes') }}" class="text-blue-500 hover:underline">Volver al inicio</a>
    </div>

    <!-- Recipes List -->
    <div class="flex justify-center">
        <div class="grid grid-cols-2 gap-4 p-4 w-[80%] mb-16 font-plex">
            @foreach ($recipes as $recipe)
                <div class="flex items-start mb-4">
                    <img src="{{ asset('path_to_recipe_image.jpg') }}" alt="{{ $recipe->name }}" class="w-1/3 h-auto mr-4">
                    <div>
                        <div class="font-bold text-black">{{ $recipe->name }}</div>
                        <a href="{{ url('/recipes/'.$recipe->id) }}" class="flex items-center text-red-500 hover:underline">
                            See recipe
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-main-layout>
