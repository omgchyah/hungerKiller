<x-main-layout>
    <div class="flex items-center justify-between p-4 font-plex">
        <a href="{{ url('/recipes') }}" class="text-red-500 hover:underline">Go back</a>
    </div>

    <div class="flex flex-col items-center p-4">
         <h2 class="text-xl font-bold text-red-500 place-content-center font-plex place-items-center">{{ $title }}</h2>
    </div>

<!-- Recipes List -->
<div class="flex justify-center">
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4 p-4 w-full md:w-[80%] mb-16 font-plex">
        @foreach ($recipes as $recipe)
            <div class="flex items-start mb-4">
                <img src="{{ asset('storage/' . $recipe->image_path) }}" alt="{{ $recipe->name }}" class="object-cover object-center w-1/2 mr-4 h-3/5 bg-blend-lighten">
                <div class="w-1/2">
                    <div class="font-bold text-black">{{ $recipe->name }}</div>
                    <div class="text-black">{{ $recipe->description }}</div>
                    <a href="{{ url('/recipes/'.$recipe->id) }}" class="flex items-center mt-2 text-red-500 hover:underline">
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
</div>
</x-main-layout>
