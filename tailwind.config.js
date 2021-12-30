const defaultTheme = require('tailwindcss/defaultTheme');

const colors = require('tailwindcss/colors')

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                black: colors.black,
                white: colors.white,
                gray: colors.slate,
                green: colors.emerald,
                purple: colors.violet,
                yellow: colors.amber,
                pink: colors.fuchsia,
                greenLime: colors.lime,
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
