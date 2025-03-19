<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Mi aplicacion')</title>
    @vite(['resources/css/login.css'])
</head>
<body>
    <header>
        <h1>Plataforma IMS</h1>
    </header>
    <main>
        <div>
            <h2>Bienvenido al sistema de gestion</h2>
            <form action="/login" method="post">
                <div class="login">
                    <label for=""> Username </label>
                    <input type="text" name="username" id="">
                    <label for=""> Password </label>
                    <input type="password" name="password" id="">
                    <button type="submit">Iniciar sesion</button>
                </div>
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>