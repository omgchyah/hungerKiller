 <x-main-layout>
    <div class="flex items-center justify-between p-4 font-plex">
        <a href="{{ url('/recipes') }}" class="text-red-500 hover:underline">Go back</a>
    </div>
    
    <h1 class="p-4 text-2xl font-bold">Create new recipe</h1>

    <form action="{{ url('/recipes') }}" method="POST" enctype="multipart/form-data" class="p-4 mb-16 font-plex">
        
        @csrf

        <div class="mb-4">
            <label class="block font-bold">
                Name:
                <input type="text" name="name" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Descripction:
                <input type="text" name="description" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Difficulty:
                <select name="difficulty" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
                    @foreach ($difficulties as $difficulty)
                        <option value="{{ $difficulty }}">{{ ucfirst($difficulty) }}</option>
                    @endforeach
                </select>
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Servings:
                <input type="number" name="servings" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Category:
                <select name="category" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
                    @foreach ($categories as $category)
                        <option value="{{ $category }}">{{ ucfirst($category) }}</option>
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
                        <option value="{{ $restriction }}">{{ ucfirst($restriction) }}</option>
                    @endforeach
                </select>
            </label>
        </div>

        <div id="ingredients-container" class="mb-4">
            <div class="block font-bold">Add your ingredients:</div>
            <div class="ingredient-group">
                <label class="block font-bold">
                    Ingredient name:
                    <input type="text" name="ingredients[]" list="ingredients" class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded" required>
                    <datalist id="ingredients">
                        @foreach($ingredients as $ingredient)
                            <option value="{{ $ingredient->name }}">{{ $ingredient->name }}</option>
                        @endforeach
                    </datalist>
                </label>
                <label class="block mt-2 font-bold">
                    Measurement:
                    <select name="measurements[]" class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded" required>
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
                    <input type="number" name="quantities[]" class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded" min="0" required>
                </label>
                <button type="button" class="mt-2 text-red-500 remove-ingredient hover:underline">Remove</button>
            </div>
        </div>

        <button type="button" id="add-ingredient" class="mt-4 text-red-500 hover:underline">Add Another Ingredient</button>

        <div class="my-4">
            <label class="block font-bold">
                Prep time:
                <input type="number" name="prep_time" min="0" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Cooking time:
                <input type="number" name="cooking_time" min="0" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Instructions:
                <textarea name="instructions" required class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded"></textarea>
            </label>
        </div>

        <div class="mb-4">
            <label class="block font-bold">
                Image:
                <input type="file" name="image" accept="image/*" class="block w-full mt-1 bg-gray-100 border border-gray-300 rounded">
            </label>
        </div>

        <button type="submit" class="mt-4 font-bold text-red-500 hover:underline">Submit</button>
    </form>

    <script>
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


