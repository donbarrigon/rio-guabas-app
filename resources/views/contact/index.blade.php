<x-layouts.app :title="__('Contacto')">

    <!-- Hero de contacto -->
    <div class="grid grid-cols-1 md:grid-cols-2 items-center bg-white dark:bg-gray-900 rounded-2xl shadow overflow-hidden p-6 mt-8">
        <!-- Texto -->
        <div class="p-8">
            <h1 class="text-3xl md:text-4xl font-bold text-emerald-800 dark:text-emerald-600 mb-4">
                Póngase en contacto
            </h1>
            <p class="text-gray-600 dark:text-gray-300 text-lg">
                Queremos escucharte. Usa nuestro formulario o cualquiera de los canales de comunicación
                disponibles para resolver tus dudas, sugerencias o comentarios.
            </p>
        </div>
        <!-- Imagen -->
        <img 
            title="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMviIJZ_TY1XnrnZcHrq81EZyMYrkSUEqgZA&s"
            src="images/contacto.jpg" 
            alt="Contacto"
            class="w-full h-full object-cover rounded-2xl" 
        />
    </div>

    <!-- Sección inferior -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">

        <!-- Formulario -->
        <div class="bg-white dark:bg-gray-900 rounded-2xl shadow p-8">
            <h2 class="text-2xl font-semibold text-emerald-800 dark:text-emerald-600 mb-6">
                Escríbenos
            </h2>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Nombre
                    </label>
                    <input type="text" id="name" name="name"
                           class="mt-1 w-full px-4 py-2 rounded-lg border-emerald-700 border-solid border-2
                                  dark:bg-gray-800 dark:text-white focus:ring-emerald-500 focus:border-emerald-500">
                </div>

                <!-- Teléfono + Email en la misma línea -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Teléfono
                        </label>
                        <input type="text" id="phone" name="phone"
                               class="mt-1 w-full px-4 py-2 rounded-lg border-emerald-700 border-solid border-2
                                      dark:bg-gray-800 dark:text-white focus:ring-emerald-500 focus:border-emerald-500">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Email
                        </label>
                        <input type="email" id="email" name="email"
                               class="mt-1 w-full px-4 py-2 rounded-lg border-emerald-700 border-solid border-2
                                      dark:bg-gray-800 dark:text-white focus:ring-emerald-500 focus:border-emerald-500">
                    </div>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Mensaje
                    </label>
                    <textarea id="message" name="message" rows="4"
                              class="mt-1 w-full px-4 py-2 rounded-lg border-emerald-700 border-solid border-2border-solid border-2
                                     dark:bg-gray-800 dark:text-white focus:ring-emerald-500 focus:border-emerald-500"></textarea>
                </div>

                <button type="submit"
                        class="px-6 py-3 rounded-lg font-semibold text-white bg-emerald-700 
                               hover:bg-emerald-800 focus:outline-none focus:ring-2 w-full
                               focus:ring-emerald-500 focus:ring-offset-2 transition-colors">
                    Enviar
                </button>
            </form>
        </div>

        <!-- Otros canales con iconos -->
        <div class="bg-white dark:bg-gray-900 rounded-2xl shadow p-8">
            <h2 class="text-2xl font-semibold text-emerald-800 dark:text-emerald-600 mb-6">
                Otros canales de comunicación
            </h2>
            <ul class="space-y-4 text-gray-700 dark:text-gray-300">
                <li class="flex items-center gap-3">
                    <x-lucide-phone class="w-5 h-5 text-emerald-600" />
                    <span><strong>Valle del Cauca:</strong> (2) 555 1234</span>
                </li>
                <li class="flex items-center gap-3">
                    <x-lucide-phone-call class="w-5 h-5 text-emerald-600" />
                    <span><strong>Resto del país:</strong> 01 8000 123 456</span>
                </li>
                <li class="flex items-center gap-3">
                    <x-lucide-message-circle class="w-5 h-5 text-emerald-600" />
                    <span><strong>WhatsApp:</strong> +57 315 123 4567</span>
                </li>
                <li class="flex items-center gap-3">
                    <x-lucide-mail class="w-5 h-5 text-emerald-600" />
                    <span><strong>Email:</strong> contacto@rio-guabas.org</span>
                </li>
                <li class="flex items-center gap-3">
                    <x-lucide-headset class="w-5 h-5 text-emerald-600" />
                    <span><strong>Línea gratuita:</strong> 01 8000 000 000</span>
                </li>
            </ul>
        </div>
    </div>
</x-layouts.app>
