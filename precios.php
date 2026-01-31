<?php
$page_title = "Precios | TransiQ - Planes de Abonamiento";
$page_description = "Planes de precios flexibles para TransiQ. Desde MICRO hasta ENTERPRISE, elige el plan que mejor se adapte a tu volumen de CMR.";
$current_page = "precios";

include 'includes/header.php';
?>

<!-- Pricing Hero -->
<section class="relative pt-32 pb-16 lg:pt-40 lg:pb-20">
    <div class="absolute inset-0 bg-gradient-to-br from-dark-900 via-dark-800 to-primary/10"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span
            class="inline-block px-4 py-1.5 text-xs font-semibold text-accent uppercase tracking-wider bg-accent/10 rounded-full mb-4">
            Precios transparentes
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">
            Planes de <span class="gradient-text">Abonamiento</span>
        </h1>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto">
            Elige el plan que mejor se adapte a tu volumen de trabajo. Todos incluyen rollover de CMR no utilizados.
        </p>
    </div>
</section>

<!-- Pricing Cards -->
<section class="relative py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- MICRO Plan -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 card-glow flex flex-col">
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-300 mb-2">MICRO</h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-bold text-white">€19</span>
                        <span class="text-gray-500 ml-2">/mes</span>
                    </div>
                </div>

                <ul class="space-y-4 mb-8 flex-grow">
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-file-alt text-accent mr-3"></i>
                        <span><strong>5</strong> CMR / mes</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-sync-alt text-accent mr-3"></i>
                        <span>Rollover: <strong>3 meses</strong></span>
                    </li>
                    <li class="flex items-center text-gray-400 text-sm">
                        <i class="fas fa-database text-gray-600 mr-3"></i>
                        <span>Máximo acumulado: 15</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span>Extracción IA</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span>Preview y edición</span>
                    </li>
                </ul>

                <a href="#"
                    class="block w-full px-6 py-3 text-center text-sm font-medium text-white border border-white/20 rounded-xl hover:bg-white/5 transition-all">
                    Empezar
                </a>
            </div>

            <!-- SMALL Plan -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 card-glow flex flex-col">
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-300 mb-2">SMALL</h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-bold text-white">€39</span>
                        <span class="text-gray-500 ml-2">/mes</span>
                    </div>
                </div>

                <ul class="space-y-4 mb-8 flex-grow">
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-file-alt text-accent mr-3"></i>
                        <span><strong>15</strong> CMR / mes</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-sync-alt text-accent mr-3"></i>
                        <span>Rollover: <strong>6 meses</strong></span>
                    </li>
                    <li class="flex items-center text-gray-400 text-sm">
                        <i class="fas fa-database text-gray-600 mr-3"></i>
                        <span>Máximo acumulado: 90</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span>Extracción IA</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span>Preview y edición</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span>Archivo histórico</span>
                    </li>
                </ul>

                <a href="#"
                    class="block w-full px-6 py-3 text-center text-sm font-medium text-white border border-white/20 rounded-xl hover:bg-white/5 transition-all">
                    Elegir plan
                </a>
            </div>

            <!-- PRO Plan (Featured) -->
            <div
                class="relative bg-gradient-to-b from-primary/20 to-dark-700 rounded-2xl p-6 lg:p-8 border border-accent/30 card-glow flex flex-col">
                <div
                    class="absolute -top-3 left-1/2 -translate-x-1/2 px-4 py-1 bg-accent text-xs font-semibold text-white rounded-full">
                    Más popular
                </div>

                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-accent mb-2">PRO</h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-bold text-white">€89</span>
                        <span class="text-gray-500 ml-2">/mes</span>
                    </div>
                </div>

                <ul class="space-y-4 mb-8 flex-grow">
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-file-alt text-accent mr-3"></i>
                        <span><strong>40</strong> CMR / mes</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-sync-alt text-accent mr-3"></i>
                        <span>Rollover: <strong>12 meses</strong></span>
                    </li>
                    <li class="flex items-center text-gray-400 text-sm">
                        <i class="fas fa-database text-gray-600 mr-3"></i>
                        <span>Máximo acumulado: 480</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span>Extracción IA avanzada</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span>Preview y edición</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span>Archivo histórico</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span>Multi-CMR por pedido</span>
                    </li>
                </ul>

                <a href="#"
                    class="block w-full px-6 py-3 text-center text-sm font-semibold text-white btn-gradient rounded-xl">
                    Elegir plan
                </a>
            </div>

            <!-- ENTERPRISE Plan -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 card-glow flex flex-col">
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-300 mb-2">ENTERPRISE</h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-bold text-white">€199</span>
                        <span class="text-gray-500 ml-2">/mes</span>
                    </div>
                </div>

                <ul class="space-y-4 mb-8 flex-grow">
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-file-alt text-accent mr-3"></i>
                        <span><strong>150</strong> CMR / mes</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-sync-alt text-accent mr-3"></i>
                        <span>Rollover: <strong>12 meses</strong></span>
                    </li>
                    <li class="flex items-center text-gray-400 text-sm">
                        <i class="fas fa-database text-gray-600 mr-3"></i>
                        <span>Máximo acumulado: 950</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span>Todas las funciones PRO</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span>Soporte prioritario</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span>Onboarding dedicado</span>
                    </li>
                </ul>

                <a href="contacto.php"
                    class="block w-full px-6 py-3 text-center text-sm font-medium text-white border border-white/20 rounded-xl hover:bg-white/5 transition-all">
                    Contactar
                </a>
            </div>

        </div>

        <!-- Extra Credits -->
        <div class="mt-12 bg-dark-700/50 rounded-2xl p-8 border border-white/5">
            <div class="max-w-3xl mx-auto text-center">
                <h3 class="text-xl font-semibold mb-4">¿Necesitas más?</h3>
                <p class="text-gray-400 mb-6">
                    Puedes adquirir créditos adicionales en cualquier momento sin cambiar de plan.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-6">
                    <div class="bg-dark-800 rounded-xl px-6 py-4 border border-white/5">
                        <div class="text-2xl font-bold text-accent mb-1">€1,50</div>
                        <div class="text-sm text-gray-500">por CMR extra</div>
                    </div>
                    <div class="bg-dark-800 rounded-xl px-6 py-4 border border-white/5">
                        <div class="text-2xl font-bold text-accent mb-1">€0,80</div>
                        <div class="text-sm text-gray-500">por Proforma extra</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ or CTA -->
<section class="relative py-16 lg:py-24 bg-dark-800/50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl sm:text-3xl font-bold mb-6">
            ¿Tienes dudas sobre qué plan elegir?
        </h2>
        <p class="text-lg text-gray-400 mb-8">
            Contáctanos y te ayudaremos a encontrar el plan perfecto para tu volumen de trabajo.
        </p>
        <a href="contacto.php"
            class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white btn-gradient rounded-xl">
            <i class="fas fa-comments mr-2"></i>
            Hablar con nosotros
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>