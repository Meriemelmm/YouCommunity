<header class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-6 shadow-lg">
    <div class="container mx-auto flex justify-between items-center px-4">
        <h1 class="text-3xl font-bold flex items-center">
            🎉 Community Event Planner
        </h1>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="/">Accueil</a></li>
                <li><a href="{{ route('events') }}">Événements</a></li>


                @guest
                    <!-- Code pour l'utilisateur non authentifié -->
                    <li><a href="{{ route('login') }}">Connexion</a></li>
                    <a href="{{ route('register') }}">Inscription</a>



                @endguest

                @auth
    <li><a href="/profile">Profil</a></li>
    <li><a href="{{ route('cree') }}">Créer un événement</a></li>
    <li><a href="{{ route('myEvents') }}"> mes événement</a></li>
    <li>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" style="background: none; border: none; color: inherit; cursor: pointer;">
                Déconnexion
            </button>
        </form>
    </li>
   
@endauth

            </ul>
        </nav>
    </div>
</header>
