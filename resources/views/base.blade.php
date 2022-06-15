<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>EmForms</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">EmForms</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('employer.create') }}">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('employer.index') }}">Listar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <section>
            @yield('content')
        </section>
    </div>
    <footer class="d-flex justify-content-center">
        <small>EmForms &copy; 2022</small>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
