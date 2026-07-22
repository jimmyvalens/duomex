<!doctype html>
<html lang="es" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Duomex | Suministros de Perforación Industrial</title>
  <link rel="stylesheet" href="src/output.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-slate-50 text-slate-800 font-sans antialiased">
  <header
    class="fixed top-0 left-0 right-0 z-50 border-b border-slate-200/50 bg-white/70 backdrop-blur-md transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <a href="#inicio" class="flex-shrink-0 flex items-center gap-1">
          <img
            src="./img/LogoOk.svg"
            class="h-12 w-auto object-contain"
            alt="Logo Duomex" />
          <span class="text-2xl font-black text-celeste-oscuro tracking-tight">DUOMEX<span class="text-naranja">.</span></span>
        </a>

        <!-- Enlaces -->
        <nav class="hidden md:flex space-x-8">
          <a
            href="#inicio"
            class="relative text-slate-600 hover:text-celeste-oscuro font-medium transition py-1 group">
            Inicio
            <span
              class="absolute bottom-0 left-0 w-0 h-0.5 bg-naranja transition-all duration-300 group-hover:w-full"></span>
          </a>
          <a
            href="#ventajas"
            class="relative text-slate-600 hover:text-celeste-oscuro font-medium transition py-1 group">
            Ventajas
            <span
              class="absolute bottom-0 left-0 w-0 h-0.5 bg-naranja transition-all duration-300 group-hover:w-full"></span>
          </a>
          <a
            href="#catalogo"
            class="relative text-slate-600 hover:text-celeste-oscuro font-medium transition py-1 group">
            Catálogo
            <span
              class="absolute bottom-0 left-0 w-0 h-0.5 bg-naranja transition-all duration-300 group-hover:w-full"></span>
          </a>
        </nav>

        <div class="hidden md:flex items-center">
          <a
            href="#contacto"
            class="bg-naranja hover:brightness-110 text-white px-6 py-2.5 rounded-lg font-bold transition shadow-md shadow-naranja/20">Contactar</a>
        </div>

        <!-- Botón Hamburguesa Animado -->
        <div class="md:hidden">
          <button
            id="mobile-menu-button"
            class="relative w-10 h-10 text-slate-600 hover:bg-slate-100 rounded-lg transition flex items-center justify-center cursor-pointer">
            <svg
              id="menu-icon"
              class="w-6 h-6 transition-all duration-300 transform"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24">
              <path
                id="icon-path"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </header>

  <!-- Menú Móvil -->
  <div
    id="mobile-menu"
    class="grid grid-rows-[0fr] transition-all duration-300 ease-in-out fixed top-16 left-0 right-0 z-40 bg-white/70 backdrop-blur-md shadow-xl">
    <div class="overflow-hidden">
      <!-- El flex debe ir aquí dentro, dentro del div con overflow-hidden -->
      <nav class="flex flex-col items-center space-y-6 py-6">
        <a
          href="#inicio"
          class="menu-link text-slate-600 font-medium hover:text-naranja transition">Inicio</a>
        <a
          href="#ventajas"
          class="menu-link text-slate-600 font-medium hover:text-naranja transition">Ventajas</a>
        <a
          href="#catalogo"
          class="menu-link text-slate-600 font-medium hover:text-naranja transition">Catálogo</a>
        <a
          href="#contacto"
          class="menu-link bg-naranja text-white px-8 py-3 rounded-lg font-bold shadow-md">Contactar</a>
      </nav>
    </div>
  </div>

  <!-- SECCIÓN HERO COMPLETA: REDISEÑO MODERNO CON GLASSMORPHISM -->
  <section
    id="inicio"
    class="relative min-h-[100vh] flex items-center bg-celeste-oscuro py-20 mt-16 overflow-hidden">
    <!-- IMAGEN DE FONDO CON CAPA OSCURA DE TRANSPARENCIA (Ajusta la ruta a tu foto premium) -->
    <div class="absolute inset-0 z-0">
      <img
        src="./img/hero-duomex.jpg"
        alt="Maquinaria de Perforación Industrial"
        class="w-full h-auto object-cover opacity-35" />
      <!-- Degradado para fusionar la imagen con el color corporativo y asegurar legibilidad -->
      <div
        class="absolute inset-0 bg-gradient-to-b from-celeste-oscuro/10 via-celeste-oscuro/20 to-celeste-oscuro"></div>
    </div>

    <!-- ELEMENTOS DE DISEÑO ABSTRACTOS (Para dar modernidad y dinamismo) -->
    <div
      class="absolute top-1/4 -left-32 w-96 h-96 bg-naranja/20 rounded-full blur-3xl pointer-events-none animate-pulse duration-5000"></div>
    <div
      class="absolute bottom-1/4 -right-32 w-96 h-96 bg-celeste-apagado/30 rounded-full blur-3xl pointer-events-none"></div>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
      <div class="max-w-4xl mx-auto text-center">
        <!-- Badge Moderno con Microanimación -->
        <span
          class="inline-flex items-center py-1.5 px-4 rounded-full bg-white/10 backdrop-blur-md text-white text-xs sm:text-sm font-semibold mb-8 border border-white/20 shadow-inner animate-fade-in">
          <span
            class="w-2 h-2 rounded-full bg-naranja mr-2.5 animate-ping"></span>
          Importación y Distribución Directa B2B
        </span>

        <!-- Título Impactante -->
        <h1
          class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-none mb-6">
          Suministros y Herramientas de
          <span
            class="text-transparent bg-clip-text bg-gradient-to-r from-naranja to-amber-400">Perforación Industrial</span>
        </h1>

        <!-- Párrafo Descriptivo -->
        <p
          class="mt-4 text-lg sm:text-xl text-slate-200 max-w-2xl mx-auto mb-12 font-light leading-relaxed">
          Conectamos la excelencia técnica de fabricación en origen con la
          robustez que exigen sus proyectos de minería, obra civil y pozos.
        </p>

        <!-- CONTENEDOR PRINCIPAL GLASSMORPHISM (Aquí está el efecto cristal espectacular) -->
        <div
          class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 sm:p-8 border border-white/20 shadow-2xl max-w-3xl mx-auto mb-10 transition-all duration-500 hover:border-white/30 hover:bg-white/15">
          <p class="text-white text-sm sm:text-base font-medium mb-6">
            Explore nuestras soluciones con total disponibilidad de stock y
            logística nacional optimizada.
          </p>

          <!-- Botones de Acción Estilizados -->
          <div
            class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a
              href="docs/Duomex_Catalogo_Suministros.pdf"
              download
              class="inline-flex justify-center items-center w-full sm:w-auto px-8 py-4 text-base font-bold rounded-xl text-celeste-oscuro bg-gradient-to-r from-naranja to-amber-500 hover:brightness-110 transition-all duration-300 transform hover:-translate-y-0.5 shadow-lg shadow-naranja/30 group">
              <svg
                class="w-5 h-5 mr-2.5 group-hover:translate-y-0.5 transition-transform duration-300"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
              </svg>
              Descargar Catálogo PDF
            </a>
            <a
              href="#contacto"
              class="inline-flex justify-center items-center w-full sm:w-auto px-8 py-4 border border-white/30 text-base font-bold rounded-xl text-white hover:bg-white/10 backdrop-blur-sm transition-all duration-300 transform hover:-translate-y-0.5">
              Solicitar Presupuesto
            </a>
          </div>
        </div>

        <!-- Indicador de Scroll Animado -->
        <div class="mt-4 animate-bounce hidden sm:block">
          <a
            href="#ventajas"
            class="text-slate-400 hover:text-white transition duration-300">
            <svg
              class="w-6 h-6 mx-auto"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 14l-7 7-7-7m14-6l-7 7-7-7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN VENTAJAS CON DEGRADADO Y GLASSMORPHISM -->
  <section
    id="ventajas"
    class="py-24 bg-gradient-to-br from-celeste-oscuro via-slate-800 to-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">
          Gestión global de suministros
        </h2>
        <p class="text-lg text-slate-300 max-w-2xl mx-auto">
          Optimizamos la adquisición de equipos de perforación. Nos encargamos
          de todo el proceso de importación para que usted reciba material de
          primera línea, sin complicaciones logísticas ni demoras
          innecesarias.
        </p>
      </div>

      <!-- Grid de Tarjetas de Cristal -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div
          class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 shadow-xl hover:bg-white/15 hover:border-naranja/50 transition-all duration-300 group">
          <div
            class="w-14 h-14 bg-naranja/20 rounded-xl flex items-center justify-center mb-6 border border-naranja/30 group-hover:scale-110 transition-transform">
            <svg
              class="w-7 h-7 text-naranja"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 00-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Sourcing Global</h3>
          <p class="text-slate-300 leading-relaxed text-sm">
            Conectamos sus necesidades con los mejores fabricantes
            internacionales. Seleccionamos proveedores de confianza para
            garantizar estándares internacionales de calidad.
          </p>
        </div>

        <div
          class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 shadow-xl hover:bg-white/15 hover:border-naranja/50 transition-all duration-300 group">
          <div
            class="w-14 h-14 bg-naranja/20 rounded-xl flex items-center justify-center mb-6 border border-naranja/30 group-hover:scale-110 transition-transform">
            <svg
              class="w-7 h-7 text-naranja"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Gestión Logística</h3>
          <p class="text-slate-300 leading-relaxed text-sm">
            Coordinamos toda la cadena de suministro, desde el origen hasta su
            puerta. Nos encargamos de la importación y seguimiento para que
            usted no tenga que preocuparse.
          </p>
        </div>

        <div
          class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 shadow-xl hover:bg-white/15 hover:border-naranja/50 transition-all duration-300 group">
          <div
            class="w-14 h-14 bg-naranja/20 rounded-xl flex items-center justify-center mb-6 border border-naranja/30 group-hover:scale-110 transition-transform">
            <svg
              class="w-7 h-7 text-naranja"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m0 5.656l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Atención Dedicada</h3>
          <p class="text-slate-300 leading-relaxed text-sm">
            Servicio de atención directa y personalizada. Actuamos como su
            puente de comunicación con fábrica, resolviendo sus dudas y
            agilizando cada proceso.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN CATÁLOGO CON PARALLAX Y TARJETAS 2XL -->
  <!-- NOTA: Añade tu imagen de fondo en la ruta indicada o cámbiala por la que prefieras -->
  <section
    id="catalogo"
    class="relative py-24 bg-[url('../img/con_fondo/catalogo_5_bg.png')] bg-fixed bg-center bg-cover">
    <!-- Capa oscura semitransparente (Overlay) para asegurar la legibilidad -->
    <div class="absolute inset-0 bg-slate-900/80 z-0"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <!-- Título en blanco para contrastar con el fondo parallax -->
        <h2 class="text-3xl md:text-4xl font-black text-white mb-4">
          Nuestro Catálogo de Precisión
        </h2>
        <div class="w-20 h-1.5 bg-naranja mx-auto rounded-full mb-6"></div>
        <p class="text-lg text-slate-300 max-w-2xl mx-auto">
          Soluciones de perforación diseñadas para resistir las condiciones
          más exigentes del terreno.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div
          class="group relative bg-white rounded-2xl overflow-hidden shadow-lg border border-slate-100 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
          <div
            class="h-64 overflow-hidden bg-slate-50 p-6 flex items-center justify-center">
            <img
              src="./img/sin_fondo/catalogo_3.png"
              alt="Martillos DTH"
              class="w-full h-full object-contain transition-transform duration-700 group-hover:scale-110 drop-shadow-md" />
          </div>
          <div
            class="relative p-8 bg-white/80 backdrop-blur-sm -mt-10 rounded-t-2xl border-t border-white/20">
            <span
              class="text-naranja font-bold text-sm tracking-widest uppercase">Martillos</span>
            <h3 class="text-2xl font-black text-celeste-oscuro mt-1 mb-3">
              Martillos DTH
            </h3>
            <p
              class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">
              Equipos de alta eficiencia diseñados para una transmisión de
              energía de impacto óptima, garantizando una perforación rápida y
              constante en las condiciones más exigentes.
            </p>
            <a
              href="#contacto"
              class="block w-full text-center py-3 bg-celeste-oscuro text-white font-bold rounded-lg hover:bg-naranja transition-colors duration-300">
              Solicitar Información
            </a>
          </div>
        </div>

        <div
          class="group relative bg-white rounded-2xl overflow-hidden shadow-lg border border-slate-100 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
          <div
            class="h-64 overflow-hidden bg-slate-50 p-6 flex items-center justify-center">
            <img
              src="./img/sin_fondo/catalogo_5.png"
              alt="Brocas DTH"
              class="w-full h-full object-contain transition-transform duration-700 group-hover:scale-110 drop-shadow-md" />
          </div>
          <div
            class="relative p-8 bg-white/80 backdrop-blur-sm -mt-10 rounded-t-2xl border-t border-white/20">
            <span
              class="text-naranja font-bold text-sm tracking-widest uppercase">Brocas</span>
            <h3 class="text-2xl font-black text-celeste-oscuro mt-1 mb-3">
              Brocas DTH
            </h3>
            <p
              class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">
              Brocas de alto rendimiento con insertos de carburo de tungsteno
              reforzado, optimizadas para ofrecer la máxima tasa de
              penetración y una vida útil prolongada en roca dura.
            </p>
            <a
              href="#contacto"
              class="block w-full text-center py-3 bg-celeste-oscuro text-white font-bold rounded-lg hover:bg-naranja transition-colors duration-300">
              Solicitar Información
            </a>
          </div>
        </div>

        <div
          class="group relative bg-white rounded-2xl overflow-hidden shadow-lg border border-slate-100 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
          <div
            class="h-64 overflow-hidden bg-slate-50 p-6 flex items-center justify-center">
            <img
              src="./img/sin_fondo/catalogo_9.png"
              alt="Tubos de perforación"
              class="w-full h-full object-contain transition-transform duration-700 group-hover:scale-110 drop-shadow-md" />
          </div>
          <div
            class="relative p-8 bg-white/80 backdrop-blur-sm -mt-10 rounded-t-2xl border-t border-white/20">
            <span
              class="text-naranja font-bold text-sm tracking-widest uppercase">Tubos</span>
            <h3 class="text-2xl font-black text-celeste-oscuro mt-1 mb-3">
              Tubos DTH
            </h3>
            <p
              class="text-slate-600 text-sm leading-relaxed mb-6 line-clamp-3">
              Tubos de acero aleado de alta resistencia, fabricados mediante
              procesos de precisión para asegurar una conexión perfecta y una
              integridad estructural superior bajo torsión.
            </p>
            <a
              href="#contacto"
              class="block w-full text-center py-3 bg-celeste-oscuro text-white font-bold rounded-lg hover:bg-naranja transition-colors duration-300">
              Solicitar Información
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN DESCARGA DESTACADA (C.T.A. DE ALTO IMPACTO) -->
  <section id="descarga" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Contenedor del Banner -->
      <div
        class="relative rounded-2xl bg-gradient-to-br from-celeste-oscuro to-slate-900 shadow-2xl overflow-hidden border border-slate-800">
        <!-- Elemento decorativo de fondo (Círculos difuminados para dar profundidad) -->
        <div
          class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-white opacity-5 rounded-full blur-3xl pointer-events-none"></div>
        <div
          class="absolute bottom-0 left-0 -mb-20 -ml-20 w-64 h-64 bg-naranja opacity-10 rounded-full blur-3xl pointer-events-none"></div>

        <!-- Contenido en Flexbox: Texto a la izquierda, botón a la derecha (en desktop) -->
        <div
          class="relative z-10 p-10 md:p-16 flex flex-col lg:flex-row items-center justify-between gap-10">
          <!-- Textos -->
          <div class="text-center lg:text-left flex-1 max-w-2xl">
            <h2 class="text-3xl md:text-4xl font-black text-white mb-4">
              Explore Todas las Especificaciones Técnicas
            </h2>
            <!-- Línea decorativa alineada según el dispositivo -->
            <div
              class="w-20 h-1.5 bg-naranja mx-auto lg:mx-0 rounded-full mb-6"></div>
            <p class="text-lg text-slate-300 leading-relaxed">
              Nuestro catálogo completo en PDF incluye todas las referencias,
              dimensiones y detalles de nuestra gama de suministros de
              perforación de alta resistencia. Ten la información a mano
              incluso sin conexión.
            </p>
          </div>

          <!-- Botón de Acción -->
          <div class="shrink-0">
            <a
              href="docs/Duomex_Catalogo_Suministros.pdf"
              download
              class="group inline-flex justify-center items-center px-8 py-5 text-lg font-bold rounded-xl text-white bg-naranja hover:bg-orange-600 transition-all duration-300 hover:-translate-y-1 shadow-lg hover:shadow-naranja/40">
              <svg
                class="w-7 h-7 mr-3 transition-transform duration-300 group-hover:-translate-y-1 group-hover:scale-110"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
              </svg>
              Descargar Catálogo PDF
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN CONTACTO: SPLIT-CARD SOBRE FONDO OSCURO INDUSTRIAL -->
  <section id="contacto" class="relative py-24 bg-slate-950">
    <!-- Imagen de fondo con overlay y degradado para integrarse con el footer -->
    <div class="absolute inset-0 z-0">
      <img
        src="img/con_fondo/contacto_bg.avif"
        alt="Fondo industrial"
        class="w-full h-full object-cover opacity-20 grayscale mix-blend-overlay" />
      <!-- Degradado: más transparente arriba, negro/pizarra sólido abajo para fusionarse con el footer -->
      <div
        class="absolute inset-0 bg-gradient-to-b from-slate-700/80 via-slate-800/95 to-slate-900"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Título de Sección (Ahora sobre fondo oscuro) -->
      <div class="text-center mb-12">
        <h2
          class="text-3xl md:text-4xl font-extrabold text-white tracking-tight mb-4">
          ¿Listo para empezar?
        </h2>
        <div class="w-16 h-1 bg-naranja mx-auto rounded-full mb-4"></div>
        <p class="text-slate-400 max-w-2xl mx-auto text-lg">
          Estamos a su disposición para resolver cualquier duda o gestionar
          sus pedidos de forma ágil y profesional.
        </p>
      </div>

      <!-- Contenedor Principal Unificado (Tarjeta Flotante) -->
      <div
        class="bg-white rounded-2xl shadow-2xl shadow-black/50 overflow-hidden flex flex-col lg:flex-row ring-1 ring-white/10">
        <!-- Lado Izquierdo: Información de Contacto -->
        <div
          class="relative w-full lg:w-5/12 bg-celeste-oscuro p-10 lg:p-14 text-white overflow-hidden flex flex-col justify-between">
          <!-- Círculos decorativos de fondo -->
          <div
            class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-white/5 rounded-full blur-2xl"></div>
          <div
            class="absolute bottom-0 left-0 -ml-16 -mb-16 w-48 h-48 bg-naranja/20 rounded-full blur-2xl"></div>

          <div class="relative z-10">
            <h3 class="text-2xl font-bold mb-8">Información Directa</h3>

            <!-- Bloques de Información -->
            <div class="flex items-start group">
              <div
                class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-naranja transition-colors duration-300">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
              </div>
              <div class="ml-5">
                <h4 class="text-white font-bold text-lg mb-1">
                  Atención Comercial
                </h4>
                <p class="text-slate-300 text-sm mb-2">
                  Operamos a nivel nacional e internacional.
                </p>
                <a
                  href="tel:+34633944271"
                  class="flex items-center gap-2 text-slate-300 text-sm hover:text-white transition-colors p-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                  Juanpe: +34 633 94 42 71
                </a>

                <a
                  href="tel:+34609635486"
                  class="flex items-center gap-2 text-slate-300 text-sm hover:text-white transition-colors p-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                  Cano: +34 609 63 54 86
                </a>
              </div>
            </div>
          </div>

          <!-- WhatsApp Integrado en el diseño -->
          <div class="relative z-10 mt-12 pt-8 border-t border-white/10">
            <a
              href="https://wa.me/34609635486?text=Hola,%20estoy%20interesado%20en%20sus%20suministros."
              target="_blank"
              class="flex items-center justify-center w-full px-6 py-4 bg-white/10 hover:bg-[#25D366] text-white font-bold rounded-xl transition-all duration-300 border border-white/20 hover:border-transparent group">
              <svg
                class="w-6 h-6 mr-3 fill-current transition-transform group-hover:scale-110"
                viewBox="0 0 24 24">
                <path
                  d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.513 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.713-1.455L0 24zm6.59-4.846c1.6.95 3.488 1.451 5.42 1.452 5.372 0 9.747-4.372 9.75-9.743.002-2.602-1.01-5.05-2.854-6.897-1.847-1.848-4.301-2.865-6.902-2.865-5.377 0-9.752 4.375-9.756 9.749-.002 1.99.519 3.93 1.51 5.64l-.98 3.579 3.662-.962zm9.645-6.618c-.27-.135-1.597-.788-1.845-.878-.247-.09-.427-.135-.607.135-.18.27-.697.878-.855 1.058-.158.18-.315.202-.585.067-.27-.135-1.14-.42-2.172-1.34-1.031-.92-1.727-2.056-1.93-2.325-.203-.27-.022-.416.113-.551.121-.122.27-.315.405-.473.135-.158.18-.27.27-.45.09-.18.045-.337-.022-.473-.068-.135-.607-1.463-.832-2.003-.22-.527-.44-.456-.607-.464-.158-.007-.338-.008-.518-.008-.18 0-.473.068-.72.338-.248.27-.945.923-.945 2.25s.968 2.61 1.103 2.79c.135.18 1.905 2.91 4.616 4.08.645.278 1.148.445 1.54.57.648.206 1.24.177 1.707.107.52-.078 1.597-.653 1.822-1.283.225-.63.225-1.17.157-1.283-.067-.113-.247-.18-.517-.315z" />
              </svg>
              Chat directo
            </a>
          </div>
        </div>

        <!-- Lado Derecho: Formulario Estilizado -->
        <div id="contacto" class="scroll-mt-28 w-full lg:w-7/12 p-10 lg:p-14 bg-white">
          <h3 class="text-2xl font-bold text-slate-800 mb-6">
            Envíenos un mensaje
          </h3>

          <!-- Tu formulario -->
          <form action="contacto.php" method="POST" ...>

            <!-- Formulario listo para $_POST -->
            <form action="contacto.php" method="POST" class="space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                  <label
                    for="nombre"
                    class="text-sm font-semibold text-slate-600">Nombre *</label>
                  <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    required
                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-naranja/50 focus:border-naranja outline-none transition-all duration-300 placeholder-slate-400"
                    placeholder="Ej. Juan Pérez" />
                  <div id="error-nombre" class="text-red-500 text-sm mt-1"></div>
                </div>

                <div class="space-y-2">
                  <label
                    for="telefono"
                    class="text-sm font-semibold text-slate-600">Teléfono *</label>
                  <input
                    type="tel"
                    id="telefono"
                    name="telefono"
                    required
                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-naranja/50 focus:border-naranja outline-none transition-all duration-300 placeholder-slate-400"
                    placeholder="+34 600 000 000" />
                  <div id="error-telefono" class="text-red-500 text-sm mt-1"></div>
                </div>


              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                  <label
                    for="email"
                    class="text-sm font-semibold text-slate-600">Correo Electrónico</label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-naranja/50 focus:border-naranja outline-none transition-all duration-300 placeholder-slate-400"
                    placeholder="ejemplo@correo.com" />
                  <div id="error-email" class="text-red-500 text-sm mt-1"></div>
                </div>

                <div class="space-y-2">
                  <label
                    for="empresa"
                    class="text-sm font-semibold text-slate-600">Empresa</label>
                  <input
                    type="text"
                    id="empresa"
                    name="empresa"
                    class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-naranja/50 focus:border-naranja outline-none transition-all duration-300 placeholder-slate-400"
                    placeholder="Nombre de su compañía" />
                </div>
              </div>

              <div class="space-y-2">
                <label
                  for="mensaje"
                  class="text-sm font-semibold text-slate-600">Detalles de su consulta *</label>
                <textarea
                  id="mensaje"
                  name="mensaje"
                  rows="4"
                  required
                  class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-naranja/50 focus:border-naranja outline-none transition-all duration-300 placeholder-slate-400 resize-none"
                  placeholder="Especifique el material, cantidades o dudas técnicas..."></textarea>
                <div id="error-mensaje" class="text-red-500 text-sm mt-1"></div>
              </div>

              <div class="flex items-start pt-2">
                <div class="flex items-center h-5">
                  <input
                    id="privacidad"
                    name="privacidad"
                    type="checkbox"
                    required
                    class="w-5 h-5 text-naranja bg-slate-50 border-slate-300 rounded focus:ring-naranja/50 cursor-pointer" />
                </div>
                <div class="ml-3 text-sm">
                  <label
                    for="privacidad"
                    class="font-medium text-slate-600 cursor-pointer">Acepto la
                    <a
                      href="#"
                      class="text-celeste-oscuro hover:text-naranja underline transition-colors">política de privacidad</a>
                    y el tratamiento de mis datos.</label>
                </div>
              </div>

              <button
                type="submit"
                class="w-full group inline-flex justify-center items-center px-6 py-4 text-lg font-bold rounded-xl text-white bg-celeste-oscuro hover:bg-slate-800 transition-all duration-300 mt-4 shadow-lg hover:shadow-xl cursor-pointer">
                Enviar Solicitud
                <svg
                  class="w-5 h-5 ml-3 transition-transform duration-300 group-hover:translate-x-2"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </button>
            </form>
        </div>
      </div>
    </div>
  </section>

  <!-- PIE DE PÁGINA CORPORATIVO -->
  <footer class="bg-slate-950 pt-16 pb-8 border-t border-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Grid Superior de Enlaces e Información -->
      <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
        <!-- Columna 1: Marca y Descripción -->
        <div class="lg:col-span-1">
          <span class="text-2xl font-black text-white tracking-tighter">DUOMEX<span class="text-naranja">.</span></span>
          <p class="mt-4 text-slate-400 text-sm leading-relaxed pr-4">
            Suministros de perforación de alta resistencia para la industria.
            Calidad, precisión y durabilidad en cada pieza.
          </p>
        </div>

        <!-- Columna 2: Navegación Rápida -->
        <div>
          <h4
            class="text-white font-bold mb-4 tracking-wide uppercase text-xs">
            Navegación
          </h4>
          <ul class="space-y-2.5 text-sm">
            <li>
              <a
                href="#inicio"
                class="text-slate-400 hover:text-naranja transition-colors">Inicio</a>
            </li>
            <li>
              <a
                href="#productos"
                class="text-slate-400 hover:text-naranja transition-colors">Productos y Servicios</a>
            </li>
            <li>
              <a
                href="#descarga"
                class="text-slate-400 hover:text-naranja transition-colors">Catálogo Técnico</a>
            </li>
            <li>
              <a
                href="#contacto"
                class="text-slate-400 hover:text-naranja transition-colors">Solicitar Presupuesto</a>
            </li>
          </ul>
        </div>

        <!-- Columna 3: Información Legal -->
        <div>
          <h4
            class="text-white font-bold mb-4 tracking-wide uppercase text-xs">
            Legal
          </h4>
          <ul class="space-y-2.5 text-sm">
            <li>
              <a
                href="aviso-legal.php"
                class="text-slate-400 hover:text-naranja transition-colors">Aviso Legal</a>
            </li>
            <li>
              <a
                href="privacidad.php"
                class="text-slate-400 hover:text-naranja transition-colors">Política de Privacidad</a>
            </li>
            <li>
              <a
                href="cookies.php"
                class="text-slate-400 hover:text-naranja transition-colors">Política de Cookies</a>
            </li>
            <li>
              <a
                href="condiciones.php"
                class="text-slate-400 hover:text-naranja transition-colors">Términos y Condiciones</a>
            </li>
          </ul>
        </div>

        <!-- Columna 4: Redes Sociales / B2B -->
        <div>
          <h4
            class="text-white font-bold mb-4 tracking-wide uppercase text-xs">
            Conecte con Nosotros
          </h4>
          <div class="flex space-x-3">
            <!-- LinkedIn (Clave en B2B Industrial) -->
            <a
              href="#"
              target="_blank"
              class="w-10 h-10 bg-slate-900 rounded-lg flex items-center justify-center text-slate-400 hover:bg-[#0A66C2] hover:text-white transition-all duration-300">
              <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                <path
                  d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
              </svg>
            </a>
            <!-- Facebook -->
            <a
              href="#"
              target="_blank"
              class="w-10 h-10 bg-slate-900 rounded-lg flex items-center justify-center text-slate-400 hover:bg-[#1877F2] hover:text-white transition-all duration-300">
              <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                <path
                  d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
              </svg>
            </a>

            <!-- Instagram -->
            <a
              href="#"
              target="_blank"
              class="w-10 h-10 bg-slate-900 rounded-lg flex items-center justify-center text-slate-400 hover:bg-[#E1306C] hover:text-white transition-all duration-300">
              <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                <path
                  d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0 3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Barra Inferior de Copyright -->
      <div
        class="pt-8 border-t border-slate-900 flex flex-col md:flex-row justify-between items-center gap-4">
        <p class="text-sm text-slate-500 text-center md:text-left">
          &copy; 2026 DUOMEX Suministros de Perforación. Todos los derechos
          reservados.
        </p>
        <!-- Firma sutil y opcional del desarrollador -->
        <p class="text-xs text-slate-700">
          Diseñado y desarrollado a medida.
        </p>
      </div>
    </div>
  </footer>

  <!-- Botón flotante -->
  <button
    id="back-to-top"
    class="fixed bottom-6 right-6 z-50 p-3 bg-naranja text-white rounded-full shadow-lg opacity-0 transition-opacity duration-300 pointer-events-none cursor-pointer"
    onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">
    <svg
      class="w-6 h-6"
      fill="none"
      stroke="currentColor"
      viewBox="0 0 24 24">
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
    </svg>
  </button>
  <script>
    document.querySelector('form').addEventListener('submit', async function(e) {
      e.preventDefault(); // Evita que la página recargue

      // Limpiar errores previos
      document.querySelectorAll('[id^="error-"]').forEach(el => el.textContent = '');

      const formData = new FormData(this);

      const response = await fetch('contacto.php', {
        method: 'POST',
        body: formData
      });

      const result = await response.json();

      if (result.status === 'success') {
        Swal.fire({
          icon: 'success',
          title: '¡Enviado!',
          text: 'Tu mensaje se ha enviado correctamente.',
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });
        this.reset(); // Limpia el formulario
      } else {
        // Si hay errores de validación, los ponemos debajo de cada campo
        if (result.errors) {
          for (const [key, message] of Object.entries(result.errors)) {
            document.getElementById(`error-${key}`).textContent = message;
          }
        }
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Revisa los campos marcados.'
        });
      }
    });
  </script>
</body>

<!-- Script sencillo para el menú móvil -->
<script>
  const btn = document.getElementById("mobile-menu-button");
  const menu = document.getElementById("mobile-menu");
  const iconPath = document.getElementById("icon-path");
  const menuLinks = document.querySelectorAll(".menu-link");

  // Función para alternar el menú
  function toggleMenu() {
    const isClosed = menu.classList.contains("grid-rows-[0fr]");

    if (isClosed) {
      menu.classList.replace("grid-rows-[0fr]", "grid-rows-[1fr]");
      iconPath.setAttribute("d", "M6 18L18 6M6 6l12 12"); // X
    } else {
      menu.classList.replace("grid-rows-[1fr]", "grid-rows-[0fr]");
      iconPath.setAttribute("d", "M4 6h16M4 12h16m-7 6h7"); // Hamburguesa
    }
  }

  // Evento para el botón
  btn.addEventListener("click", toggleMenu);

  // Evento para cada enlace (cierra el menú al hacer clic)
  menuLinks.forEach((link) => {
    link.addEventListener("click", () => {
      if (menu.classList.contains("grid-rows-[1fr]")) {
        toggleMenu();
      }
    });
  });

  // Script para mostrar el botón al hacer scroll
  window.addEventListener("scroll", () => {
    const btnTop = document.getElementById("back-to-top");
    if (window.scrollY > 300) {
      btnTop.classList.remove("opacity-0", "pointer-events-none");
    } else {
      btnTop.classList.add("opacity-0", "pointer-events-none");
    }
  });
</script>

</html>