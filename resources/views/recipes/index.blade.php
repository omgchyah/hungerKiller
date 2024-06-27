<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    @livewireStyles
    @livewireScripts
</head>
<body>
    <div><a href="">Crear nueva receta:</a></div>
    <ul>
        @foreach ($recipes as $recipe)
            <li>
                <a href="<?php echo WEB_ROOT;?>/recipes/{{$recipe->id}}">
                    {{ $recipe->name }}
                </a>
            </li>
        @endforeach 
    </ul>
</body>
</html>

