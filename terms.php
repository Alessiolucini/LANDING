<?php
$current_page = "terms";
include 'includes/header.php';
?>

<!-- Terms Hero -->
<section class="relative pt-32 pb-16 lg:pt-40 lg:pb-20">
    <div class="absolute inset-0 bg-gradient-to-br from-dark-900 via-dark-800 to-primary/10"></div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl sm:text-5xl font-bold mb-6 text-center">
            <?php echo t('terms_title'); ?>
        </h1>
        <p class="text-gray-400 text-center mb-4">
            <?php echo t('terms_last_updated'); ?>: 5 Febrero 2026
        </p>
    </div>
</section>

<!-- Terms Content -->
<section class="relative py-12 lg:py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-invert prose-lg max-w-none">

            <!-- Introduction -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">
                    <?php echo t('terms_intro_title'); ?>
                </h2>
                <p class="text-gray-300 leading-relaxed">
                    <?php echo t('terms_intro_text'); ?>
                </p>
            </div>

            <!-- Service Description -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">
                    <?php echo t('terms_service_title'); ?>
                </h2>
                <p class="text-gray-300 leading-relaxed">
                    <?php echo t('terms_service_text'); ?>
                </p>
            </div>

            <!-- User Obligations -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">
                    <?php echo t('terms_obligations_title'); ?>
                </h2>
                <p class="text-gray-300 leading-relaxed mb-4">
                    <?php echo t('terms_obligations_text'); ?>
                </p>
                <ul class="space-y-2 text-gray-300">
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('terms_obligation_1'); ?>
                    </li>
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('terms_obligation_2'); ?>
                    </li>
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('terms_obligation_3'); ?>
                    </li>
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('terms_obligation_4'); ?>
                    </li>
                </ul>
            </div>

            <!-- Payment Terms -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">
                    <?php echo t('terms_payment_title'); ?>
                </h2>
                <ul class="space-y-2 text-gray-300">
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('terms_payment_1'); ?>
                    </li>
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('terms_payment_2'); ?>
                    </li>
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('terms_payment_3'); ?>
                    </li>
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('terms_payment_4'); ?>
                    </li>
                </ul>
            </div>

            <!-- Intellectual Property -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">
                    <?php echo t('terms_ip_title'); ?>
                </h2>
                <p class="text-gray-300 leading-relaxed">
                    <?php echo t('terms_ip_text'); ?>
                </p>
            </div>

            <!-- Limitation of Liability -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">
                    <?php echo t('terms_liability_title'); ?>
                </h2>
                <p class="text-gray-300 leading-relaxed">
                    <?php echo t('terms_liability_text'); ?>
                </p>
            </div>

            <!-- Termination -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">
                    <?php echo t('terms_termination_title'); ?>
                </h2>
                <p class="text-gray-300 leading-relaxed">
                    <?php echo t('terms_termination_text'); ?>
                </p>
            </div>

            <!-- Contact -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5">
                <h2 class="text-2xl font-bold text-white mb-4">
                    <?php echo t('terms_contact_title'); ?>
                </h2>
                <p class="text-gray-300 leading-relaxed">
                    <?php echo t('terms_contact_text'); ?>
                </p>
                <a href="mailto:legal@transiq.net"
                    class="inline-flex items-center mt-4 text-accent hover:text-pink transition-colors">
                    <i class="fas fa-envelope mr-2"></i> legal@transiq.net
                </a>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>