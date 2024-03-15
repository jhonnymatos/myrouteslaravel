<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/js/app.js') }}" rel="script">

    @vite('resources/css/app.css')
    <title>Principal</title>
    <style>
        
        .site-container {
            min-height: calc(100vh - 80px); 
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(90deg, #3490dc, #9561e2);
        }

        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>

<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-white font-semibold">Marcelo quero meu MB </div>
        <div class="flex space-x-4">
            <a href="/" class="text-white hover:text-gray-300">Principal</a>
            <a href="/contato" class="text-white hover:text-gray-300">Contato</a>
            <a href="/sobrenos" class="text-white hover:text-gray-300">Sobre Nós</a>
        </div>
    </div>
</nav>
    <div class="site-container">
        <div class="text-center">
            <h1 class="text-3xl font-semibold mb-4">Bem-vindo ao Meu Site</h1>
            <p class="text-lg">Este é o conteúdo principal do meu site.</p>
        </div>
    </div>

    <footer class="footer">
        Este é meu site - Todos os direitos reservados.
    </footer>
</body>
</html>