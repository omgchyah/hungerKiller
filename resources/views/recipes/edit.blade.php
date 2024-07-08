<x-main-layout>
    <div class="flex items-center justify-between p-4 font-plex">
        <a href="{{ url('/recipes/' . $recipe->id) }}" class="text-red-500 hover:underline">Go back</a>
    </div>
    
    <h1 class="p-4 text-2xl font-bold">Update recipe</h1>

    <form id="edit-form" action="{{ url('/recipes/' . $recipe->id) }}" method="POST" enctype="multipart/form-data" class="p-4 mb-16 font-plex">
        
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-bold">
                Name:
                <input type="text" name="name" value="{{ old('name', $recipe->name) }}" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Description:
                <input type="text" name="description" value="{{ old('description', $recipe->description) }}" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Difficulty:
                <select name="difficulty" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
                    @foreach ($difficulties as $difficulty)
                        <option value="{{ $difficulty }}" {{ $recipe->difficulty == $difficulty ? 'selected' : '' }}>
                            {{ ucfirst($difficulty) }}
                        </option>
                    @endforeach
                </select>
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Servings:
                <input type="number" name="servings" value="{{ old('servings', $recipe->servings) }}" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Category:
                <select name="category" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
                    @foreach ($categories as $category)
                        <option value="{{ $category }}" {{ $recipe->category == $category ? 'selected' : '' }}>
                            {{ ucfirst($category) }}
                        </option>
                    @endforeach
                </select>
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Restrictions:
                <select name="restrictions" class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
                    <option value="">No restrictions</option>
                    @foreach ($restrictions as $restriction)
                        <option value="{{ $restriction }}" {{ $recipe->restrictions == $restriction ? 'selected' : '' }}>
                            {{ ucfirst($restriction) }}
                        </option>
                    @endforeach
                </select>
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Prep time:
                <input type="number" name="prep_time" min="0" value="{{ old('prep_time', $recipe->prep_time) }}" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Cooking time:
                <input type="number" name="cooking_time" min="0" value="{{ old('cooking_time', $recipe->cooking_time) }}" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Instruccions:
                <textarea name="instructions" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">{{ old('instructions', $recipe->instructions) }}</textarea>
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Image:
                <input type="file" name="image" accept="image/*" class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
            </label>
            @if ($recipe->image_path)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $recipe->image_path) }}" alt="Recipe Image" class="max-w-xs">
                </div>
            @endif
        </div>

        <div class="mb-4">
            <h2 class="text-xl font-bold">Ingredients:</h2>
            <ul>
                @foreach ($recipe->ingredients as $ingredient)
                    <li class="mb-2">
                        <input type="hidden" name="existing_ingredient_ids[]" value="{{ $ingredient->id }}">
                        {{ $ingredient->pivot->quantity }} {{ $ingredient->pivot->measurement }} {{ $ingredient->name }}
                        <label class="ml-4">
                            <input type="checkbox" name="remove_ingredient_ids[]" value="{{ $ingredient->id }}"> Remove
                        </label>
                    </li>
                @endforeach
            </ul>
        </div>

        <div id="ingredients-container">
            <div class="mb-4 ingredient-group">
                <label class="block font-bold">
                    Add a new Ingredient:
                    <input type="text" name="ingredients[]" list="ingredients" class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
                    <datalist id="ingredients">
                        @foreach($ingredients as $ingredient)
                            <option value="{{ $ingredient->name }}">{{ $ingredient->name }}</option>
                        @endforeach
                    </datalist>
                </label>
                <label class="block mt-2 font-bold">
                    Measurement:
                    <select name="measurements[]" class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
                        <option value="gramos">Grams</option>
                        <option value="tazas">Mililiters</option>
                        <option value="cucharadas">Tablespoon(s)</option>
                        <option value="cucharadas">Teaspoon(s)</option>
                        <option value="cucharadas">Cup(s)</option>
                        <option value="cucharadas">Unit(s)</option>
                    </select>
                </label>
                <label class="block mt-2 font-bold">
                    Quantity:
                    <input type="number" name="quantities[]" class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded" min="0">
                </label>
                <button type="button" class="mt-2 text-right text-red-500 remove-ingredient hover:underline">Remove</button>
            </div>
        </div>
        <div>
            <button type="button" id="add-ingredient" class="mt-4 text-red-500 hover:underline">Add Another Ingredient</button>
        </div>
        <div>
            <button type="submit" class="mt-4 font-bold text-red-500 hover:underline">Update recipe</button>
        </div>
    </form>

    <div id="confirm-delete-modal" class="fixed inset-0 flex items-center justify-center hidden bg-black bg-opacity-50">
        <div class="p-6 text-center bg-white rounded shadow-lg">
            <p class="mb-4 font-plex">Are you sure you want to delete this recipe? This action cannot be undone.</p>
            <div class="flex justify-center space-x-4">
                <button onclick="confirmDelete()" class="px-4 py-2 text-white bg-red-500 rounded">Delete</button>
                <button onclick="hideConfirmDelete()" class="px-4 py-2 text-black bg-gray-300 rounded">Cancel</button>
            </div>
        </div>
    </div>

    <script>
        function showConfirmDelete() {
            document.getElementById('confirm-delete-modal').classList.remove('hidden');
        }

        function hideConfirmDelete() {
            document.getElementById('confirm-delete-modal').classList.add('hidden');
        }

        function confirmDelete() {
            document.getElementById('delete-form').submit();
        }

        document.getElementById('add-ingredient').addEventListener('click', function() {
            var container = document.getElementById('ingredients-container');
            var newGroup = container.children[0].cloneNode(true);
            newGroup.querySelectorAll('input').forEach(input => input.value = '');
            newGroup.querySelectorAll('select').forEach(select => select.value = '');
            container.appendChild(newGroup);
        });

        document.getElementById('ingredients-container').addEventListener('click', function(event) {
            if (event.target && event.target.matches('button.remove-ingredient')) {
                if (document.querySelectorAll('.ingredient-group').length > 1) {
                    event.target.closest('.ingredient-group').remove();
                }
            }
        });
    </script>
</x-main-layout>
