<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Adicione o link do Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Utilize classes de Tailwind CSS para estilizar -->
    <h1 class="text-3xl font-bold text-center mt-8 mb-4">Sobrenos</h1>
    <ul class="max-w-sm mx-auto">
        <li class="mb-4">
            <p>sou um estudante que deseja se aprimorar na área de tecnologia</p>
        </li>
        <li class="mb-4"><p>email: guylherme699gmail.com</p></li>
        <li class="mb-4"><a href="http://wa.me/qr/25DENMIMYTLJB1" class="block w-full py-2 px-4 bg-blue-500 text-white text-center font-semibold rounded-md hover:bg-blue-600 transition duration-200">WhatsApp</a></li>
    </ul>
    <!-- Transformar o link "Menu" em um botão -->
    <a href="{{url('menu')}}" class="block mx-auto w-32 py-2 px-4 bg-green-500 text-white text-center font-semibold rounded-md mt-8 hover:bg-green-600 transition duration-200">Menu</a>
</body>
</html>
