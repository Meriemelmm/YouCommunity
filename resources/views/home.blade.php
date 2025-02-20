<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Event Planner</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <!-- Header -->
    <!-- <header class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-6 shadow-lg">
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
    </header> -->
    @include('partials.header')


    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 to-purple-500 text-white overflow-hidden">
        <div class="text-center z-10" data-aos="fade-up">
            <h2 class="text-5xl font-bold mb-6">Découvrez des événements près de chez vous</h2>
            <p class="text-xl mb-8">Rejoignez votre communauté et participez à des événements inoubliables.</p>
            <a href="{{ route('events') }}" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-blue-100 transition duration-300">Explorer les événements</a>
        </div>
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-grid-white/10 opacity-20"></div>
    </section>

    <!-- Featured Events Section -->
    <!-- Featured Events Section -->
<section class="container mx-auto my-12 px-4">
    <h2 class="text-3xl font-bold text-center mb-8" data-aos="fade-up">Événements à venir</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
        <!-- Event Card -->
        <!-- <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-300" data-aos="fade-up">
            <img src="https://img.freepik.com/photos-gratuite/tente-mariage-luxe-decor-banquet_624325-1389.jpg?ga=GA1.1.912976082.1739474196&semt=ais_hybrid" alt="Event Image" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold mb-2">Concert en plein air</h3>
                <p class="text-sm text-gray-700 mb-4">Venez profiter d'un concert unique en plein air avec des artistes locaux.</p>
                <div class="flex  justify-between items-center">
                    <span class="text-xs text-gray-600">📅 25 Octobre 2023</span>

                    <a href="#" class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm hover:bg-blue-700 transition duration-300">Détails</a>
                    <a href="#" class=" bg-blue-600 text-white px-3 py-1 rounded-full text-sm hover:bg-blue-700 transition duration-300">participer</a>
                </div>
            </div>
        </div> -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-300" data-aos="fade-up">
    <img src="https://img.freepik.com/photos-gratuite/tente-mariage-luxe-decor-banquet_624325-1389.jpg?ga=GA1.1.912976082.1739474196&semt=ais_hybrid" alt="Event Image" class="w-full h-40 object-cover">
    <div class="p-4">
        <h3 class="text-lg font-bold mb-2">Concert en plein air</h3>
        <p class="text-sm text-gray-700 mb-4">Venez profiter d'un concert unique en plein air avec des artistes locaux.</p>
        <div class="flex justify-between items-center space-x-4"> <!-- Ajout de space-x-4 pour espacer les liens -->
            <span class="text-xs text-gray-600">📅 25 Octobre 2023</span>

            <!-- Détails Button -->
            <a href="#" class="bg-blue-600 text-white px-3 py-2 rounded-full text-sm hover:bg-blue-700 transition duration-300">
                 Détails
            </a>

            <!-- Participer Button -->
            <a href="#" class="bg-blue-700 text-white px-3 py-2 rounded-full text-sm hover:bg-blue-800 transition duration-300 ">
                Participer
            </a>
        </div>
    </div>
</div>



         <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-300" data-aos="fade-up">
            <img src="https://img.freepik.com/photos-gratuite/tente-mariage-luxe-decor-banquet_624325-1389.jpg?ga=GA1.1.912976082.1739474196&semt=ais_hybrid" alt="Event Image" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold mb-2">Concert en plein air</h3>
                <p class="text-sm text-gray-700 mb-4">Venez profiter d'un concert unique en plein air avec des artistes locaux.</p>
                <div class="flex justify-between items-center">
                    <span class="text-xs text-gray-600">📅 25 Octobre 2023</span>
                    <a href="#" class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm hover:bg-blue-700 transition duration-300">Détails</a>
                </div>
            </div>
        </div>
        <!-- Repeat Event Card for other events -->
        <!-- Exemple de plusieurs événements -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition duration-300" data-aos="fade-up">
            <img src="https://img.freepik.com/photos-gratuite/tente-mariage-luxe-decor-banquet_624325-1389.jpg?ga=GA1.1.912976082.1739474196&semt=ais_hybrid" alt="Event Image" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold mb-2">Atelier de peinture</h3>
                <p class="text-sm text-gray-700 mb-4">Apprenez les techniques de base de la peinture avec des experts.</p>
                <div class="flex justify-between items-center">
                    <span class="text-xs text-gray-600">📅 28 Octobre 2023</span>
                    <a href="#" class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm hover:bg-blue-700 transition duration-300">Détails</a>
                </div>
            </div>
        </div>
        <!-- Ajoutez autant de cartes que nécessaire -->
    </div>
</section>
         
    </section>

    <!-- Call to Action Section -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-20">
        <div class="container mx-auto text-center" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-6">Prêt à créer votre propre événement ?</h2>
            <p class="text-xl mb-8">Rejoignez-nous et organisez des événements qui rassemblent votre communauté.</p>
            <a href="#" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-blue-100 transition duration-300">Créer un événement</a>
        </div>
    </section>

    <!-- Footer -->
   
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