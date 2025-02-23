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
    @foreach($events as $event)
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-bold text-gray-700">{{$event->titre}}</h3>
            <p class="text-gray-600 mt-2">Un grand concert avec des artistes célèbres.</p>
            <p class="mt-4 text-gray-500"><strong>📍 Lieu :</strong> {{$event->lien}}</p>
            <p class="text-gray-500"><strong>📅 Date :</strong> {{$event->date_heure}}</p>
            <p class="text-gray-500"><strong>👥 Participants :</strong> {{$event->categorie}}</p>
            <form action="">
                <input  type="hidden" value="{{$event}}">
                <button class="mt-4 w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Participer
                </button>
            </form>
        </div>
    @endforeach
</div>
        </div>
    </section>

</body>
</html>
