<x-main-layout>
    <a href="<?php echo WEB_ROOT;?>/recipes/search">Buscar</a>
    
    <div><a href="<?php echo WEB_ROOT;?>/recipes/create">Crear nueva receta</a></div>

    <x-main-layout>
        <div>
            <form action="{{ url('/recipes/search') }}" method="GET">
                <label for="keywords">Buscar receta por ingredientes (separados por espacio):</label>
                <input type="text" id="keywords" name="keywords" required>
                <button type="submit">Submit</button>
            </form>
        </div>
    </x-main-layout>
    

    <ul>
        @foreach ($recipes as $recipe)
            <li>
                <a href="<?php echo WEB_ROOT;?>/recipes/{{$recipe->id}}">
                    {{ $recipe->name }}
                </a>
            </li>
        @endforeach 
    </ul>

    {{ $recipes->links() }}

</x-main-layout>

