<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Entrar</title>
    <link rel="shortcut icon" href="https://images.emojiterra.com/google/android-pie/512px/1f602.png" type="image/x-icon">
</head>
<body class="bg-facebook dark:bg-gray-800 text-black dark:text-white">

    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <img class="w-14 h-14 mr-2" src="https://images.emojiterra.com/google/android-pie/512px/1f602.png" alt="logo">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-900 dark:border-gray-900">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8 relative">
                <a href="/" class="absolute top-2 right-2 bg-red-500 text-white px-3 py-1 rounded-full hover:bg-red-600">X</a>
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Entrar no Risadaria
                </h1>

                 
                <form class="space-y-4 md:space-y-6" action="/logar" method="POST">
                @if(session('mensagem_erro'))
            <div class="bg-white text-red-600 p-3 mb-4 rounded-md">{{ session('mensagem_erro') }}</div>
        @endif
                    @csrf
                    <div>
                        <label></label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="E-mail" required="">
                    </div>
                    <div>
                        <label></label>
                        <input type="senha" name="senha" id="senha" placeholder="Senha" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" ="">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="remember" class="text-gray-500 dark:text-gray-300">Lembrar de mim</label>
                            </div>
                        </div>
                    </div>
                     <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-700 text-white dark:text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-blue">
                        Entrar
                    </button>
                    <p class="text-sm font-light text-gray-500 dark:text-white">
                        Não tem uma conta? <a href="/cadastra-usuario" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Criar conta</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
