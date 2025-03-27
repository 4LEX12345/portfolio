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
                inter: ['Inter', 'sans-serif'],
                poppins: ['Poppins', 'sans-serif'],
                roboto: ['Roboto', 'sans-serif'],
                open: ['Open Sans', 'sans-serif'],
                ibm: ['IBM Plex Sans', 'sans-serif'],
                space: ['Space Grotesk', 'sans-serif'],

            },
            colors: {
                primaryColor: '#003E4F',
                hoverPrimaryColor: '#469F88',
                secondaryColor: '#FFF5B7',
                base: '#FFFFF',
                black: '#333333',
                primarybutton: '#00B8D4',
                primaryhoverstate: '#007C91',
            }
        },
    },

    plugins: [forms],
};
