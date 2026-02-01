<!-- Footer -->
<footer class="relative bg-dark-900 border-t border-white/5">
    <!-- Gradient top border -->
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-accent/50 to-transparent">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 lg:gap-16">
            <!-- Logo & Tagline -->
            <div class="space-y-4">
                <a href="index.php" class="inline-block">
                    <img src="assets/images/logo.png" alt="TransiQ Logo" class="h-6 w-auto">
                </a>
                <p class="text-sm text-gray-400 leading-relaxed">
                    <?php echo t('footer_tagline'); ?>
                </p>
                <p class="text-sm text-gray-500">
                    <?php echo t('footer_desc'); ?>
                </p>
            </div>

            <!-- Navigation Links -->
            <div>
                <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">
                    <?php echo t('footer_nav'); ?></h4>
                <ul class="space-y-3">
                    <li><a href="index.php"
                            class="text-sm text-gray-400 hover:text-accent transition-colors"><?php echo t('nav_inicio'); ?></a>
                    </li>
                    <li><a href="index.php#como-funciona"
                            class="text-sm text-gray-400 hover:text-accent transition-colors"><?php echo t('nav_como_funciona'); ?></a>
                    </li>
                    <li><a href="index.php#por-que-transiq"
                            class="text-sm text-gray-400 hover:text-accent transition-colors"><?php echo t('nav_por_que'); ?></a>
                    </li>
                    <li><a href="precios.php"
                            class="text-sm text-gray-400 hover:text-accent transition-colors"><?php echo t('nav_precios'); ?></a>
                    </li>
                    <li><a href="contacto.php"
                            class="text-sm text-gray-400 hover:text-accent transition-colors"><?php echo t('nav_contacto'); ?></a>
                    </li>
                </ul>
            </div>

            <!-- Contact & Demo -->
            <div>
                <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">
                    <?php echo t('footer_contact'); ?></h4>
                <ul class="space-y-3">
                    <li class="flex items-center space-x-3 text-sm text-gray-400">
                        <i class="fas fa-envelope text-accent"></i>
                        <a href="mailto:info@transiq.net"
                            class="hover:text-accent transition-colors">info@transiq.net</a>
                    </li>
                </ul>
                <div class="mt-6">
                    <a href="contacto.php"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-white btn-gradient rounded-lg">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <?php echo t('footer_btn_demo'); ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-12 pt-8 border-t border-white/5">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0">
                <p class="text-sm text-gray-500">
                    &copy;
                    <?php echo date('Y'); ?> TransiQ. <?php echo t('footer_copyright'); ?>
                </p>
                <div class="flex items-center space-x-6">
                    <a href="#"
                        class="text-sm text-gray-500 hover:text-gray-400 transition-colors"><?php echo t('footer_privacy'); ?></a>
                    <a href="#"
                        class="text-sm text-gray-500 hover:text-gray-400 transition-colors"><?php echo t('footer_terms'); ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>