<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Événement - Community Event Planner</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome pour les icônes -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <!-- Header -->
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
                    <li><a href="#" class="bg-white text-blue-600 px-4 py-2 rounded-full hover:bg-blue-100 transition duration-300">Connexion</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section avec vidéo de fond -->
    <section class="relative h-screen flex items-center justify-center text-white overflow-hidden">
        <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="https://assets.mixkit.co/videos/preview/mixkit-audience-celebrating-a-music-performance-46471-large.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la vidéo.
        </video>
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <div class="text-center z-20" data-aos="fade-up">
            <h2 class="text-5xl font-bold mb-6">Concert en plein air</h2>
            <p class="text-xl mb-8">Venez vivre une expérience musicale unique sous les étoiles.</p>
            <a href="#" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-blue-100 transition duration-300">Participer</a>
        </div>
    </section>

    <!-- Détails de l'événement -->
    <section class="container mx-auto my-12 px-4">
        <!-- Gallerie d'images interactive -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                <img src="https://img.freepik.com/photos-gratuite/tente-mariage-luxe-decor-banquet_624325-1389.jpg?ga=GA1.1.912976082.1739474196&semt=ais_hybrid" alt="Event Image" class="w-full h-64 object-cover transform hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-500">
                    <button class="bg-white text-blue-600 p-3 rounded-full shadow-md hover:bg-blue-100 transition duration-300">
                        <i class="fas fa-expand"></i>
                    </button>
                </div>
            </div>
            <div class="space-y-4">
                <h3 class="text-3xl font-bold">Détails de l'événement</h3>
                <p class="text-gray-700">Rejoignez-nous pour une soirée mémorable avec des artistes locaux, des food trucks et des activités pour toute la famille.</p>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h4 class="text-lg font-semibold">📅 Date</h4>
                        <p class="text-gray-600">25 Octobre 2023</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">📍 Lieu</h4>
                        <p class="text-gray-600">Parc Central, Paris</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">🎟️ Prix</h4>
                        <p class="text-gray-600">Gratuit</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold">👥 Capacité</h4>
                        <p class="text-gray-600">500 personnes</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Programme de l'événement -->
        <div class="mb-12">
            <h3 class="text-3xl font-bold mb-6">Programme</h3>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex space-x-4 mb-4">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-full">Jour 1</button>
                    <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full">Jour 2</button>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-center space-x-4">
                        <span class="text-blue-600 font-bold">18:00</span>
                        <span>Ouverture des portes</span>
                    </li>
                    <li class="flex items-center space-x-4">
                        <span class="text-blue-600 font-bold">19:00</span>
                        <span>Concert principal</span>
                    </li>
                    <li class="flex items-center space-x-4">
                        <span class="text-blue-600 font-bold">21:00</span>
                        <span>Feu d'artifice</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Carte intégrée -->
        <div class="mb-12">
            <h3 class="text-3xl font-bold mb-6">Localisation</h3>
            <div class="h-96 bg-gray-200 rounded-lg overflow-hidden">
                <iframe
                    class="w-full h-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.99144060821!2d2.292292615674389!3d48.85837360866186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1633010383193!5m2!1sfr!2sfr"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>

        <!-- Section des sponsors -->
        <div class="mb-12">
            <h3 class="text-3xl font-bold mb-6">Sponsors</h3>
            <div class="flex overflow-x-auto space-x-6 py-4">
                <img src="https://via.placeholder.com/150" alt="Sponsor 1" class="h-16">
                <img src="https://via.placeholder.com/150" alt="Sponsor 2" class="h-16">
                <img src="https://via.placeholder.com/150" alt="Sponsor 3" class="h-16">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-8 mt-12">
        <div class="container mx-auto text-center">
            <p class="text-sm">© 2023 Community Event Planner. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Animation Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>
</html>