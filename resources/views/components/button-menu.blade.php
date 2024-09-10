{{-- HTML --}}

<button class="btn-menu">
    <i class="fas fa-list-ul"></i>
    <span class="text">{{ $slot }}</span>

    {{-- Adiciona o dropdown ao passar o mouse --}}
    <div class="dropdown-menu">
        <a href="{{route('profile.edit')}}"><i class="fas fa-user-cog"></i> Perfil</a>
        <a href="#"  onclick="document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Logout</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</button>

{{-- CSS --}}
<style>
    /* Estilo do button menu */

    .btn-menu {
        position: relative; /* Necessário para o dropdown */
        width: 10rem;
        border-radius: 10px;
        border: none;
        transition: all 0.5s ease-in-out;
        font-size: 1rem;
        font-family: 'Source Sans Pro', sans-serif;
        font-weight: 600;
        align-items: center;
        background: white;
        color: black;
    }

    i {
        padding-right: 1rem;
    }

    .btn-menu:hover {
        box-shadow: 0 0 20px 0px #2e2e2e3a;
    }

    .text {
        color: black;
    }

    .btn-menu .text {
        transform: translateX(55px);
    }

    .btn-menu:hover .icon {
        width: 175px;
    }

    /* Estilos do dropdown menu */
    .dropdown-menu {
        display: none; /* Ocultar por padrão */
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        width: 150px;
        font-family: 'Source Sans Pro', sans-serif;
        transition: height 0.3s ease-in-out; /* Transição suave da altura */
    }

    .dropdown-menu a {
        display: block;
        padding: 10px;
        text-decoration: none;
        color: black;
        font-size: 0.9rem;
        font-weight: 500;
        transition: background-color 0.3s ease;
    }

    .dropdown-menu a:hover {
        background-color: #f0f0f0;
    }

    /* Exibe o menu suspenso ao passar o mouse */
    .btn-menu:hover .dropdown-menu {
        display: block;
    }
</style>
