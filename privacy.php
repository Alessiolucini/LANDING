<?php
$current_page = "privacy";
include 'includes/header.php';
?>

<!-- Privacy Policy Hero -->
<section class="relative pt-32 pb-16 lg:pt-40 lg:pb-20">
    <div class="absolute inset-0 bg-gradient-to-br from-dark-900 via-dark-800 to-primary/10"></div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl sm:text-5xl font-bold mb-6 text-center">
            <?php echo t('privacy_title'); ?>
        </h1>
        <p class="text-gray-400 text-center mb-4">
            <?php echo t('privacy_last_updated'); ?>: 5 Febrero 2026
        </p>
    </div>
</section>

<!-- Privacy Content -->
<section class="relative py-12 lg:py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-invert prose-lg max-w-none">

            <!-- Introduction -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">
                    <?php echo t('privacy_intro_title'); ?>
                </h2>
                <p class="text-gray-300 leading-relaxed">
                    <?php echo t('privacy_intro_text'); ?>
                </p>
            </div>

            <!-- Data Controller -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">
                    <?php echo t('privacy_controller_title'); ?>
                </h2>
                <p class="text-gray-300 leading-relaxed">
                    <?php echo t('privacy_controller_text'); ?>
                </p>
                <ul class="mt-4 space-y-2 text-gray-300">
                    <li><i class="fas fa-building text-accent mr-2"></i> TransiQ</li>
                    <li><i class="fas fa-envelope text-accent mr-2"></i> privacy@transiq.net</li>
                </ul>
            </div>

            <!-- Data Collected -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">
                    <?php echo t('privacy_data_title'); ?>
                </h2>
                <p class="text-gray-300 leading-relaxed mb-4">
                    <?php echo t('privacy_data_text'); ?>
                </p>
                <ul class="space-y-2 text-gray-300">
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('privacy_data_1'); ?>
                    </li>
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('privacy_data_2'); ?>
                    </li>
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('privacy_data_3'); ?>
                    </li>
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('privacy_data_4'); ?>
                    </li>
                </ul>
            </div>

            <!-- Purpose -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">
                    <?php echo t('privacy_purpose_title'); ?>
                </h2>
                <ul class="space-y-2 text-gray-300">
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('privacy_purpose_1'); ?>
                    </li>
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('privacy_purpose_2'); ?>
                    </li>
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('privacy_purpose_3'); ?>
                    </li>
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('privacy_purpose_4'); ?>
                    </li>
                </ul>
            </div>

            <!-- Your Rights -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">
                    <?php echo t('privacy_rights_title'); ?>
                </h2>
                <p class="text-gray-300 leading-relaxed mb-4">
                    <?php echo t('privacy_rights_text'); ?>
                </p>
                <ul class="space-y-2 text-gray-300">
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('privacy_rights_1'); ?>
                    </li>
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('privacy_rights_2'); ?>
                    </li>
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('privacy_rights_3'); ?>
                    </li>
                    <li><i class="fas fa-check text-accent mr-2"></i>
                        <?php echo t('privacy_rights_4'); ?>
                    </li>
                </ul>
            </div>

            <!-- Security -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5 mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">
                    <?php echo t('privacy_security_title'); ?>
                </h2>
                <p class="text-gray-300 leading-relaxed">
                    <?php echo t('privacy_security_text'); ?>
                </p>
            </div>

            <!-- Contact -->
            <div class="bg-dark-700 rounded-2xl p-6 lg:p-8 border border-white/5">
                <h2 class="text-2xl font-bold text-white mb-4">
                    <?php echo t('privacy_contact_title'); ?>
                </h2>
                <p class="text-gray-300 leading-relaxed">
                    <?php echo t('privacy_contact_text'); ?>
                </p>
                <a href="mailto:privacy@transiq.net"
                    class="inline-flex items-center mt-4 text-accent hover:text-pink transition-colors">
                    <i class="fas fa-envelope mr-2"></i> privacy@transiq.net
                </a>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>