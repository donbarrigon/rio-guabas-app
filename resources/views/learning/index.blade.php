<x-layouts.app :title="__('Aprendizaje')">

    <h1 class="text-2xl md:text-4xl font-bold mt-12 mb-8 text-emerald-800 dark:text-emerald-600 text-center">
        Recursos de Aprendizaje
    </h1>

    <div class="flex flex-col space-y-16">
        <!-- Ítem 1 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <!-- Imagen izquierda -->
            <div>
                <img
                    title="https://www.todacolombia.com/departamentos-de-colombia/cauca/hidrografia.html"
                    src="images/aprendizaje1.jpg" alt="Referencia 1"
                    class="w-full h-64 md:h-80 object-cover rounded-2xl shadow" />
            </div>

            <!-- Contenido derecha -->
            <div class="flex flex-col justify-center">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-2">
                    Introducción al Ecosistema del Río
                </h2>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Aprende cómo funciona el ecosistema del Río Guabas, su flora, fauna y la importancia
                    de cada elemento en el equilibrio natural.
                </p>
                <button
                    class="px-4 py-2 text-lg rounded-lg font-semibold text-white bg-emerald-700 
                           hover:bg-emerald-800 focus:outline-none focus:ring-2 
                           focus:ring-emerald-500 focus:ring-offset-2 transition-colors w-fit">
                    Ver más
                </button>
            </div>
        </div>

        <!-- Ítem 2 (invertido) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <!-- Contenido izquierda -->
            <div class="order-2 md:order-1 flex flex-col justify-center">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-2">
                    Conservación y Sostenibilidad
                </h2>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Descubre buenas prácticas para preservar el río y cómo la comunidad puede involucrarse
                    en su cuidado de manera activa.
                </p>
                <button
                    class="px-4 py-2 text-lg rounded-lg font-semibold text-white bg-emerald-700 
                           hover:bg-emerald-800 focus:outline-none focus:ring-2 
                           focus:ring-emerald-500 focus:ring-offset-2 transition-colors w-fit">
                    Ver más
                </button>
            </div>

            <!-- Imagen derecha -->
            <div class="order-1 md:order-2">
                <img 
                    title="https://www.elpais.com.co/valle/cvc-sembro-20000-peces-en-jamundi-y-prometio-cinco-millones-mas-para-los-proximos-cuatro-anos-0201.html"
                    src="images/aprendizaje2.jpg" alt="Referencia 2"
                    class="w-full h-64 md:h-80 object-cover rounded-2xl shadow" />
            </div>
        </div>

        <!-- Ítem 3 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <!-- Imagen izquierda -->
            <div>
                <img 
                    title="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjRvuPJV-7ZFk1kskGDkcOs_BMuWQ0iAgQkA&s"
                    src="images/aprendizaje3.jpg" alt="Referencia 3"
                    class="w-full h-64 md:h-80 object-cover rounded-2xl shadow" />
            </div>

            <!-- Contenido derecha -->
            <div class="flex flex-col justify-center">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-2">
                    Actividades Educativas
                </h2>
                <p class="text-gray-600 dark:text-gray-300 mb-4">
                    Participa en talleres, caminatas guiadas y programas educativos que fomentan
                    el aprendizaje práctico y la conexión con la naturaleza.
                </p>
                <button
                    class="px-4 py-2 text-lg rounded-lg font-semibold text-white bg-emerald-700 
                           hover:bg-emerald-800 focus:outline-none focus:ring-2 
                           focus:ring-emerald-500 focus:ring-offset-2 transition-colors w-fit">
                    Ver más
                </button>
            </div>
        </div>
    </div>

</x-layouts.app>
