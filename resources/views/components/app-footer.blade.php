<footer class="bg-emerald-800 text-white" x-data="{ year: new Date().getFullYear() }">
    <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-8">
        
        {{-- Parte izquierda --}}
        <div class="flex flex-col justify-between">
            {{-- Logo --}}
            <h2 class="text-2xl font-bold mb-4">Río Guabas Sostenible</h2>

            {{-- Redes sociales --}}
            <div class="flex space-x-4">
                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-300">
                    <x-lucide-facebook class="w-6 h-6" />
                </a>
                <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-300">
                    <x-lucide-twitter class="w-6 h-6" />
                </a>
                <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-300">
                    <x-lucide-youtube class="w-6 h-6" />
                </a>
                <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-300">
                    <x-lucide-instagram class="w-6 h-6" />
                </a>
            </div>
            {{-- Línea inferior con Alpine.js mostrando el año actual --}}
            <div class="hidden md:flex text-left text-sm text-emerald-200 py-4 border-t border-emerald-700">
                © <span x-text="year"></span> Río Guabas. Todos los derechos reservados.
            </div>
        </div>

        {{-- Parte derecha --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div>
                <h3 class="font-semibold mb-3">Sobre el Río Guabas</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-emerald-300">Historia</a></li>
                    <li><a href="#" class="hover:text-emerald-300">Biodiversidad</a></li>
                    <li><a href="#" class="hover:text-emerald-300">Ecosistema</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-3">Participa</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-emerald-300">Voluntariado</a></li>
                    <li><a href="#" class="hover:text-emerald-300">Donaciones</a></li>
                    <li><a href="#" class="hover:text-emerald-300">Jornadas de limpieza</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-3">Recursos</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-emerald-300">Aprendizaje</a></li>
                    <li><a href="#" class="hover:text-emerald-300">Noticias</a></li>
                    <li><a href="#" class="hover:text-emerald-300">Contacto</a></li>
                </ul>
            </div>

            {{-- Extra: Legal --}}
            <div>
                <h3 class="font-semibold mb-3">Legal</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-emerald-300">Términos y condiciones</a></li>
                    <li><a href="#" class="hover:text-emerald-300">Política de privacidad</a></li>
                </ul>
            </div>
        </div>

        {{-- Línea inferior con Alpine.js mostrando el año actual --}}
            <div class="flex md:hidden text-center text-sm text-emerald-200 py-4 border-t border-emerald-700">
                © <span x-text="year"></span> Río Guabas. Todos los derechos reservados.
            </div>
    </div>
</footer>
