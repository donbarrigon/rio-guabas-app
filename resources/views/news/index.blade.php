<x-layouts.app :title="__('News')">
<div class="flex flex-col max-w-5xl mx-auto p-6 mb-12 rounded-2xl shadow-xl">

  <!-- Noticia principal -->
  <h1 class="text-3xl md:text-4xl font-bold mb-2 text-emerald-800 dark:text-emerald-600">
    La ola de calor afecta el rio Guabas
  </h1>

  <p class="text-sm text-gray-500 mb-4">Publicado el 13 de septiembre, 2025</p>

  <p class="text-gray-600 dark:text-gray-300 mb-6">
    Este es un resumen breve de la noticia para que el lector sepa de qué se trata 
    antes de entrar al detalle.
  </p>

  <img 
    title="https://img.canal1.com.co/wp-content/uploads/2024/01/31122033/rio-guabas.jpg?format=auto&width=1200"
    src="images/noticias1.avif" 
    alt="Imagen de la noticia"
    class="w-full rounded-2xl object-cover mb-6"
  />

  <div class="text-gray-700 dark:text-gray-200 leading-relaxed mb-12">
    <p>
        Aquí va el cuerpo completo de la noticia con toda la ampliación, explicando en detalle 
        la información principal. El texto se puede extender con varias secciones, párrafos y 
        cualquier otro contenido relacionado al tema.
    </p>
    <br>
    <p>
        algun otro texto cualquiera que el autor quiera.
    </p>
    <br>
    <p>
        Aquí va el todavia mas cuerpo de la noticia con toda la ampliación, explicando en detalle 
        la información principal. El texto se puede extender con varias secciones, párrafos y 
        cualquier otro contenido relacionado al tema y mas cosas que se le ocuarra al autor hacer decir
        o mencionar para informar al lector de lo que quiera decir, informar, etc.
    </p>
  </div>

  <!-- Artículos relacionados -->
  <div>
    <h2 class="text-2xl font-bold mb-6 text-emerald-800 dark:text-emerald-600">
      Artículos relacionados
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      
      <!-- Artículo relacionado 1 -->
      <div class="flex flex-col bg-white dark:bg-neutral-900 rounded-2xl shadow-xl p-4">
        <img
            title="https://www.portafolio.co/files/article_content/uploads/2024/02/05/65c140eebc5b1.jpeg"
            src="images/noticias2.jpg" 
            alt="artículo 1" 
            class="w-full h-40 object-cover rounded-lg mb-3" 
        />
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-1">
          Fenomeno del niño: ola de calor seco el rio
        </h3>
        <p class="text-sm text-gray-500 mb-2">12 de septiembre, 2025</p>
        <p class="text-gray-600 dark:text-gray-300 line-clamp-3">
          a ese niño lo que le falto fue correa para que deje de secar las aguas del rio
        </p>
      </div>

      <!-- Artículo relacionado 2 -->
      <div class="flex flex-col bg-white dark:bg-neutral-900 rounded-2xl shadow-xl p-4">
        <img
            title="https://www.portafolio.co/economia/regiones/fenomeno-de-el-nino-ola-de-calor-seco-el-rio-guabas-en-valle-del-cauca-597703"
            src="images/home5.jpg" 
            alt="artículo 1" 
            class="w-full h-40 object-cover rounded-lg mb-3" 
        />
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-1">
          Ola de calor seca el rio Guabas
        </h3>
        <p class="text-sm text-gray-500 mb-2">10 de septiembre, 2025</p>
        <p class="text-gray-600 dark:text-gray-300 line-clamp-3">
          Este es otro resumen corto de una noticia relacionada, el texto se corta con puntos suspensivos...
        </p>
      </div>

      <!-- Artículo relacionado 3 -->
      <div class="flex flex-col bg-white dark:bg-neutral-900 rounded-2xl shadow-xl p-4">
        <img 
          title="https://www.elpais.com.co/resizer/v2/IAYROPZQURGWFM5X46VD6TKZBU.jpg?auth=7c05ee6c9d1a39f89567922c9b5f1211c29470c2c7500413cf32e9a807c6003a&smart=true&quality=75&width=1280&fitfill=false"
          src="images/noticias3.avif" 
          alt="artículo 3" 
          class="w-full h-40 object-cover rounded-lg mb-3" 
        />
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-1">
          Solo hay piedras en el rio guabas
        </h3>
        <p class="text-sm text-gray-500 mb-2">8 de septiembre, 2025</p>
        <p class="text-gray-600 dark:text-gray-300 line-clamp-3">
          Texto de ejemplo para el resumen de otra noticia relacionada. El contenido se corta automáticamente...
        </p>
      </div>

    </div>
  </div>
</div>

<div class="flex flex-col max-w-5xl mx-auto p-6 rounded-2xl mb-12 shadow-xl">

  <!-- Noticia principal -->
  <h1 class="text-3xl md:text-4xl font-bold mb-2 text-emerald-800 dark:text-emerald-600">
    Descubren 2 estudiantes de Areandina perezosos
  </h1>

  <p class="text-sm text-gray-500 mb-4">Publicado el 13 de septiembre, 2025</p>

  <p class="text-gray-600 dark:text-gray-300 mb-6">
    Se descubrió que Lida y Alejandro no se esfuerzan demasiado y repiten las imágenes para no tener que poner muchas referencias.
  </p>

  <img 
    title="https://img.canal1.com.co/wp-content/uploads/2024/01/31122033/rio-guabas.jpg?format=auto&width=1200"
    src="images/noticias1.avif" 
    alt="Imagen de la noticia"
    class="w-full rounded-2xl object-cover mb-6"
  />

  <div class="text-gray-700 dark:text-gray-200 leading-relaxed mb-12">
    <p>
      Un hallazgo inesperado ha sacudido la tranquilidad académica: dos estudiantes de Areandina, identificados como Lida y Alejandro, fueron descubiertos aplicando una técnica de "eficiencia extrema" en sus trabajos. Según testigos confiables (sus propios compañeros de clase), ambos habrían decidido reutilizar imágenes de manera estratégica, con el claro objetivo de reducir el número de referencias que debían incluir en sus entregas.
    </p>
    <p>
      La comunidad académica se encuentra dividida: algunos los acusan de perezosos, mientras que otros los ven como visionarios que han llevado el concepto de “optimización de recursos” al siguiente nivel. “Si ya tengo una foto de un río, ¿por qué no usarla tres veces? ¡El río sigue siendo el mismo!”, habría declarado Alejandro entre risas.
    </p>
    <p>
      Por su parte, Lida, siempre pragmática, defendió la práctica asegurando que se trataba de un acto de “sostenibilidad académica”, pues al reutilizar imágenes se ahorra tiempo, energía y hasta espacio en la nube.
    </p>
    <p>
      El caso está siendo analizado por expertos en pedagogía y humor universitario, quienes aún no deciden si sancionarlos por flojos o premiarlos por creativos.
      </p>
  </div>

  <!-- Artículos relacionados -->
  <div>
    <h2 class="text-2xl font-bold mb-6 text-emerald-800 dark:text-emerald-600">
      Artículos relacionados
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      
      <!-- Artículo relacionado 1 -->
      <div class="flex flex-col bg-white dark:bg-neutral-900 rounded-2xl shadow-xl p-4">
        <img
            title="https://www.portafolio.co/files/article_content/uploads/2024/02/05/65c140eebc5b1.jpeg"
            src="images/noticias2.jpg" 
            alt="artículo 1" 
            class="w-full h-40 object-cover rounded-lg mb-3" 
        />
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-1">
          Titulo del articulo 1
        </h3>
        <p class="text-sm text-gray-500 mb-2">12 de septiembre, 2025</p>
        <p class="text-gray-600 dark:text-gray-300 line-clamp-3">
          a ese niño lo que le falto fue correa para que deje de secar las aguas del rio
        </p>
      </div>

      <!-- Artículo relacionado 2 -->
      <div class="flex flex-col bg-white dark:bg-neutral-900 rounded-2xl shadow-xl p-4">
        <img
            title="https://www.portafolio.co/economia/regiones/fenomeno-de-el-nino-ola-de-calor-seco-el-rio-guabas-en-valle-del-cauca-597703"
            src="images/home5.jpg" 
            alt="artículo 1" 
            class="w-full h-40 object-cover rounded-lg mb-3" 
        />
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-1">
          Titulo para un segundo articulo
        </h3>
        <p class="text-sm text-gray-500 mb-2">10 de septiembre, 2025</p>
        <p class="text-gray-600 dark:text-gray-300 line-clamp-3">
          Este es otro resumen corto de una noticia relacionada, el texto se corta con puntos suspensivos...
        </p>
      </div>

      <!-- Artículo relacionado 3 -->
      <div class="flex flex-col bg-white dark:bg-neutral-900 rounded-2xl shadow-xl p-4">
        <img 
          title="https://www.elpais.com.co/resizer/v2/IAYROPZQURGWFM5X46VD6TKZBU.jpg?auth=7c05ee6c9d1a39f89567922c9b5f1211c29470c2c7500413cf32e9a807c6003a&smart=true&quality=75&width=1280&fitfill=false"
          src="images/noticias3.avif" 
          alt="artículo 3" 
          class="w-full h-40 object-cover rounded-lg mb-3" 
        />
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-1">
          Titulo para el articulo 3
        </h3>
        <p class="text-sm text-gray-500 mb-2">8 de septiembre, 2025</p>
        <p class="text-gray-600 dark:text-gray-300 line-clamp-3">
          Texto de ejemplo para el resumen de otra noticia relacionada. El contenido se corta automáticamente...
        </p>
      </div>

    </div>
  </div>
</div>

</x-layouts.app>