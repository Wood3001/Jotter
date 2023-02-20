const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
            'cerulean': '#4281A4',
            'lapis': '#035E7B',
            'linen': '#F7EFE8',
            'jet': '#2A2A2A',
            'seasalt': '#F8F8F8',
            }, 
        }, 
    },

    plugins: [require('@tailwindcss/forms')],
};
