<x-main-layout>
    <h1>Formulario</h1>
    <form action="">
        <label>
            Nombre:
            <input type="text" name="name">
        </label>
        <label>
            Descripción:
            <input type="text" name="description" required>
        </label>
        <label>
            Difficulty:
            <select name="difficulty">
                @foreach ($difficulties as $difficulty)
                    <option value="{{ $difficulty }}" required>{{ ucfirst($difficulty) }}</option>
                @endforeach
            </select>
        </label>
        <label>
            Servings:
            <input type="number" name="servings">
        </label>
        <label>
            Category:
            <select name="category">
                @foreach ($categories as $category)
                    <option value="{{ $category }}">{{ ucfirst($category) }}</option>
                @endforeach
            </select>
        </label>
        <label>
            Restrictions:
            <select name="restrictions">
                @foreach ($restrictions as $restriction)
                    <option value="{{ $restriction }}">{{ ucfirst($restriction) }}</option>
                @endforeach
            </select>
        </label>
        <label>
            Instrucciones:
            <input type="bigtext" name="instructions">
        </label>
        <label>
            Prep time:
            <input type="number" name="prep_time">
        </label>
        <label>
            Cooking time:
            <input type="number" name="cooking_time">
        </label>
        <button type="submit">Submit</button>
    </form>
</x-main-layout>