<?php
$current_page = "contacto";
include 'includes/header.php';
?>

<!-- Contact Hero -->
<section class="relative pt-32 pb-16 lg:pt-40 lg:pb-20">
    <div class="absolute inset-0 bg-gradient-to-br from-dark-900 via-dark-800 to-primary/10"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span
            class="inline-block px-4 py-1.5 text-xs font-semibold text-accent uppercase tracking-wider bg-accent/10 rounded-full mb-4">
            <?php echo t('contact_badge'); ?>
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">
            <span class="gradient-text"><?php echo t('contact_title_1'); ?></span> <?php echo t('contact_title_2'); ?>
        </h1>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto">
            <?php echo t('contact_subtitle'); ?>
        </p>
    </div>
</section>

<!-- Contact Form Section -->
<section class="relative py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-12 lg:gap-16">

            <!-- Form -->
            <div class="lg:col-span-3">
                <div class="bg-dark-700 rounded-2xl p-8 lg:p-10 border border-white/5">
                    <div id="contact-feedback" class="hidden mb-6 p-4 rounded-xl text-center"></div>

                    <form id="contact-form" class="space-y-6">
                        <!-- Company Name -->
                        <div>
                            <label for="empresa" class="block text-sm font-medium text-gray-300 mb-2">
                                <?php echo t('contact_label_company'); ?> <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="empresa" name="empresa" required
                                class="w-full px-4 py-3 bg-dark-800 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent transition-all"
                                placeholder="<?php echo t('contact_placeholder_company'); ?>">
                        </div>

                        <!-- Full Name -->
                        <div>
                            <label for="nombre" class="block text-sm font-medium text-gray-300 mb-2">
                                <?php echo t('contact_label_name'); ?> <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="nombre" name="nombre" required
                                class="w-full px-4 py-3 bg-dark-800 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent transition-all"
                                placeholder="<?php echo t('contact_placeholder_name'); ?>">
                        </div>

                        <!-- Email & Phone Row -->
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                                    <?php echo t('contact_label_email'); ?> <span class="text-red-400">*</span>
                                </label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 bg-dark-800 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent transition-all"
                                    placeholder="<?php echo t('contact_placeholder_email'); ?>">
                            </div>
                            <div>
                                <label for="telefono" class="block text-sm font-medium text-gray-300 mb-2">
                                    <?php echo t('contact_label_phone'); ?>
                                </label>
                                <input type="tel" id="telefono" name="telefono"
                                    class="w-full px-4 py-3 bg-dark-800 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent transition-all"
                                    placeholder="<?php echo t('contact_placeholder_phone'); ?>">
                            </div>
                        </div>

                        <!-- Subject Select -->
                        <div>
                            <label for="asunto" class="block text-sm font-medium text-gray-300 mb-2">
                                <?php echo t('contact_label_subject'); ?>
                            </label>
                            <select id="asunto" name="asunto"
                                class="w-full px-4 py-3 bg-dark-800 border border-white/10 rounded-xl text-white focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent transition-all">
                                <option value="demo"><?php echo t('contact_option_demo'); ?></option>
                                <option value="info"><?php echo t('contact_option_info'); ?></option>
                                <option value="soporte"><?php echo t('contact_option_support'); ?></option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="mensaje" class="block text-sm font-medium text-gray-300 mb-2">
                                <?php echo t('contact_label_message'); ?>
                            </label>
                            <textarea id="mensaje" name="mensaje" rows="5"
                                class="w-full px-4 py-3 bg-dark-800 border border-white/10 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent transition-all resize-none"
                                placeholder="<?php echo t('contact_placeholder_message'); ?>"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" id="submit-btn"
                                class="w-full sm:w-auto px-8 py-4 text-base font-semibold text-white btn-gradient rounded-xl flex items-center justify-center min-w-[200px]">
                                <span id="btn-text" class="flex items-center">
                                    <i class="fas fa-paper-plane mr-2"></i>
                                    <?php echo t('contact_btn_send'); ?>
                                </span>
                                <span id="btn-spinner" class="hidden">
                                    <i class="fas fa-circle-notch fa-spin"></i>
                                </span>
                            </button>
                        </div>
                    </form>

                    <script>
                        // Translation strings for JavaScript
                        const contactSuccessMsg = <?php echo json_encode(t('contact_success')); ?>;
                        const contactErrorMsg = <?php echo json_encode(t('contact_error')); ?>;

                        document.getElementById('contact-form').addEventListener('submit', async function (e) {
                            e.preventDefault();

                            const form = e.target;
                            const feedback = document.getElementById('contact-feedback');
                            const btnText = document.getElementById('btn-text');
                            const btnSpinner = document.getElementById('btn-spinner');
                            const submitBtn = document.getElementById('submit-btn');

                            // Visual loading state
                            submitBtn.disabled = true;
                            btnText.classList.add('hidden');
                            btnSpinner.classList.remove('hidden');
                            feedback.classList.add('hidden');

                            const formData = new FormData(form);
                            const data = Object.fromEntries(formData.entries());

                            try {
                                const response = await fetch('https://intuifypersonale-n8n.oqlfv4.easypanel.host/webhook/956c42bd-c09e-418c-a078-53877557b5d4', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                    },
                                    body: JSON.stringify(data),
                                });

                                if (response.ok) {
                                    feedback.textContent = contactSuccessMsg;
                                    feedback.className = 'mb-6 p-4 rounded-xl text-center bg-green-500/10 text-green-400 border border-green-500/20';
                                    feedback.classList.remove('hidden');
                                    form.reset();
                                } else {
                                    throw new Error('Error en el servidor');
                                }
                            } catch (error) {
                                feedback.textContent = contactErrorMsg;
                                feedback.className = 'mb-6 p-4 rounded-xl text-center bg-red-500/10 text-red-400 border border-red-500/20';
                                feedback.classList.remove('hidden');
                            } finally {
                                submitBtn.disabled = false;
                                btnText.classList.remove('hidden');
                                btnSpinner.classList.add('hidden');
                            }
                        });
                    </script>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Trust Box -->
                <div class="bg-dark-700 rounded-2xl p-6 border border-white/5">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center">
                            <i class="fas fa-clock text-xl text-accent"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2"><?php echo t('contact_fast_title'); ?></h3>
                            <p class="text-gray-400 text-sm">
                                <?php echo t('contact_fast_desc'); ?> <strong
                                    class="text-white"><?php echo t('contact_fast_hours'); ?></strong>.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="bg-dark-700 rounded-2xl p-6 border border-white/5">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center">
                            <i class="fas fa-envelope text-xl text-accent"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2"><?php echo t('contact_email_title'); ?></h3>
                            <a href="mailto:info@transiq.net" class="text-accent hover:underline">
                                info@transiq.net
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Demo CTA -->
                <div class="bg-gradient-to-br from-primary/30 to-accent/10 rounded-2xl p-6 border border-accent/20">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-accent/20 rounded-xl flex items-center justify-center">
                            <i class="fas fa-video text-xl text-accent"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2"><?php echo t('contact_demo_title'); ?></h3>
                            <p class="text-gray-400 text-sm mb-4">
                                <?php echo t('contact_demo_desc'); ?>
                            </p>
                            <span
                                class="inline-block px-4 py-2 text-xs font-medium text-accent bg-accent/10 rounded-lg">
                                <?php echo t('contact_demo_badge'); ?>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- FAQ Link -->
                <div class="text-center pt-4">
                    <p class="text-sm text-gray-500">
                        <?php echo t('contact_pricing_link'); ?>
                    </p>
                    <a href="precios.php" class="inline-flex items-center text-accent hover:underline mt-2">
                        <?php echo t('contact_pricing_btn'); ?>
                        <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>