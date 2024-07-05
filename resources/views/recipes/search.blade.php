<x-main-layout>
    <ul>
        @foreach ($recipes as $recipe)
            <li>
                <a href="<?php echo WEB_ROOT;?>/recipes/{{$recipe->id}}">
                    {{ $recipe->name }}
                </a>
            </li>
        @endforeach 
    </ul>

</x-main-layout>