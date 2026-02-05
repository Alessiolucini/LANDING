<?php
$current_page = "inicio";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center pt-20 lg:pt-0 overflow-hidden">
    <!-- Dot Shader Background -->
    <div id="dot-shader-bg" class="absolute inset-0 z-0"></div>
    <!-- Fallback gradient (shows while shader loads) -->
    <div class="absolute inset-0 bg-gradient-to-br from-dark-900 via-dark-800 to-primary/20 z-0"></div>
    <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-accent/5 rounded-full blur-3xl z-0">
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20 z-10">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Text Content -->
            <div class="space-y-8">
                <div class="space-y-6">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight">
                        <?php echo t('hero_title_1'); ?>
                        <span class="gradient-text"><?php echo t('hero_title_2'); ?></span>
                    </h1>
                    <p class="text-lg sm:text-xl text-gray-400 leading-relaxed max-w-xl">
                        <?php echo t('hero_desc_1'); ?>
                        <span class="text-white font-medium"><?php echo t('hero_desc_2'); ?></span>
                        <?php echo t('hero_desc_3'); ?>
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="https://app.transiq.net/register"
                        class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white btn-gradient rounded-xl">
                        <i class="fas fa-rocket mr-2"></i>
                        <?php echo t('hero_btn_register'); ?>
                    </a>
                    <a href="contacto.php"
                        class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-white border border-white/20 rounded-xl hover:bg-white/5 transition-all">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <?php echo t('hero_btn_demo'); ?>
                    </a>
                </div>

                <!-- Trust indicators -->
                <div class="flex items-center space-x-6 pt-4">
                    <div class="flex items-center space-x-2 text-sm text-gray-500">
                        <i class="fas fa-shield-alt text-accent"></i>
                        <span><?php echo t('hero_trust_secure'); ?></span>
                    </div>
                    <div class="flex items-center space-x-2 text-sm text-gray-500">
                        <i class="fas fa-bolt text-accent"></i>
                        <span><?php echo t('hero_trust_fast'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Hero Image -->
            <div class="relative">
                <div
                    class="absolute -inset-4 bg-gradient-to-r from-primary/30 to-accent/30 rounded-2xl blur-2xl opacity-50">
                </div>
                <img src="assets/images/hero_glass.png" alt="TransiQ Dashboard - AI Interface"
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
                <?php echo t('how_badge'); ?>
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                <?php echo t('how_title_1'); ?> <span class="gradient-text"><?php echo t('how_title_2'); ?></span>?
            </h2>
            <p class="text-lg text-gray-400">
                <?php echo t('how_subtitle'); ?>
            </p>
        </div>

        <!-- Steps -->
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="relative">
                <div
                    class="bg-gradient-to-br from-white/10 to-transparent backdrop-blur-md rounded-2xl p-8 border border-white/20 shadow-[0_0_15px_rgba(236,72,153,0.15)] hover:shadow-[0_0_25px_rgba(236,72,153,0.4)] hover:border-accent/60 transition-all duration-300 h-full group relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-accent/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-primary to-accent rounded-xl flex items-center justify-center mb-6">
                            <i class="fas fa-cloud-upload-alt text-2xl text-white"></i>
                        </div>
                        <div
                            class="absolute -top-3 -right-3 w-8 h-8 bg-accent rounded-full flex items-center justify-center text-sm font-bold text-white">
                            1</div>
                        <h3 class="text-xl font-semibold mb-3"><?php echo t('how_step1_title'); ?></h3>
                        <p class="text-gray-400"><?php echo t('how_step1_desc'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative">
                <div
                    class="bg-gradient-to-br from-white/10 to-transparent backdrop-blur-md rounded-2xl p-8 border border-white/20 shadow-[0_0_15px_rgba(236,72,153,0.15)] hover:shadow-[0_0_25px_rgba(236,72,153,0.4)] hover:border-accent/60 transition-all duration-300 h-full group relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-accent/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-primary to-accent rounded-xl flex items-center justify-center mb-6">
                            <i class="fas fa-brain text-2xl text-white"></i>
                        </div>
                        <div
                            class="absolute -top-3 -right-3 w-8 h-8 bg-accent rounded-full flex items-center justify-center text-sm font-bold text-white">
                            2</div>
                        <h3 class="text-xl font-semibold mb-3"><?php echo t('how_step2_title'); ?></h3>
                        <p class="text-gray-400"><?php echo t('how_step2_desc'); ?></p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative">
                    <div
                        class="bg-gradient-to-br from-white/10 to-transparent backdrop-blur-md rounded-2xl p-8 border border-white/20 shadow-[0_0_15px_rgba(236,72,153,0.15)] hover:shadow-[0_0_25px_rgba(236,72,153,0.4)] hover:border-accent/60 transition-all duration-300 h-full group relative overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-accent/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div class="relative z-10">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-primary to-accent rounded-xl flex items-center justify-center mb-6">
                                <i class="fas fa-file-pdf text-2xl text-white"></i>
                            </div>
                            <div
                                class="absolute -top-3 -right-3 w-8 h-8 bg-accent rounded-full flex items-center justify-center text-sm font-bold text-white">
                                3</div>
                            <h3 class="text-xl font-semibold mb-3"><?php echo t('how_step3_title'); ?></h3>
                            <p class="text-gray-400"><?php echo t('how_step3_desc'); ?></p>
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
                        <?php echo t('why_badge'); ?>
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                        <?php echo t('why_title_1'); ?> <span
                            class="gradient-text"><?php echo t('why_title_2'); ?></span>?
                    </h2>
                </div>

                <!-- Benefits List -->
                <ul class="space-y-4">
                    <li class="flex items-start space-x-4">
                        <div
                            class="flex-shrink-0 w-6 h-6 bg-accent/20 rounded-full flex items-center justify-center mt-0.5">
                            <i class="fas fa-check text-accent text-xs"></i>
                        </div>
                        <span class="text-lg text-gray-300"><?php echo t('why_benefit_1'); ?></span>
                    </li>
                    <li class="flex items-start space-x-4">
                        <div
                            class="flex-shrink-0 w-6 h-6 bg-accent/20 rounded-full flex items-center justify-center mt-0.5">
                            <i class="fas fa-check text-accent text-xs"></i>
                        </div>
                        <span class="text-lg text-gray-300"><?php echo t('why_benefit_2'); ?></span>
                    </li>
                    <li class="flex items-start space-x-4">
                        <div
                            class="flex-shrink-0 w-6 h-6 bg-accent/20 rounded-full flex items-center justify-center mt-0.5">
                            <i class="fas fa-check text-accent text-xs"></i>
                        </div>
                        <span class="text-lg text-gray-300"><?php echo t('why_benefit_3'); ?></span>
                    </li>
                    <li class="flex items-start space-x-4">
                        <div
                            class="flex-shrink-0 w-6 h-6 bg-accent/20 rounded-full flex items-center justify-center mt-0.5">
                            <i class="fas fa-check text-accent text-xs"></i>
                        </div>
                        <span class="text-lg text-gray-300"><?php echo t('why_benefit_4'); ?></span>
                    </li>
                </ul>

                <!-- KPI Blocks -->
                <div class="grid grid-cols-3 gap-4 pt-6">
                    <div class="bg-dark-700 rounded-xl p-4 text-center border border-white/5">
                        <div class="text-2xl sm:text-3xl font-bold gradient-text mb-1">
                            <?php echo t('why_kpi_1_value'); ?>
                        </div>
                        <div class="text-xs sm:text-sm text-gray-500"><?php echo t('why_kpi_1_label'); ?></div>
                    </div>
                    <div class="bg-dark-700 rounded-xl p-4 text-center border border-white/5">
                        <div class="text-2xl sm:text-3xl font-bold gradient-text mb-1">
                            <?php echo t('why_kpi_2_value'); ?>
                        </div>
                        <div class="text-xs sm:text-sm text-gray-500"><?php echo t('why_kpi_2_label'); ?></div>
                    </div>
                    <div class="bg-dark-700 rounded-xl p-4 text-center border border-white/5">
                        <div class="text-2xl sm:text-3xl font-bold gradient-text mb-1">
                            <?php echo t('why_kpi_3_value'); ?>
                        </div>
                        <div class="text-xs sm:text-sm text-gray-500"><?php echo t('why_kpi_3_label'); ?></div>
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
                <?php echo t('features_badge'); ?>
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                <?php echo t('features_title_1'); ?> <span
                    class="gradient-text"><?php echo t('features_title_2'); ?></span>
            </h2>
            <p class="text-lg text-gray-400">
                <?php echo t('features_subtitle'); ?>
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Feature 1 -->
            <div class="bg-dark-700 rounded-2xl p-6 card-glow border border-white/5">
                <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-magic text-xl text-accent"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2"><?php echo t('feature_1_title'); ?></h3>
                <p class="text-sm text-gray-400"><?php echo t('feature_1_desc'); ?></p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-dark-700 rounded-2xl p-6 card-glow border border-white/5">
                <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-eye text-xl text-accent"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2"><?php echo t('feature_2_title'); ?></h3>
                <p class="text-sm text-gray-400"><?php echo t('feature_2_desc'); ?></p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-dark-700 rounded-2xl p-6 card-glow border border-white/5">
                <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-layer-group text-xl text-accent"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2"><?php echo t('feature_3_title'); ?></h3>
                <p class="text-sm text-gray-400"><?php echo t('feature_3_desc'); ?></p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-dark-700 rounded-2xl p-6 card-glow border border-white/5">
                <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-sort text-xl text-accent"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2"><?php echo t('feature_4_title'); ?></h3>
                <p class="text-sm text-gray-400"><?php echo t('feature_4_desc'); ?></p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-dark-700 rounded-2xl p-6 card-glow border border-white/5">
                <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-archive text-xl text-accent"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2"><?php echo t('feature_5_title'); ?></h3>
                <p class="text-sm text-gray-400"><?php echo t('feature_5_desc'); ?></p>
            </div>

            <!-- Feature 6 -->
            <div class="bg-dark-700 rounded-2xl p-6 card-glow border border-white/5">
                <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-download text-xl text-accent"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2"><?php echo t('feature_6_title'); ?></h3>
                <p class="text-sm text-gray-400"><?php echo t('feature_6_desc'); ?></p>
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
            <?php echo t('cta_title_1'); ?>
            <span class="gradient-text"><?php echo t('cta_title_2'); ?></span>
        </h2>
        <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto">
            <?php echo t('cta_subtitle'); ?>
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://app.transiq.net/register"
                class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white btn-gradient rounded-xl">
                <i class="fas fa-rocket mr-2"></i>
                <?php echo t('cta_btn_register'); ?>
            </a>
            <a href="contacto.php"
                class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-white border border-white/20 rounded-xl hover:bg-white/5 transition-all">
                <i class="fas fa-envelope mr-2"></i>
                <?php echo t('cta_btn_contact'); ?>
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>