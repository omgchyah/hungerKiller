<x-main-layout>
    <h1>Crear receta</h1>
    <form action="/recipes" method="POST">
        @csrf

        <div class="mb-4">
            <label>
                Nombre:
                <input type="text" name="name">
            </label>
        </div>

        <div class="mb-4">
            <label>
                Descripción:
                <input type="text" name="description" required>
            </label>
        </div>

        <div class="mb-4">
            <label>
                Difficulty:
                <select name="difficulty">
                    @foreach ($difficulties as $difficulty)
                        <option value="{{ $difficulty }}" required>{{ ucfirst($difficulty) }}</option>
                    @endforeach
                </select>
            </label>
        </div>

        <div class="mb-4">
            <label>
                Servings:
                <input type="number" name="servings">
            </label>
        </div>

        <div class="mb-4">
            <label>
                Category:
                <select name="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category }}">{{ ucfirst($category) }}</option>
                    @endforeach
                </select>
            </label>
        </div>

        <div class="mb-4">
            <label>
                Restrictions:
                <select name="restrictions">
                    @foreach ($restrictions as $restriction)
                        <option value="{{ $restriction }}">{{ ucfirst($restriction) }}</option>
                    @endforeach
                </select>
            </label>
        </div>

        <div id="ingredient-measurement-container">
            <div class="mb-4 ingredient-measurement-group">
                <label>
                    Ingredient:
                    <input type="text" name="ingredients[]" list="ingredients" class="block w-full mt-1 form-input" required>
                    <datalist id="ingredients">
                        @foreach($ingredients as $ingredient)
                            <option value="{{ $ingredient->name }}">{{ $ingredient->name }}</option>
                        @endforeach
                    </datalist>
                </label>
                <label>
                    Measurement:
                    <select name="measurements[]" class="block w-full mt-1 form-input" required>
                        <option value="gramos">Gramos</option>
                        <option value="tazas">Tazas</option>
                        <option value="cucharadas">Cucharadas</option>
                    </select>
                </label>
                <label>
                    Quantity:
                    <input type="number" name="quantities[]" class="block w-full mt-1 form-input" required>
                </label>
            </div>
        </div>
        <button type="button" id="add-ingredient-measurement" class="mt-2 btn btn-secondary">Add Another Ingredient Set</button>

        <div class="mb-4">
            <label>
                Prep time:
                <input type="number" name="prep_time">
            </label>
        </div>

        <div class="mb-4">
            <label>
                Cooking time:
                <input type="number" name="cooking_time">
            </label>
        </div>

        <div class="mb-4">
            <label>
                Instrucciones:
                <textarea type="bigtext" name="instructions" required></textarea>
            </label>
        </div>

        <button type="submit">Submit</button>
    </form>

    <script>
        document.getElementById('add-ingredient-measurement').addEventListener('click', function() {
            var container = document.getElementById('ingredient-measurement-container');
            var newGroup = container.children[0].cloneNode(true);
            // Clear the values of the new inputs
            newGroup.querySelectorAll('input').forEach(input => input.value = '');
            newGroup.querySelectorAll('select').forEach(select => select.value = '');
            container.appendChild(newGroup);
        });
    </script>
</x-main-layout>
