<x-main-layout>
    <h1>Formulario</h1>
    <form action="">
        <label>
            Nombre:
            <input type="text" name="name">
        </label>
        <label>
            Descripción:
            <input type="text" name="description">
        </label>
        <label>
            Difficulty:
            <select name="difficulty">
                @foreach ($difficulties as $difficulty)
                    <option value="{{ $difficulty->value }}">{{ $difficulty->value }}</option>
                @endforeach
            </select>
        </label>
        <label>
            Category:
            <select name="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->value }}">{{ $category->value }}</option>
                @endforeach
        </label>
        <label>
            Instrucciones:
            <input type="text" name="instructions">
        </label>
    </form>
</x-main-layout>