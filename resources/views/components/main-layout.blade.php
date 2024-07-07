<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&family=Pacifico&display=swap" rel="stylesheet">
    <style>
        .font-pacifico {
            font-family: 'Pacifico', cursive;
        }
        .font-plex {
            font-family: 'IBM Plex Mono', monospace;
        }
    </style>
    <title>Hunger Killer</title>
    @livewireStyles
</head>
<body class="font-sans">

    <header class="font-pacifico">
    </header>

    <div>
        <nav class="fixed top-0 left-0 flex flex-row items-center justify-between w-screen h-20 px-4 m-0 text-sm text-black bg-gray-100 shadow-lg font-plex">
            <div class="flex items-center w-full sm:w-[80%] mx-2 space-x-2">
                <a href="<?php echo WEB_ROOT;?>/"><img src="{{ asset('storage/images/navbar/logo2.png') }}" class="w-12 h-auto" alt="logo"></a>
                <form action="{{ url('/recipes/search') }}" method="GET" class="flex items-center flex-grow border rounded-1">
                    <label for="keywords" class="sr-only"></label>
                    <input 
                        type="text" 
                        id="keywords" 
                        name="keywords" 
                        class="flex-grow p-2 text-gray-300 rounded-l" 
                        value="Write down any ingredients" 
                        onclick="clearInput(this)" 
                        onblur="restoreInput(this)" 
                        required>
                    <button type="submit" class="p-2 text-white bg-red-500 rounded-r">Search</button>
                </form>
            </div>
            <div class="flex space-x-2">
                <a href="" class="w-auto p-1 text-center text-red-500 bg-white border-2 border-red-500 rounded-md">Sign in</a>
                <a href="" class="w-auto p-1 text-center text-white bg-red-500 rounded-md">Sign up</a>          
            </div>
        </nav>
        <div class="flex flex-col items-center mt-40">
            <img src="{{ asset('storage/images/navbar/logo3.png') }}" class="w-40 h-auto text-center" alt="logo">
            <div class="w-[80%] h-0.5 mt-2 bg-black">
            </div>
        </div>
    </div>

    <div name="content" class="justify-center mt-10">
        {{$slot}}
    </div>
    
    <footer class="fixed bottom-0 left-0 flex flex-row items-center justify-center w-screen h-12 px-4 m-0 text-xs text-black bg-gray-100 font-plex" style="box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);">
        <span>©HUNGERKILLER.COM</span>
        <span class="mx-4">|</span>
        <span>
            Logos created with <a href="https://www.openai.com/dall-e-2/" class="text-red-500 hover:underline">DALL-E</a>
        </span>
    </footer>
    
    @livewireScripts

    <script>
        function clearInput(input) {
            if (input.value === 'Write down any ingredients') {
                input.value = '';
                input.classList.remove('text-gray-500');
            }
        }
    
        function restoreInput(input) {
            if (input.value === '') {
                input.value = 'Write down any ingredients';
                input.classList.add('text-gray-500');
            }
        }
    </script>
</body>
</html>
