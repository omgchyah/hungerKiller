<x-main-layout>
    <!-- Top Section with Four Images and Text -->
    <div class="flex justify-center p-4 mx-4 space-x-8 font-plex">
        <div class="flex flex-col items-center">
            <img src="{{ asset('path_to_your_image1.jpg') }}" alt="Create new recipe" class="w-full h-auto">
            <a href="{{ url('/recipes/create') }}" class="mt-2 text-center text-red-500 hover:underline">Create new recipe</a>
        </div>
        <div class="flex flex-col items-center">
            <img src="{{ asset('path_to_your_image2.jpg') }}" alt="Find recipes" class="w-full h-auto">
            <a href="{{ url('/recipes') }}" class="mt-2 text-center text-red-500 hover:underline">Find all our easy recipes here!</a>
        </div>
        <div class="flex flex-col items-center">
            <img src="{{ asset('path_to_your_image3.jpg') }}" alt="Vegan recipes" class="w-full h-auto">
            <a href="{{ url('/recipes/vegan') }}" class="mt-2 text-center text-red-500 hover:underline">Vegan recipes this way!</a>
        </div>
        <div class="flex flex-col items-center">
            <img src="{{ asset('path_to_your_image4.jpg') }}" alt="Gluten-free recipes" class="w-full h-auto">
            <a href="{{ url('/recipes/gluten-free') }}" class="mt-2 text-center text-red-500 hover:underline">Gluten-free just for you!</a>
        </div>
    </div>

    <!-- Black Bar -->
    <div class="w-[80%] h-0.5 mx-auto my-4 bg-black"></div>

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

    <!-- Pagination Links -->
    <div class="mx-4 mt-4 mb-16">
        {{ $recipes->links() }}
    </div>
</x-main-layout>
