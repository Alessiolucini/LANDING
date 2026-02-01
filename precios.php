<?php
$current_page = "precios";
include 'includes/header.php';
?>

<!-- Pricing Hero -->
<section class="relative pt-32 pb-16 lg:pt-40 lg:pb-20">
    <div class="absolute inset-0 bg-gradient-to-br from-dark-900 via-dark-800 to-primary/10"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span
            class="inline-block px-4 py-1.5 text-xs font-semibold text-accent uppercase tracking-wider bg-accent/10 rounded-full mb-4">
            <?php echo t('pricing_badge'); ?>
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">
            <?php echo t('pricing_title_1'); ?> <span class="gradient-text"><?php echo t('pricing_title_2'); ?></span>
        </h1>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto">
            <?php echo t('pricing_subtitle'); ?>
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
                        <span class="text-gray-500 ml-2"><?php echo t('pricing_per_month'); ?></span>
                    </div>
                </div>

                <ul class="space-y-4 mb-8 flex-grow">
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-file-alt text-accent mr-3"></i>
                        <span><strong>5</strong> <?php echo t('pricing_cmr_month'); ?></span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-sync-alt text-accent mr-3"></i>
                        <span><?php echo t('pricing_rollover'); ?> <strong>3
                                <?php echo t('pricing_months'); ?></strong></span>
                    </li>
                    <li class="flex items-center text-gray-400 text-sm">
                        <i class="fas fa-database text-gray-600 mr-3"></i>
                        <span><?php echo t('pricing_max_accumulated'); ?> 15</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span><?php echo t('pricing_ai_extraction'); ?></span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span><?php echo t('pricing_preview'); ?></span>
                    </li>
                </ul>

                <a href="#"
                    class="block w-full px-6 py-3 text-center text-sm font-medium text-white border border-white/20 rounded-xl hover:bg-white/5 transition-all">
                    <?php echo t('pricing_btn_start'); ?>
                </a>
            </div>

            <!-- SMALL Plan -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 card-glow flex flex-col">
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-300 mb-2">SMALL</h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-bold text-white">€39</span>
                        <span class="text-gray-500 ml-2"><?php echo t('pricing_per_month'); ?></span>
                    </div>
                </div>

                <ul class="space-y-4 mb-8 flex-grow">
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-file-alt text-accent mr-3"></i>
                        <span><strong>15</strong> <?php echo t('pricing_cmr_month'); ?></span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-sync-alt text-accent mr-3"></i>
                        <span><?php echo t('pricing_rollover'); ?> <strong>6
                                <?php echo t('pricing_months'); ?></strong></span>
                    </li>
                    <li class="flex items-center text-gray-400 text-sm">
                        <i class="fas fa-database text-gray-600 mr-3"></i>
                        <span><?php echo t('pricing_max_accumulated'); ?> 90</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span><?php echo t('pricing_ai_extraction'); ?></span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span><?php echo t('pricing_preview'); ?></span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span><?php echo t('pricing_archive'); ?></span>
                    </li>
                </ul>

                <a href="#"
                    class="block w-full px-6 py-3 text-center text-sm font-medium text-white border border-white/20 rounded-xl hover:bg-white/5 transition-all">
                    <?php echo t('pricing_btn_choose'); ?>
                </a>
            </div>

            <!-- PRO Plan (Featured) -->
            <div
                class="relative bg-gradient-to-b from-primary/20 to-dark-700 rounded-2xl p-6 lg:p-8 border border-accent/30 card-glow flex flex-col">
                <div
                    class="absolute -top-3 left-1/2 -translate-x-1/2 px-4 py-1 bg-accent text-xs font-semibold text-white rounded-full">
                    <?php echo t('pricing_most_popular'); ?>
                </div>

                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-accent mb-2">PRO</h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-bold text-white">€89</span>
                        <span class="text-gray-500 ml-2"><?php echo t('pricing_per_month'); ?></span>
                    </div>
                </div>

                <ul class="space-y-4 mb-8 flex-grow">
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-file-alt text-accent mr-3"></i>
                        <span><strong>40</strong> <?php echo t('pricing_cmr_month'); ?></span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-sync-alt text-accent mr-3"></i>
                        <span><?php echo t('pricing_rollover'); ?> <strong>12
                                <?php echo t('pricing_months'); ?></strong></span>
                    </li>
                    <li class="flex items-center text-gray-400 text-sm">
                        <i class="fas fa-database text-gray-600 mr-3"></i>
                        <span><?php echo t('pricing_max_accumulated'); ?> 480</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span><?php echo t('pricing_ai_advanced'); ?></span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span><?php echo t('pricing_preview'); ?></span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span><?php echo t('pricing_archive'); ?></span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span><?php echo t('pricing_multi_cmr'); ?></span>
                    </li>
                </ul>

                <a href="#"
                    class="block w-full px-6 py-3 text-center text-sm font-semibold text-white btn-gradient rounded-xl">
                    <?php echo t('pricing_btn_choose'); ?>
                </a>
            </div>

            <!-- ENTERPRISE Plan -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 card-glow flex flex-col">
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-300 mb-2">ENTERPRISE</h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-bold text-white">€199</span>
                        <span class="text-gray-500 ml-2"><?php echo t('pricing_per_month'); ?></span>
                    </div>
                </div>

                <ul class="space-y-4 mb-8 flex-grow">
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-file-alt text-accent mr-3"></i>
                        <span><strong>150</strong> <?php echo t('pricing_cmr_month'); ?></span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-sync-alt text-accent mr-3"></i>
                        <span><?php echo t('pricing_rollover'); ?> <strong>12
                                <?php echo t('pricing_months'); ?></strong></span>
                    </li>
                    <li class="flex items-center text-gray-400 text-sm">
                        <i class="fas fa-database text-gray-600 mr-3"></i>
                        <span><?php echo t('pricing_max_accumulated'); ?> 950</span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span><?php echo t('pricing_all_pro'); ?></span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span><?php echo t('pricing_priority_support'); ?></span>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-check text-accent mr-3"></i>
                        <span><?php echo t('pricing_onboarding'); ?></span>
                    </li>
                </ul>

                <a href="contacto.php"
                    class="block w-full px-6 py-3 text-center text-sm font-medium text-white border border-white/20 rounded-xl hover:bg-white/5 transition-all">
                    <?php echo t('pricing_btn_contact'); ?>
                </a>
            </div>

        </div>


    </div>
</section>

<!-- FAQ or CTA -->
<section class="relative py-16 lg:py-24 bg-dark-800/50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl sm:text-3xl font-bold mb-6">
            <?php echo t('pricing_faq_title'); ?>
        </h2>
        <p class="text-lg text-gray-400 mb-8">
            <?php echo t('pricing_faq_subtitle'); ?>
        </p>
        <a href="contacto.php"
            class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white btn-gradient rounded-xl">
            <i class="fas fa-comments mr-2"></i>
            <?php echo t('pricing_faq_btn'); ?>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>