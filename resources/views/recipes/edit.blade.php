<x-main-layout>
    <a href="<?php echo WEB_ROOT;?>/recipes">Volver</a>
    <h1>Editar receta</h1>

    <form action="<?php echo WEB_ROOT;?>/recipes/{{$recipe->id}}" method="POST" enctype="multipart/form-data">
        
        @csrf

        @method('PUT')

        <div class="mb-4">
            <label>
                Nombre:
                <input type="text" name="name" value="{{ old('name', $recipe->name) }}" required>
            </label>
        </div>

        <div class="mb-4">
            <label>
                Descripción:
                <input type="text" name="description" value="{{ old('description', $recipe->description) }}" required>
            </label>
        </div>

        <div class="mb-4">
            <label>
                Difficulty:
                <select name="difficulty" required>
                    @foreach ($difficulties as $difficulty)
                        <option value="{{ $difficulty }}" {{ $recipe->difficulty }}>
                            {{ ucfirst($difficulty) }}
                        </option>
                    @endforeach
                </select>
            </label>
        </div>

        <div class="mb-4">
            <label>
                Servings:
                <input type="number" name="servings" value="{{ old('servings', $recipe->servings) }}" required>
            </label>
        </div>

        <div class="mb-4">
            <label>
                Category:
                <select name="category" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category }}" {{ $recipe->category }}>
                            {{ ucfirst($category) }}
                        </option>
                    @endforeach
                </select>
            </label>
        </div>

        <div class="mb-4">
            <label>
                Restrictions:
                <select name="restrictions">
                    <option value="">No restrictions</option>
                    @foreach ($restrictions as $restriction)
                        <option value="{{ $restriction }}" {{ $recipe->restrictions }}>
                            {{ ucfirst($restriction) }}
                        </option>
                    @endforeach
                </select>
            </label>
        </div>

        <div class="mb-4">
            <label>
                Prep time:
                <input type="number" name="prep_time" min="0" value="{{ old('prep_time', $recipe->prep_time) }}" required>
            </label>
        </div>

        <div class="mb-4">
            <label>
                Cooking time:
                <input type="number" name="cooking_time" min="0" value="{{ old('cooking_time', $recipe->cooking_time) }}" required>
            </label>
        </div>

        <div class="mb-4">
            <label>
                Instrucciones:
                <textarea name="instructions" required>{{ old('instructions', $recipe->instructions) }}</textarea>
            </label>
        </div>

        <div class="mb-4">
            <label>
                Image:
                <input type="file" name="image" accept="image/*">
            </label>
            @if ($recipe->image_path)
                <div>
                    <img src="{{ asset('storage/' . $recipe->image_path) }}" alt="Recipe Image" style="max-width: 200px;">
                </div>
            @endif
        </div>

{{--          <div>
            <h2>Ingredients:</h2>
            <ul>
                @foreach ($recipe->ingredients as $ingredient)
                    <li>
                        <input type="hidden" name="existing_ingredient_ids[]" value="{{ $ingredient->id }}">
                        {{ $ingredient->pivot->quantity }}
                        {{ $ingredient->pivot->measurement }}
                        {{ $ingredient->name }}
                        <label>
                            <input type="checkbox" name="remove_ingredient_ids[]" value="{{ $ingredient->id }}"> Remove
                        </label>
                    </li>
                @endforeach
            </ul>
        </div> --}}
 
        <div id="ingredient-measurement-container">
            <div class="mb-4 ingredient-measurement-group">
                <label>
                    Ingredient:
                    <input type="text" name="ingredients[]" list="ingredients" class="block w-full mt-1 form-input">
                    <datalist id="ingredients">
                        @foreach($ingredients as $ingredient)
                            <option value="{{ $ingredient->name }}">{{ $ingredient->name }}</option>
                        @endforeach
                    </datalist>
                </label>
                <label>
                    Measurement:
                    <select name="measurements[]" class="block w-full mt-1 form-input">
                        <option value="gramos">Gramos</option>
                        <option value="tazas">Tazas</option>
                        <option value="cucharadas">Cucharadas</option>
                    </select>
                </label>
                <label>
                    Quantity:
                    <input type="number" name="quantities[]" class="block w-full mt-1 form-input" min="0">
                </label>
            </div>
        </div>
        <button type="button" id="add-ingredient-measurement" class="mt-2 btn btn-secondary">Add Another Ingredient Set</button>

        <button type="submit">Update recipe</button>
    </form>

    <script>
        function addIngredient() {
            var container = document.getElementById('ingredient-measurement-container');
            var newGroup = container.children[0].cloneNode(true);
            newGroup.querySelectorAll('input').forEach(input => input.value = '');
            newGroup.querySelectorAll('select').forEach(select => select.value = '');
            container.appendChild(newGroup);
        }
    </script>
</x-main-layout>