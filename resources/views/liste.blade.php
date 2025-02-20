<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Événements - Community Event Planner</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header -->
    @include('partials.header')

    <!-- Section des événements -->
    <section class="py-12 bg-gradient-to-r from-blue-500 to-purple-500 min-h-screen">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-white mb-8">📆 Événements à venir</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Carte Événement -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-700">🎸 Concert Rock</h3>
                    <p class="text-gray-600 mt-2">Un grand concert avec des artistes célèbres.</p>
                    <p class="mt-4 text-gray-500"><strong>📍 Lieu :</strong> Paris</p>
                    <p class="text-gray-500"><strong>📅 Date :</strong> 25 Mars 2025</p>
                    <p class="text-gray-500"><strong>👥 Participants :</strong> 120/200</p>
                    <form action="">
                        <input type="hidden">
                          <button class="mt-4 w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                        Participer
                    </button>
                    </form>
                  
                </div>

                <!-- Autre événement -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-gray-700">⚽ Tournoi de Football</h3>
                    <p class="text-gray-600 mt-2">Un tournoi amateur pour tous les passionnés de foot.</p>
                    <p class="mt-4 text-gray-500"><strong>📍 Lieu :</strong> Lyon</p>
                    <p class="text-gray-500"><strong>📅 Date :</strong> 10 Avril 2025</p>
                    <p class="text-gray-500"><strong>👥 Participants :</strong> 32/50</p>
                    <button class="mt-4 w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                        Participer
                    </button>
                </div>

                <!-- Ajouter d'autres événements dynamiquement -->
              
            </div>
        </div>
    </section>

</body>
</html>
