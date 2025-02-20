<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Community Event Planner</title>
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
                    <li><a href="#" class="hover:text-blue-200 transition duration-300">Créer un événement</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="flex items-center justify-center h-screen bg-gradient-to-r from-blue-500 to-purple-500">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Connexion</h2>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label for="email" class="block text-gray-700 font-semibold">Adresse e-mail</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div>
                    <label for="password" class="block text-gray-700 font-semibold">Mot de passe</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="flex justify-between items-center">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-blue-600">
                        <span class="ml-2 text-gray-600">Se souvenir de moi</span>
                    </label>
                    <a href="#" class="text-blue-600 hover:underline">Mot de passe oublié ?</a>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">Se connecter</button>
            </form>
            <p class="text-center text-gray-600 mt-4">Pas encore inscrit ? <a href="#" class="text-blue-600 hover:underline">Créer un compte</a></p>
        </div>
    </section>
    
  
</body>
</html>
