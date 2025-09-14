<x-layouts.app :title="__('Actividades')">
    <!-- Lista de actividades -->
    <div class="space-y-12 mt-8">
        <!-- Actividad 1 (imagen izquierda) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <img 
                title="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhTsm24m-2moXrb4BLD9Yi9F2mXK0OLcTBvQ&s"
                src="images/actividad1.jpg" alt="Actividad 1"
                class="w-full h-64 md:h-80 object-cover rounded-2xl shadow" />
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-emerald-800 dark:text-emerald-600 mb-4">
                    Caminatas Ecológicas
                </h2>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Explora los senderos naturales alrededor del río, descubre la biodiversidad del lugar
                    y aprende de los guías locales sobre la importancia de conservar este ecosistema.
                </p>
                <button class="px-4 py-2 rounded-lg font-semibold text-white bg-emerald-700 
                               hover:bg-emerald-800 focus:outline-none focus:ring-2 
                               focus:ring-emerald-500 focus:ring-offset-2 transition-colors">
                    Ver más
                </button>
            </div>
        </div>

        <!-- Actividad 2 (imagen derecha) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-emerald-800 dark:text-emerald-600 mb-4">
                    Paseos en Bote
                </h2>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Vive la experiencia de navegar el río de forma segura y sustentable, disfrutando de la
                    tranquilidad del agua y observando la flora y fauna en su estado natural.
                </p>
                <button class="px-4 py-2 rounded-lg font-semibold text-white bg-emerald-700 
                               hover:bg-emerald-800 focus:outline-none focus:ring-2 
                               focus:ring-emerald-500 focus:ring-offset-2 transition-colors">
                    Ver más
                </button>
            </div>
            <img 
                title="https://tubarco.news/wp-content/uploads/2024/10/Ruta-Nautica-Valle-del-Cauca.jpg"
                src="images/actividad2.jpg" alt="Actividad 2"
                class="w-full h-64 md:h-80 object-cover rounded-2xl shadow" />
        </div>

        <!-- Actividad 3 (imagen izquierda) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <img 
                title="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoilMK5Mjwzhbw6AeKepjzQKlrvEHhJoHC5g&s"
                src="images/actividad3.jpg" alt="Actividad 3"
                class="w-full h-64 md:h-80 object-cover rounded-2xl shadow" />
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-emerald-800 dark:text-emerald-600 mb-4">
                    Observación de Aves
                </h2>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Disfruta de la gran variedad de aves que habitan el ecosistema del río. Una actividad 
                    perfecta para los amantes de la naturaleza y la fotografía.
                </p>
                <button class="px-4 py-2 rounded-lg font-semibold text-white bg-emerald-700 
                               hover:bg-emerald-800 focus:outline-none focus:ring-2 
                               focus:ring-emerald-500 focus:ring-offset-2 transition-colors">
                    Ver más
                </button>
            </div>
        </div>
    </div>

    <!-- Recomendaciones finales -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-16 bg-white dark:bg-gray-900 
                rounded-2xl shadow p-6">
        
        <!-- Recomendación -->
        <div class="flex flex-col items-start">
            <div class="flex items-center mb-2">
                <x-lucide-heart class="w-6 h-6 text-emerald-600 mr-2"/>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Recomendación</h3>
            </div>
            <p class="text-gray-600 dark:text-gray-400">
                Disfruta el río con respeto, cuídalo como si fuera tu hogar.
            </p>
        </div>

        <!-- Para toda la familia -->
        <div class="flex flex-col items-start">
            <div class="flex items-center mb-2">
                <x-lucide-users class="w-6 h-6 text-emerald-600 mr-2"/>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Para toda la familia</h3>
            </div>
            <p class="text-gray-600 dark:text-gray-400">
                Senderos y experiencias pensados para todas las edades.
            </p>
        </div>

        <!-- Prohibiciones -->
        <div class="flex flex-col items-start">
            <div class="flex items-center mb-2">
                <x-lucide-ban class="w-6 h-6 text-emerald-600 mr-2"/>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Prohibiciones</h3>
            </div>
            <p class="text-gray-600 dark:text-gray-400">
                No arrojar basura, no encender fogatas y no dañar la flora o fauna del río.
            </p>
        </div>

        <!-- Calendario -->
        <div class="flex flex-col items-start">
            <div class="flex items-center mb-2">
                <x-lucide-calendar class="w-6 h-6 text-emerald-600 mr-2"/>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Calendario</h3>
            </div>
            <p class="text-gray-600 dark:text-gray-400">
                Actividades disponibles todos los fines de semana y festivos.
            </p>
        </div>
    </div>
</x-layouts.app>
