{{-- <x-main-layout>
    <a href="<?php //echo WEB_ROOT;?>/recipes">Volver</a>
    <h1>Editar receta</h1>

    <form action="<?php //echo WEB_ROOT;?>/recipes/{{$recipe->id}}" method="POST" enctype="multipart/form-data">
        
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

          <div>
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
        </div>
 
        <div id="ingredients-container">
            <div class="ingredient-group">
                <label>
                    Add a new Ingredient:
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
                <button type="button" class="remove-ingredient">Remove</button>
            </div>
        </div>

        <button type="button" id="add-ingredient" class="mt-2 btn btn-secondary">Add Another Ingredient</button>

        <button type="submit">Update recipe</button>
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
</x-main-layout> --}}

<x-main-layout>
    <div class="flex items-center justify-between p-4">
        <a href="{{ url('/recipes/' . $recipe->id) }}" class="text-blue-500 hover:underline">Volver</a>
    </div>
    
    <h1 class="p-4 text-2xl font-bold">Editar receta</h1>

    <form action="{{ url('/recipes/' . $recipe->id) }}" method="POST" enctype="multipart/form-data" class="p-4">
        
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block">
                Nombre:
                <input type="text" name="name" value="{{ old('name', $recipe->name) }}" required class="block w-full mt-1">
            </label>
        </div>

        <div class="mb-4">
            <label class="block">
                Descripción:
                <input type="text" name="description" value="{{ old('description', $recipe->description) }}" required class="block w-full mt-1">
            </label>
        </div>

        <div class="mb-4">
            <label class="block">
                Difficulty:
                <select name="difficulty" required class="block w-full mt-1">
                    @foreach ($difficulties as $difficulty)
                        <option value="{{ $difficulty }}" {{ $recipe->difficulty == $difficulty ? 'selected' : '' }}>
                            {{ ucfirst($difficulty) }}
                        </option>
                    @endforeach
                </select>
            </label>
        </div>

        <div class="mb-4">
            <label class="block">
                Servings:
                <input type="number" name="servings" value="{{ old('servings', $recipe->servings) }}" required class="block w-full mt-1">
            </label>
        </div>

        <div class="mb-4">
            <label class="block">
                Category:
                <select name="category" required class="block w-full mt-1">
                    @foreach ($categories as $category)
                        <option value="{{ $category }}" {{ $recipe->category == $category ? 'selected' : '' }}>
                            {{ ucfirst($category) }}
                        </option>
                    @endforeach
                </select>
            </label>
        </div>

        <div class="mb-4">
            <label class="block">
                Restrictions:
                <select name="restrictions" class="block w-full mt-1">
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
            <label class="block">
                Prep time:
                <input type="number" name="prep_time" min="0" value="{{ old('prep_time', $recipe->prep_time) }}" required class="block w-full mt-1">
            </label>
        </div>

        <div class="mb-4">
            <label class="block">
                Cooking time:
                <input type="number" name="cooking_time" min="0" value="{{ old('cooking_time', $recipe->cooking_time) }}" required class="block w-full mt-1">
            </label>
        </div>

        <div class="mb-4">
            <label class="block">
                Instrucciones:
                <textarea name="instructions" required class="block w-full mt-1">{{ old('instructions', $recipe->instructions) }}</textarea>
            </label>
        </div>

        <div class="mb-4">
            <label class="block">
                Image:
                <input type="file" name="image" accept="image/*" class="block w-full mt-1">
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
                <label class="block">
                    Add a new Ingredient:
                    <input type="text" name="ingredients[]" list="ingredients" class="block w-full mt-1">
                    <datalist id="ingredients">
                        @foreach($ingredients as $ingredient)
                            <option value="{{ $ingredient->name }}">{{ $ingredient->name }}</option>
                        @endforeach
                    </datalist>
                </label>
                <label class="block mt-2">
                    Measurement:
                    <select name="measurements[]" class="block w-full mt-1">
                        <option value="gramos">Gramos</option>
                        <option value="tazas">Tazas</option>
                        <option value="cucharadas">Cucharadas</option>
                    </select>
                </label>
                <label class="block mt-2">
                    Quantity:
                    <input type="number" name="quantities[]" class="block w-full mt-1" min="0">
                </label>
                <button type="button" class="mt-2 text-red-500 remove-ingredient hover:underline">Remove</button>
            </div>
        </div>

        <button type="button" id="add-ingredient" class="mt-4 text-blue-500 hover:underline">Add Another Ingredient</button>

        <button type="submit" class="mt-4 text-blue-500 hover:underline">Update recipe</button>
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
