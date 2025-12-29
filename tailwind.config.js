import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'teal': {
                    '50': '#f0f9f9',
                    '100': '#e0f2f3',
                    '200': '#b3e5e8',
                    '300': '#80d4dc',
                    '400': '#4dbcc6',
                    '500': '#2F6E7F',
                    '600': '#29606f',
                    '700': '#245a68',
                    '800': '#1e4d58',
                    '900': '#1a4a5a',
                },
                'gold': '#E8B647',
                'dark-gray': '#1a1a1a',
                'light': '#F5F5F5',
            },
            borderRadius: {
                'xl': '20px',
            },
            boxShadow: {
                'custom': '0 25px 50px rgba(0, 0, 0, 0.08)',
                'custom-hover': '0 40px 80px rgba(0, 0, 0, 0.12)',
            },
            animation: {
                'float': 'float 6s ease-in-out infinite',
                'gradient-shift': 'gradientShift 4s ease-in-out infinite',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%': { transform: 'translateY(-20px)' },
                },
                gradientShift: {
                    '0%, 100%': { backgroundPosition: '0% 50%' },
                    '50%': { backgroundPosition: '100% 50%' },
                },
            },
        },
    },

    plugins: [forms],
};
