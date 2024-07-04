<x-main-layout>
    <div><a href="<?php echo WEB_ROOT;?>/recipes/create">Crear nueva receta</a></div>

     <div>
        <form action="<?php echo WEB_ROOT; ?>/recipes/search" method="GET">
            <label for="keyword">Buscar receta por palabra clave:</label>
            <input type="text" id="keyword" name="keyword" required>
            <button type="submit">Submit</button>
        </form>
        <button type="button">Submit</button>
    </div>
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

