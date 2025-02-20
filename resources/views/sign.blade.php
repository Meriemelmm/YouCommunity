<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Community Event Planner</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <header class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-6 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-3xl font-bold flex items-center">
                🎉 <span class="ml-2">Community Event Planner</span>
            </h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#" class="hover:text-blue-200 transition duration-300">Accueil</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition duration-300">Événements</a></li>
                    <li><a href="#" class="hover:text-blue-200 transition duration-300">Connexion</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="flex items-center justify-center h-screen bg-gradient-to-r from-blue-500 to-purple-500">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Inscription</h2>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label for="name" class="block text-gray-700 font-semibold">Nom complet</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-semibold">Adresse e-mail</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div>
                    <label for="password" class="block text-gray-700 font-semibold">Mot de passe</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div>
                    <label for="confirm_password" class="block text-gray-700 font-semibold">Confirmer le mot de passe</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">S'inscrire</button>
            </form>
            <p class="text-center text-gray-600 mt-4">Déjà inscrit ? <a href="#" class="text-blue-600 hover:underline">Se connecter</a></p>
        </div>
    </section>
    
  
</body>
</html>
