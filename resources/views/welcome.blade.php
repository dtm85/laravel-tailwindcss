<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <!-- SEO -->
    <meta name="description" content="Building with Tailwind CSS in Laravel" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Style Sheet -->
    <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
    <!-- CDNJS - Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Laravel & Tailwind CSS</title>
</head>
<body class="font-Nunito bg-gray-900 transition-all">
    <!-- Header -->
    <header>
        
    <nav class="container flex  items-center py-8 mt-4 sm:mt-1">
        <div class="flex items-center py-1">
            <img class="ml-3 w-7 h-7" 
            src="../images/tailwinds-css-ico.svg" 
            alt="Logo">
            <h2 class="ml-2 text-clr-cg-blue uppercase text-2xl font-extrabold">Laravel & Tailwind CSS</h2>
            </div>
            <ul class="hidden lg:flex flex-1 justify-end items-center gap-10 text-clr-cg-blue uppercase text-md alignt">
                <li class="cursor-pointer"><a href="#learned">What I Learned</a></li>
                <li class="cursor-pointer"><a href="#customized">What I Customized</a></li>
                <button type="button" class="bg-clr-light-coral text-clr-floral-white rounded-md px-7 py-2 uppercase mr-3">
                    <a target="_blank" href="mailto:dan@dantechmedia.com">Email Me</a>
                </button>
            </ul>
            <div class="flex lg:hidden flex-1 justify-end mr-3">
                <i class="text-clr-light-coral fas fa-bars"></i>
            </div>
    </nav>
    </header>
</body>
</html>