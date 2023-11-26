<!DOCTYPE html>
<html lang="pt-BR" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <title>Home - Risadaria</title>
    <link rel="shortcut icon" href="https://images.emojiterra.com/google/android-pie/512px/1f602.png" type="image/x-icon">
</head>
<body class="bg-white dark:bg-gray-700">

<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://images.emojiterra.com/google/android-pie/512px/1f602.png" class="h-8" alt="Flowbite Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Risadaria</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <a href="cria-post" class="text-white bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 dark:text-white">Contar Piada</a>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/" class="block py-2 px-3 text-blue-400 rounded-md md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="login" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Entrar</a>
                </li>
                <li>
                    <a href="cadastra-usuario" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Criar conta</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br><br>
<div class="flex-1">
    <div class="posts-container mt-8 mx-auto max-w-screen-md">
        <h1 class="text-3xl font-semibold text-gray-800 dark:text-white mb-4">Piadocas:</h1>
        <div class="tweet-container flex flex-col items-center">
            @if(count($posts) === 0)
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Nenhuma piada ainda.</p>
            @else
                @foreach ($posts as $post)
                    <div class="tweet bg-gray-100 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-4 mb-4 shadow-md w-full">
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{ \Carbon\Carbon::parse($post->created_at)->locale('pt_BR')->diffForHumans() }}</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{$post->mensagem}}</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">{{$post->conteudo}}</p>
                    </div>
                    <hr class="border-t border-gray-200 dark:border-gray-700 w-full">
                @endforeach
            @endif
        </div>
    </div>
</div>

<footer class="bg-gray-900 text-white text-center py-4 fixed bottom-0 w-full">
    <p>&copy; 2023 Risadaria Corp. Todos os direitos reservados.</p>
</footer>

</body>
</html>
