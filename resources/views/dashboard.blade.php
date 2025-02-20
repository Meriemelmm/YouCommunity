<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-6 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-3xl font-bold flex items-center">
                👤 <span class="ml-2">Mon Profil</span>
            </h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#" class="hover:text-blue-200 transition duration-300">Accueil</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition duration-300">Événements</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition duration-300">Messages</a></li>
                    <li><a href="#" class="bg-white text-blue-600 px-4 py-2 rounded-full hover:bg-blue-100 transition duration-300">Déconnexion</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Profil Utilisateur Section -->
    <section class="container mx-auto my-12 px-4">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <!-- En-tête du Profil -->
            <div class="flex flex-col items-center text-center">
                <img src="https://via.placeholder.com/150" alt="Photo de Profil" class="w-32 h-32 rounded-full mb-4">
                <h2 class="text-2xl font-bold">Jean Dupont</h2>
                <p class="text-gray-600">@jeandupont</p>
                <p class="text-gray-700 mt-2">Développeur Full Stack | Passionné par les nouvelles technologies</p>
                <div class="mt-4">
                    <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300">Modifier le Profil</a>
                </div>
            </div>

            <!-- Informations du Profil -->
            <div class="mt-8">
                <h3 class="text-xl font-bold mb-4">À propos de moi</h3>
                <p class="text-gray-700">
                    Je suis un développeur Full Stack basé à Paris, avec une passion pour les technologies web et mobiles.
                    J'aime participer à des événements communautaires et partager mes connaissances avec les autres.
                </p>
            </div>

            <!-- Statistiques -->
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <p class="text-2xl font-bold">12</p>
                    <p class="text-gray-600">Événements organisés</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <p class="text-2xl font-bold">45</p>
                    <p class="text-gray-600">Événements participés</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <p class="text-2xl font-bold">1.2K</p>
                    <p class="text-gray-600">Abonnés</p>
                </div>
            </div>

            <!-- Activités Récentes -->
            <div class="mt-8">
                <h3 class="text-xl font-bold mb-4">Activités Récentes</h3>
                <div class="space-y-4">
                    <!-- Activité 1 -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700">🖥️ Vous avez organisé l'événement <strong>Atelier de Programmation</strong> le 20 Octobre 2023.</p>
                    </div>
                    <!-- Activité 2 -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700">🎉 Vous avez participé à l'événement <strong>Concert en Plein Air</strong> le 15 Octobre 2023.</p>
                    </div>
                    <!-- Activité 3 -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700">📸 Vous avez mis à jour votre photo de profil.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-sm">© 2023 Community Event Planner. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>