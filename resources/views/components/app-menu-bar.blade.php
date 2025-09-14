<header class="w-full">
    <nav class="bg-emerald-800 text-white">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="text-xl font-bold hover:text-emerald-300 transition-colors">
                        Rio Guabas Sostenible
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-6">
                    @php
                        $items = [
                            ['label' => 'Noticias',    'route' => 'news.index'],
                            ['label' => 'Actividades', 'route' => 'activity.index'],
                            ['label' => 'Aprendizaje', 'route' => 'learning.index'],
                            ['label' => 'Foros',       'route' => 'forum.index'],
                            ['label' => 'Galería',     'route' => 'galery.index'],
                            ['label' => 'Contacto',    'route' => 'contact.index'],
                        ];
                    @endphp

                    @foreach ($items as $item)
                        <a href="{{ route($item['route']) }}"
                        class="relative hover:text-emerald-300 text-xl transition-colors 
                        {{ request()->routeIs($item['route']) ? 'after:absolute after:left-0 after:right-0 after:-bottom-1 after:h-0.5 after:bg-white' : '' }}">
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </div>

                <!-- User Menu -->
                <div class="hidden md:flex items-center space-x-4">
                    @guest
                        <a href="{{ route('login') }}" class="hover:text-emerald-300">Iniciar sesión</a>
                        <a href="{{ route('register') }}" class="hover:text-emerald-300">Registrarse</a>
                    @endguest

                    @auth
                        <div class="relative" x-data="{ open: false }">
                            <!-- Botón -->
                            <button @click="open = !open"
                                    class="flex items-center space-x-2 hover:text-emerald-300 focus:outline-none">
                                <span>{{ Auth::user()->name }}</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>

                            <!-- Submenú -->
                            <div x-show="open"
                                @click.outside="open = false"
                                class="absolute right-0 mt-2 w-40 bg-white text-black rounded shadow-lg"
                                x-cloak>
                                <a href="{{ route('settings.profile') }}" class="block px-4 py-2 hover:bg-gray-100">Perfil</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">
                                        Cerrar sesión
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endauth
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-white hover:text-emerald-300 focus:outline-none">
                        <!-- Icono hamburguesa -->
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden px-2 pt-2 pb-3 space-y-1">
            @foreach ($items as $item)
                <a href="{{ route($item['route']) }}"
                class="block px-3 py-2 rounded hover:bg-emerald-700 {{ request()->routeIs($item['route']) ? 'bg-emerald-900' : '' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach

            @guest
                <a href="{{ route('login') }}" class="block px-3 py-2 rounded hover:bg-emerald-700">Iniciar sesión</a>
                <a href="{{ route('register') }}" class="block px-3 py-2 rounded hover:bg-emerald-700">Registrarse</a>
            @endguest

            @auth
                <a href="{{ route('settings.profile') }}" class="block px-3 py-2 rounded hover:bg-emerald-700">Perfil</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-3 py-2 rounded hover:bg-emerald-700">
                        Cerrar sesión
                    </button>
                </form>
            @endauth
        </div>

        <script>
            document.getElementById('mobile-menu-btn').addEventListener('click', function () {
                document.getElementById('mobile-menu').classList.toggle('hidden');
            });
        </script>
    </nav>
</header>
