<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">GEB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/eventos">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contato" tabindex="-1" aria-disabled="true">Contato</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/eventos/criar" tabindex="-1" aria-disabled="true">Criar Evento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard" tabindex="-1" aria-disabled="true">Painel</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Sair
                            </a>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/login" tabindex="-1" aria-disabled="true">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register" tabindex="-1" aria-disabled="true">Registre-se</a>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('sucesso'))
                    <p class="bg-danger">{{ session('sucesso') }}</p>
                @endif

                @yield('content')
            </div>
        </div>
    </main>
</body>
