<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/final.css">
</head>
<body >
    <header class="bg-red-800 text-white">
        <nav class="nav flex flex-col items-center md:flex-row justify-between px-3 py-2">
            <p>logo</p>
            <ol class="">
                <a class="mr-2" href="">Inicio</a>
                <a class="mr-2" href="">Registar</a>
                <a href="">Cerrar sesión</a>
            </ol>
        </nav>
    </header>

    <?php echo $mostrar ?>


    <footer class="bg-black text-white mt-3">
        <p>Todos los derechos reservados</p>
    </footer>
    <script src="/js/bundle.min.js"></script>
</body>
</html>