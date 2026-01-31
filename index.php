<?php
$page_title = "TransiQ | CMR automáticos con IA";
$page_description = "TransiQ automatiza la creación de documentos CMR en el sector automotriz usando IA. De proforma a CMR correcto en segundos.";
$current_page = "inicio";

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center pt-20 lg:pt-0 overflow-hidden">
    <!-- Background gradient -->
    <div class="absolute inset-0 bg-gradient-to-br from-dark-900 via-dark-800 to-primary/20"></div>
    <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-accent/5 rounded-full blur-3xl">
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Text Content -->
            <div class="space-y-8">
                <div class="space-y-6">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight">
                        CMR correctos en segundos.
                        <span class="gradient-text">Sin errores. Sin esperas.</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-gray-400 leading-relaxed max-w-xl">
                        Cada día recibimos CMR mal rellenados y tenemos que pedir que esperen.
                        <span class="text-white font-medium">TransiQ lo automatiza:</span> subes la proforma y generas
                        el CMR correcto.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#"
                        class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white btn-gradient rounded-xl">
                        <i class="fas fa-rocket mr-2"></i>
                        Registrarse
                    </a>
                    <a href="contacto.php"
                        class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-white border border-white/20 rounded-xl hover:bg-white/5 transition-all">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        Solicitar demo
                    </a>
                </div>

                <!-- Trust indicators -->
                <div class="flex items-center space-x-6 pt-4">
                    <div class="flex items-center space-x-2 text-sm text-gray-500">
                        <i class="fas fa-shield-alt text-accent"></i>
                        <span>Datos seguros</span>
                    </div>
                    <div class="flex items-center space-x-2 text-sm text-gray-500">
                        <i class="fas fa-bolt text-accent"></i>
                        <span>Resultados en segundos</span>
                    </div>
                </div>
            </div>

            <!-- Hero Image -->
            <div class="relative">
                <div
                    class="absolute -inset-4 bg-gradient-to-r from-primary/30 to-accent/30 rounded-2xl blur-2xl opacity-50">
                </div>
                <img src="assets/images/hero_mockup.png" alt="TransiQ Dashboard - CMR Preview"
                    class="relative w-full rounded-xl shadow-2xl border border-white/10">
            </div>
        </div>
    </div>
</section>

<!-- Cómo Funciona Section -->
<section id="como-funciona" class="relative py-20 lg:py-32 bg-dark-800/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span
                class="inline-block px-4 py-1.5 text-xs font-semibold text-accent uppercase tracking-wider bg-accent/10 rounded-full mb-4">
                Proceso simple
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                ¿Cómo <span class="gradient-text">funciona</span>?
            </h2>
            <p class="text-lg text-gray-400">
                En tres sencillos pasos, tu CMR estará listo para enviar.
            </p>
        </div>

        <!-- Steps -->
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="relative">
                <div class="bg-dark-700 rounded-2xl p-8 card-glow border border-white/5 h-full">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-primary to-accent rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-cloud-upload-alt text-2xl text-white"></i>
                    </div>
                    <div
                        class="absolute -top-3 -right-3 w-8 h-8 bg-accent rounded-full flex items-center justify-center text-sm font-bold text-white">
                        1</div>
                    <h3 class="text-xl font-semibold mb-3">Subes la proforma</h3>
                    <p class="text-gray-400">Carga tu documento PDF o imagen de la proforma. El sistema acepta múltiples
                        formatos.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative">
                <div class="bg-dark-700 rounded-2xl p-8 card-glow border border-white/5 h-full">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-primary to-accent rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-brain text-2xl text-white"></i>
                    </div>
                    <div
                        class="absolute -top-3 -right-3 w-8 h-8 bg-accent rounded-full flex items-center justify-center text-sm font-bold text-white">
                        2</div>
                    <h3 class="text-xl font-semibold mb-3">IA extrae los datos</h3>
                    <p class="text-gray-400">Nuestra IA identifica y extrae automáticamente proveedor, cliente, VIN,
                        modelos y más.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative">
                <div class="bg-dark-700 rounded-2xl p-8 card-glow border border-white/5 h-full">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-primary to-accent rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-file-pdf text-2xl text-white"></i>
                    </div>
                    <div
                        class="absolute -top-3 -right-3 w-8 h-8 bg-accent rounded-full flex items-center justify-center text-sm font-bold text-white">
                        3</div>
                    <h3 class="text-xl font-semibold mb-3">Generas el CMR</h3>
                    <p class="text-gray-400">Descarga el CMR en PDF listo para enviar o compártelo directamente desde la
                        plataforma.</p>
                </div>
            </div>
        </div>

        <!-- Workflow Image -->
        <div class="mt-16">
            <img src="assets/images/workflow_diagram.png" alt="Flujo de trabajo TransiQ"
                class="w-full max-w-4xl mx-auto rounded-xl">
        </div>
    </div>
</section>

<!-- Por qué TransiQ Section -->
<section id="por-que-transiq" class="relative py-20 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Image -->
            <div class="order-2 lg:order-1">
                <div class="relative">
                    <div
                        class="absolute -inset-4 bg-gradient-to-r from-red-500/20 to-accent/20 rounded-2xl blur-2xl opacity-50">
                    </div>
                    <img src="assets/images/problem_solution.png" alt="Antes y después con TransiQ"
                        class="relative w-full rounded-xl shadow-2xl border border-white/10">
                </div>
            </div>

            <!-- Content -->
            <div class="order-1 lg:order-2 space-y-8">
                <div>
                    <span
                        class="inline-block px-4 py-1.5 text-xs font-semibold text-accent uppercase tracking-wider bg-accent/10 rounded-full mb-4">
                        La diferencia
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                        ¿Por qué <span class="gradient-text">TransiQ</span>?
                    </h2>
                </div>

                <!-- Benefits List -->
                <ul class="space-y-4">
                    <li class="flex items-start space-x-4">
                        <div
                            class="flex-shrink-0 w-6 h-6 bg-accent/20 rounded-full flex items-center justify-center mt-0.5">
                            <i class="fas fa-check text-accent text-xs"></i>
                        </div>
                        <span class="text-lg text-gray-300">Evita errores diarios en CMR</span>
                    </li>
                    <li class="flex items-start space-x-4">
                        <div
                            class="flex-shrink-0 w-6 h-6 bg-accent/20 rounded-full flex items-center justify-center mt-0.5">
                            <i class="fas fa-check text-accent text-xs"></i>
                        </div>
                        <span class="text-lg text-gray-300">Reduce tiempos de corrección y esperas</span>
                    </li>
                    <li class="flex items-start space-x-4">
                        <div
                            class="flex-shrink-0 w-6 h-6 bg-accent/20 rounded-full flex items-center justify-center mt-0.5">
                            <i class="fas fa-check text-accent text-xs"></i>
                        </div>
                        <span class="text-lg text-gray-300">Datos en la posición correcta del CMR</span>
                    </li>
                    <li class="flex items-start space-x-4">
                        <div
                            class="flex-shrink-0 w-6 h-6 bg-accent/20 rounded-full flex items-center justify-center mt-0.5">
                            <i class="fas fa-check text-accent text-xs"></i>
                        </div>
                        <span class="text-lg text-gray-300">Proceso automático + revisión antes de generar</span>
                    </li>
                </ul>

                <!-- KPI Blocks -->
                <div class="grid grid-cols-3 gap-4 pt-6">
                    <div class="bg-dark-700 rounded-xl p-4 text-center border border-white/5">
                        <div class="text-2xl sm:text-3xl font-bold gradient-text mb-1">&lt; 30s</div>
                        <div class="text-xs sm:text-sm text-gray-500">CMR generado</div>
                    </div>
                    <div class="bg-dark-700 rounded-xl p-4 text-center border border-white/5">
                        <div class="text-2xl sm:text-3xl font-bold gradient-text mb-1">-80%</div>
                        <div class="text-xs sm:text-sm text-gray-500">Errores</div>
                    </div>
                    <div class="bg-dark-700 rounded-xl p-4 text-center border border-white/5">
                        <div class="text-2xl sm:text-3xl font-bold gradient-text mb-1">-70%</div>
                        <div class="text-xs sm:text-sm text-gray-500">Tiempo admin</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="relative py-20 lg:py-32 bg-dark-800/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span
                class="inline-block px-4 py-1.5 text-xs font-semibold text-accent uppercase tracking-wider bg-accent/10 rounded-full mb-4">
                Funcionalidades
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                Todo lo que <span class="gradient-text">necesitas</span>
            </h2>
            <p class="text-lg text-gray-400">
                Herramientas diseñadas para optimizar tu flujo de trabajo documental.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Feature 1 -->
            <div class="bg-dark-700 rounded-2xl p-6 card-glow border border-white/5">
                <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-magic text-xl text-accent"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Extracción automática</h3>
                <p class="text-sm text-gray-400">IA que extrae datos de proformas: proveedor, cliente, VIN, modelos.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-dark-700 rounded-2xl p-6 card-glow border border-white/5">
                <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-eye text-xl text-accent"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Preview antes de generar</h3>
                <p class="text-sm text-gray-400">Revisa y edita los datos extraídos antes de crear el documento final.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-dark-700 rounded-2xl p-6 card-glow border border-white/5">
                <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-layer-group text-xl text-accent"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Multi-CMR por pedido</h3>
                <p class="text-sm text-gray-400">Genera múltiples CMR desde un solo pedido con muchos vehículos.</p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-dark-700 rounded-2xl p-6 card-glow border border-white/5">
                <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-sort text-xl text-accent"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Reorganiza vehículos</h3>
                <p class="text-sm text-gray-400">Ordena y agrupa los vehículos antes de generar cada CMR.</p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-dark-700 rounded-2xl p-6 card-glow border border-white/5">
                <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-archive text-xl text-accent"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Archivo de documentos</h3>
                <p class="text-sm text-gray-400">Accede a tu historial completo de CMR generados en cualquier momento.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="bg-dark-700 rounded-2xl p-6 card-glow border border-white/5">
                <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-download text-xl text-accent"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">PDF / Descarga / Envío</h3>
                <p class="text-sm text-gray-400">Descarga en PDF o envía directamente el CMR desde la plataforma.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="relative py-20 lg:py-32 overflow-hidden">
    <!-- Background image -->
    <div class="absolute inset-0">
        <img src="assets/images/cta_background.png" alt="" class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-dark-900 via-dark-900/90 to-dark-900"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
            Deja de corregir CMR cada día.
            <span class="gradient-text">Automatiza tu flujo hoy.</span>
        </h2>
        <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto">
            Únete a las empresas que ya generan CMR sin errores y sin esperas.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#"
                class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white btn-gradient rounded-xl">
                <i class="fas fa-rocket mr-2"></i>
                Registrarse ahora
            </a>
            <a href="contacto.php"
                class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-white border border-white/20 rounded-xl hover:bg-white/5 transition-all">
                <i class="fas fa-envelope mr-2"></i>
                Contactar
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>