

    <!-- Formulaire d'ajout d'événement -->
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Événement - Community Event Planner</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header -->
    @include('partials.header')

    <!-- Formulaire d'ajout d'événement -->
    <section class="flex items-center justify-center h-screen bg-gradient-to-r from-blue-500 to-purple-500">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Créer un Nouvel Événement</h2>

            <form action="{{ route('cree') }}" method="POST" class="space-y-4">
            @csrf
              <!-- Protection CSRF (si utilisé avec Laravel) -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <div>
                    <label class="block text-gray-700 font-semibold">Titre :</label>
                    <input type="text" name="titre" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold">Description :</label>
                    <textarea name="description" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold">Lieu (Adresse) :</label>
                    <input type="text" name="lieu" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold">Date et Heure :</label>
                    <input type="datetime-local" name="date_heure" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold">Catégorie :</label>
                    <select name="categorie" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="sport">Sport</option>
                        <option value="musique">Musique</option>
                        <option value="éducation">Éducation</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold">Nombre Max de Participants :</label>
                    <input type="number" name="max_participants" required min="1" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Ajouter l'Événement
                </button>
            </form>
        </div>
    </section>

</body>
</html>


