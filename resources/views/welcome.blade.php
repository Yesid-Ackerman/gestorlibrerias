<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body{
            margin: 0%;
            background-color: burlywood;
        }
        .header-background {
            background-color: #787b83;
            height: 100px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        .header-background a {
            text-decoration: none;
            color: #ffffff;
            padding: 10px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .header-background a:hover {
            background-color: #ccc;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }

        p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #666;
        }
    </style>
</head>
<body>
    <header class="header-background">
        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                @else
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <div class="container">
        <h1>Bienvenido al Dashboard</h1>
        <p>Presiona Registro para Crear una Cuenta</p>
        <p>Presiona Acceso ingresar a la App</p>
    </div>
</body>
</html>
