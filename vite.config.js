import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                // 'resources/admin-assets/assets/images/fevicon.png',
                // 'resources/admin-assets/assets/css/style.css',
                // 'resources/admin-assets/assets/css/bootstrap.min.css',
                // 'resources/admin-assets/assets/css/responsive.css',
                // 'resources/admin-assets/assets/css/colors.css',
                // 'resources/admin-assets/assets/css/bootstrap-select.css',
                // 'resources/admin-assets/assets/css/perfect-scrollbar.css',
                // 'resources/admin-assets/assets/css/custom.css',

                // 'resresources/admin-assets/assets/js/jquery.min.js',
                // 'resresources/admin-assets/assets/js/popper.min.js',
                // 'resresources/admin-assets/assets/js/bootstrap.min.js',
                // 'resresources/admin-assets/assets/js/animate.min.js',
                // 'resresources/admin-assets/assets/js/bootstrap-select.js',
                // 'resresources/admin-assets/assets/js/owl.carousel.js',
                // 'resresources/admin-assets/assets/js/Chart.bundle.js',
                // 'resresources/admin-assets/assets/js/Chart.bundle.min.js',
                // 'resresources/admin-assets/assets/js/utils.js',
                // 'resresources/admin-assets/assets/js/analyser.js',
                // 'resresources/admin-assets/assets/js/perfect-scrollbar.min.js',
                // 'resresources/admin-assets/assets/js/custom.js',
                // 'resresources/admin-assets/assets/js/chart_custom_style1.js',
            ],
            refresh: true,
        }),
    ],
});


