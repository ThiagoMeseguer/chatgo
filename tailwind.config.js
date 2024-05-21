import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
//import flowbitePlugin from 'flowbite/plugin'; // Importa el plugin de Flowbite

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue'
        // './node_modules/flowbite/**/*.js' // Añade los archivos de Flowbite a la lista de contenido
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, ], // Agrega el plugin de Flowbite a la lista de plugins flowbitePlugin

};
