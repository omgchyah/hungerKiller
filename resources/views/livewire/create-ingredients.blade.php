<div>
    <h2>Ingredients</h2>
    @foreach ($ingredients as $index => $ingredient)
        <div class="mb-4">
            <label>
                Ingredient:
                <input type="text" wire:model="ingredients.{{ $index }}" required>
                @error('ingredients.' . $index) <span class="error">{{ $message }}</span> @enderror
            </label>
            <label>
                Measurement:
                <input type="text" wire:model="measurements.{{ $index }}" required>
                @error('measurements.' . $index) <span class="error">{{ $message }}</span> @enderror
            </label>
            <label>
                Quantity:
                <input type="number" wire:model="quantities.{{ $index }}" min="0" required>
                @error('quantities.' . $index) <span class="error">{{ $message }}</span> @enderror
            </label>
            <button type="button" wire:click="removeIngredient({{ $index }})">Remove</button>
        </div>
    @endforeach

    <button type="button" wire:click="addIngredient">Add Another Ingredient</button>
</div>

