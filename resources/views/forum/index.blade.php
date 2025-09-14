<x-layouts.app :title="__('Forums')">
<!-- opcional: oculta elementos hasta que Alpine esté listo -->
<style>
  [x-cloak] { display: none !important; }
</style>

<!-- Componente de búsqueda -->
<div x-data="searchDropdown()" class="relative flex justify-center mt-6">
  <!-- Botón que abre/cierra y enfoca el input -->
  <button 
    @click="open = !open; $nextTick(() => $refs.search.focus())"
    class="px-6 py-3 text-lg rounded-lg font-semibold text-white bg-emerald-700 
           hover:bg-emerald-800 focus:outline-none focus:ring-2 
           focus:ring-emerald-500 focus:ring-offset-2 transition-colors">
    🔍 Buscar discusiones
  </button>

  <!-- Dropdown -->
  <div 
    x-show="open" 
    x-cloak
    @click.away="open = false"
    x-transition
    class="absolute top-full mt-2 w-80 md:w-96 bg-white dark:bg-neutral-900 shadow-lg rounded-xl p-4 z-50"
  >
    <!-- Input + botón de buscar -->
    <label for="search" class="sr-only">Buscar discusiones</label>
    <div class="flex gap-2">
      <input
        x-ref="search"
        id="search"
        x-model="query"
        @keydown.enter.prevent="submit"
        type="text"
        placeholder="Buscar discusiones..."
        class="flex-1 px-3 py-2 rounded-lg border border-gray-200 dark:border-neutral-700 
               bg-white dark:bg-neutral-800 text-gray-800 dark:text-gray-100 
               focus:outline-none focus:ring-2 focus:ring-emerald-500"
      />
      <button
        @click="submit"
        class="px-3 py-2 rounded-lg font-semibold text-white bg-emerald-700 hover:bg-emerald-800 
               focus:outline-none focus:ring-2 focus:ring-emerald-500 transition-colors"
      >
        Buscar
      </button>
    </div>

    <!-- Sugerencias -->
    <p class="text-gray-600 dark:text-gray-300 font-semibold mt-3 mb-2">Búsquedas sugeridas</p>
    <ul class="space-y-2 max-h-48 overflow-auto">
      <template x-for="(item, index) in filteredSuggestions" :key="index">
        <li 
          @click="select(item)"
          class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800 cursor-pointer"
        >
          <span x-text="item"></span>
        </li>
      </template>

      <li x-show="filteredSuggestions.length === 0" class="text-sm text-gray-500 dark:text-gray-400">
        Sin sugerencias
      </li>
    </ul>
  </div>
</div>

<!-- Script Alpine (funcionalidad) -->
<script>
  function searchDropdown() {
    return {
      open: false,
      query: '',
      suggestions: [
        'Conservación del Río Guabas',
        'Fotografías de senderos',
        'Actividades recreativas'
      ],

      // computed: filtra sugerencias según query
      get filteredSuggestions() {
        if (!this.query) return this.suggestions;
        const q = this.query.toLowerCase();
        return this.suggestions.filter(i => i.toLowerCase().includes(q));
      },

      // Simula envío de búsqueda (reemplaza por fetch si quieres)
      submit() {
        if (!this.query.trim()) return;
        // aquí podrías hacer fetch('/forums?search=' + encodeURIComponent(this.query)) ...
        console.log('Buscar:', this.query);

        // añade la búsqueda a la lista si no existe (prototipo)
        if (!this.suggestions.includes(this.query)) {
          this.suggestions.unshift(this.query);
          // opcional: mantener tamaño razonable
          if (this.suggestions.length > 8) this.suggestions.pop();
        }

        // cerrar dropdown
        this.open = false;
      },

      // seleccionar sugerencia
      select(item) {
        this.query = item;
        this.submit();
      }
    }
  }
</script>




    <div class="max-w-5xl mx-auto p-6 space-y-8">

        <!-- Publicación principal -->
        <div class="bg-white dark:bg-neutral-900 rounded-2xl shadow p-6">
            <div class="flex items-center mb-4">
                <img src="/images/avatar1.webp" alt="avatar usuario" class="w-12 h-12 rounded-full">
                <div class="ml-3">
                    <p class="font-semibold text-gray-800 dark:text-gray-100">Juan Pérez</p>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">@juanp</p>
                </div>
            </div>

            <h1 class="text-2xl font-bold mb-3 text-emerald-800 dark:text-emerald-600">
                ¿Qué opinan sobre la conservación del río Guabas?
            </h1>

            <p class="text-gray-700 dark:text-gray-200 leading-relaxed">
                He visto que últimamente se habla mucho sobre el cuidado del río, pero en la práctica no se ve
                mucha acción. ¿Qué ideas tienen ustedes para ayudar en la conservación de este lugar tan importante?
            </p>

            <div class="mt-4 flex space-x-4">
                <button class="px-4 py-2 rounded-lg font-semibold text-white bg-emerald-700 hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition-colors">
                  <x-lucide-reply class="w-5 h-5 text-white dark:text-gray-300" />  
                  Responder
                </button>
                <button class="px-4 py-2 rounded-lg font-semibold text-emerald-700 bg-gray-100 border border-emerald-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition-colors">
                  <x-lucide-share class="w-5 h-5 text-white dark:text-gray-300" />  
                  Compartir
                </button>
            </div>
        </div>

        <!-- Respuestas -->
        <div class="space-y-6">
            <h2 class="text-xl font-bold text-emerald-800 dark:text-emerald-600">
                Respuestas
            </h2>

            <!-- Respuesta 1 -->
            <div class="bg-white dark:bg-neutral-900 rounded-2xl shadow p-4">
                <div class="flex items-center mb-3">
                    <img src="/images/avatar2.png" alt="avatar usuario 2" class="w-10 h-10 rounded-full">
                    <div class="ml-3">
                        <p class="font-semibold text-gray-800 dark:text-gray-100">María López</p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">@marial</p>
                    </div>
                </div>
                <p class="text-gray-700 dark:text-gray-200">
                    Sería bueno organizar campañas de limpieza con voluntarios. Así todos aportamos
                    un granito de arena y se conciencia a la comunidad.
                </p>
            </div>

            <!-- Respuesta 2 -->
            <div class="bg-white dark:bg-neutral-900 rounded-2xl shadow p-4">
                <div class="flex items-center mb-3">
                    <img src="/images/avatar3.png" alt="avatar usuario 3" class="w-10 h-10 rounded-full">
                    <div class="ml-3">
                        <p class="font-semibold text-gray-800 dark:text-gray-100">Carlos Méndez</p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">@carlitos</p>
                    </div>
                </div>
                <p class="text-gray-700 dark:text-gray-200">
                    Estoy de acuerdo. También se podrían hacer charlas en colegios para enseñar a los más jóvenes
                    a valorar y proteger el río desde pequeños.
                </p>
            </div>

            <!-- Respuesta 3 -->
            <div class="bg-white dark:bg-neutral-900 rounded-2xl shadow p-4">
                <div class="flex items-center mb-3">
                    <img src="/images/avatar4.jpg" alt="avatar usuario 4" class="w-10 h-10 rounded-full">
                    <div class="ml-3">
                        <p class="font-semibold text-gray-800 dark:text-gray-100">Laura Sánchez</p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">@lauras</p>
                    </div>
                </div>
                <p class="text-gray-700 dark:text-gray-200">
                    ¡Excelente idea! Incluso se podría proponer un proyecto en la universidad para integrar a más estudiantes.
                </p>
            </div>
        </div>

    </div>

</x-layouts.app>
