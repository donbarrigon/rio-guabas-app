<x-layouts.app :title="__('Welcome')">
    <h1 class="text-2xl md:text-4xl font-bold mt-12 mb-6 text-emerald-800 dark:text-emerald-600">
        Río Guabas: belleza, vida y acciones que todos podemos tomar para conservarlo.
    </h1>

    <p class="my-4 text-gray-600 dark:text-gray-300 text-md md:text-xl">
        Descubre cómo juntos podemos proteger y disfrutar del Río Guabas. Aprende sobre sus secretos, su belleza natural y las acciones que todos podemos tomar para mantenerlo limpio y vivo para las futuras generaciones.
    </p>

    <button class="px-4 py-3 text-xl rounded-lg font-semibold text-white bg-emerald-700 hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition-colors">
        Ver mas
    </button>

    <img 
        alt="imagen del rio guabas"
        src="images/home1.jpg"
        class="w-full mt-8 mb-16 rounded-2xl object-cover"
    />

    <h1 class="w-full text-center text-2xl md:text-4xl font-bold mt-12 mb-6 text-emerald-800 dark:text-emerald-600">
        Río Guabas Un Tesoro Natural para Admirar y Disfrutar
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-6">
        <!-- Columna 1 -->
        <div class="flex flex-col items-center text-center bg-white dark:bg-neutral-800 rounded-2xl shadow p-4">
            <img src="images/home4.jpg" alt="imagen del rio guabas" class="w-full m-2 h-48 rounded-2xl object-cover" />
            <h3 class="text-xl md:text-2xl text-gray-800 dark:text-gray-100 font-semibold mb-2">Paseos y Senderos Escénicos</h3>
            <p class="text-gray-600 dark:text-gray-300">Explorar los alrededores del río mediante caminatas, picnics y rutas de observación.</p>
        </div>

        <!-- Columna 2 -->
        <div class="flex flex-col items-center text-center bg-white dark:bg-neutral-800 rounded-2xl shadow p-4">
            <img src="images/home2.jpg" alt="imagen del rio guabas" class="w-full m-2 h-48 rounded-2xl object-cover" />
            <h3 class="text-xl md:text-2xl text-gray-800 dark:text-gray-100 font-semibold mb-2">Fotografía y Arte Natural</h3>
            <p class="text-gray-600 dark:text-gray-300">Captura la belleza del río a través de la fotografía, la pintura o la escritura.</p>
        </div>

        <!-- Columna 3 -->
        <div class="flex flex-col items-center text-center bg-white dark:bg-neutral-800 rounded-2xl shadow p-4">
            <img src="images/home3.jpg" alt="imagen del rio guabas" class="w-full m-2 h-48 rounded-2xl object-cover" />
            <h3 class="text-xl md:text-2xl text-gray-800 dark:text-gray-100 font-semibold mb-2">Actividades Recreativas Sustentables</h3>
            <p class="text-gray-600 dark:text-gray-300">Paseos en bote, kayak y actividades que permiten conectarse con la naturaleza.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6 mt-12 mb-6 bg-white dark:bg-neutral-800 rounded-2xl shadow">
        <!-- Izquierda -->
        <div class="flex flex-col justify-center">
            <h1 class="w-full text-left text-2xl md:text-4xl font-bold mb-6 text-emerald-800 dark:text-emerald-600">
                Cuidemos el Río Guabas: Nuestro compromiso, nuestro futuro
            </h1>

            <!-- Sección 1 -->
            <div class="mb-6">
                <h3 class="text-xl md:text-2xl text-gray-800 dark:text-gray-100 font-semibold mb-2">Educación Ambiental en la Comunidad</h3>
                <p class="text-gray-600 dark:text-gray-300">Fomentar talleres, charlas y campañas informativas sobre la importancia del río.</p>
            </div>

            <!-- Sección 2 -->
            <div>
                <h3 class="text-xl md:text-2xl text-gray-800 dark:text-gray-100 font-semibold mb-2">Programas de Participación Ciudadana</h3>
                <p class="text-gray-600 dark:text-gray-300">Involucrar a la comunidad en limpieza, monitoreo del agua y conservación.</p>
            </div>

            <div class="flex gap-4 mt-6">
                <button class="px-4 py-3 text-xl rounded-lg font-semibold text-white bg-emerald-700 hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition-colors">
                    Ver mas
                </button>
                <button class="px-4 py-3 text-xl rounded-lg font-semibold text-emerald-700 bg-gray-100 dark:bg-neutral-800 border border-emerald-700 hover:bg-gray-200 dark:hover:bg-neutral-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition-colors">
                    Ver programas
                </button>
            </div>
        </div>

        <!-- Derecha -->
        <div class="h-64 md:h-auto">
            <img src="images/home5.jpg" alt="imagen del rio guabas" class="w-full h-full object-cover rounded-2xl" />
        </div>
    </div>

    <div class="flex flex-col my-6">
        <h1 class="w-full text-left text-2xl md:text-4xl mt-12 font-bold mb-6 text-emerald-800 dark:text-emerald-600">
            Cuidemos el Río Guabas: Nuestro compromiso, nuestro futuro
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Columna 1 -->
            <div class="flex flex-col items-center text-center bg-white dark:bg-neutral-800 rounded-2xl shadow p-4">
                <img src="images/home4.jpg" alt="imagen del rio guabas" class="w-full m-2 h-64 rounded-2xl object-cover" />
                <h3 class="text-xl md:text-2xl text-left text-gray-800 dark:text-gray-100 font-semibold mb-2">Mantén el Río Limpio</h3>
                <p class="text-gray-600 dark:text-gray-300 text-left">Evita arrojar basura y participa en jornadas de limpieza.</p>
            </div>

            <!-- Columna 2 -->
            <div class="flex flex-col items-center text-center bg-white dark:bg-neutral-800 rounded-2xl shadow p-4">
                <img src="images/home2.jpg" alt="imagen del rio guabas" class="w-full m-2 h-64 rounded-2xl object-cover" />
                <h3 class="text-xl md:text-2xl text-left text-gray-800 dark:text-gray-100 font-semibold mb-2">Cuida la Vegetación y la Fauna</h3>
                <p class="text-gray-600 dark:text-gray-300 text-left">Respeta la flora y fauna para mantener el equilibrio natural.</p>
            </div>            
        </div>
    </div>

    <div class="mt-12 mb-6">
        <h1 class="w-full text-left text-2xl md:text-4xl mt-12 font-bold mb-6 text-emerald-800 dark:text-emerald-600">
            Comentarios
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Comentario 1 -->
            <div class="flex flex-col justify-between bg-white dark:bg-neutral-800 rounded-2xl shadow p-6">
                <p class="text-gray-700 dark:text-gray-300 mb-4">Este es un comentario de ejemplo.</p>
                <div class="flex items-center">
                    <img src="images/avatar1.webp" alt="Avatar usuario 1" class="w-12 h-12 rounded-full">
                    <div class="ml-3">
                        <p class="font-semibold text-gray-800 dark:text-gray-100">Juan Pérez</p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">@juanp</p>
                    </div>
                </div>
            </div>

            <!-- Comentario 2 -->
            <div class="flex flex-col justify-between bg-white dark:bg-neutral-800 rounded-2xl shadow p-6">
                <p class="text-gray-700 dark:text-gray-300 mb-4">Otro comentario de prueba.</p>
                <div class="flex items-center">
                    <img src="images/avatar2.png" alt="Avatar usuario 2" class="w-12 h-12 rounded-full">
                    <div class="ml-3">
                        <p class="font-semibold text-gray-800 dark:text-gray-100">María López</p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">@marial</p>
                    </div>
                </div>
            </div>

            <!-- Comentario 3 -->
            <div class="flex flex-col justify-between bg-white dark:bg-neutral-800 rounded-2xl shadow p-6">
                <p class="text-gray-700 dark:text-gray-300 mb-4">Último comentario de ejemplo.</p>
                <div class="flex items-center">
                    <img src="images/avatar3.png" alt="Avatar usuario 3" class="w-12 h-12 rounded-full">
                    <div class="ml-3">
                        <p class="font-semibold text-gray-800 dark:text-gray-100">Carlos Ruiz</p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">@carlosr</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
