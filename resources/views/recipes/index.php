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
    <ul>
        @foreach ($recipes as $recipe)
            <li>
                <a href="">
                    {{ $recipe->name }}
                </a>
            </li>
        @endforeach 
    </ul>
</body>
</html>

