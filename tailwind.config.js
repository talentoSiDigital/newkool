import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                roboto: ["'Roboto'", ...defaultTheme.fontFamily.sans],
                newkool: ["'newkool'", ...defaultTheme.fontFamily.sans]
            },
            colors: {
                // 'newkool-red': "#E21F1D",
                'newkool-red': "#752d2c",
                'custom': "rgba(134, 32, 33, 0.20)",
            },
            keyframes: {
                showoff: {
                  '0%, 25%': { opacity: '1' },

                  '100%': { opacity: '0' },
                }
            },
            animation: {
                disapear: 'showoff 4s linear'
            }
          
           
        },
    },


    plugins: [forms, typography,require("tailwindcss-animate"),],
};
