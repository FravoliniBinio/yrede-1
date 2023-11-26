<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Publicação</title>
    <link rel="shortcut icon" href="https://images.emojiterra.com/google/android-pie/512px/1f602.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.0.0/dist/flowbite.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.0.6/dist/full.css" rel="stylesheet">
</head>

<body class="bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-white flex items-center justify-center h-screen">



    <form action="/salva-post" method="POST" class="relative bg-white dark:bg-gray-900 rounded-md shadow-md p-8 w-96" onsubmit="return validateForm()">
        @csrf
        <div class="space-y-5">
            <a href="/" class="absolute top-2 right-2 bg-red-500 text-white px-3 py-1 rounded-full hover:bg-red-600">X</a>

            <label for="mensagem" class="text-gray-900 dark:text-white font-semibold">Conte uma piada</label>
            <textarea name="mensagem" id="mensagem" placeholder="Vamo rir" class="p-2 border resize-none rounded-md w-full dark:bg-gray-600 dark:text-white"></textarea>
            <span class="text-red-500" id="error-message"></span>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md cursor-pointer hover:bg-blue-600">Publicar</button>
            </div>
        </div>
    </form>

    <script>
        function validateForm() {
            var mensagem = document.getElementById("mensagem").value;
            var errorMessage = document.getElementById("error-message");

            if (mensagem.trim() === "") {
                errorMessage.innerHTML = "Você precisa digitar alguma coisa.";
                return false;
            } else {
                errorMessage.innerHTML = "";
                return true;
            }
        }
    </script>
</body>

</html>
