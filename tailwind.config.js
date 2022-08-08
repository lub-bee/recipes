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
                'coral': {  
                    DEFAULT: '#FF7247',  
                    '50': '#FFFFFF',  
                    '100': '#FFF5EA',  
                    '200': '#FFDDC1',  
                    '300': '#FFBF99',  
                    '400': '#FF9B70',  
                    '500': '#FF7247',  
                    '600': '#FF360F',  
                    '700': '#D61400',  
                    '800': '#9E0400',  
                    '900': '#660005'
                },
                'celeste-blue': {
                    DEFAULT: '#357AB7',
                    '50': '#B9D3EB',
                    '100': '#A9C9E6',
                    '200': '#89B6DD',
                    '300': '#6AA2D4',
                    '400': '#4A8ECB',
                    '500': '#357AB7',
                    '600': '#285D8B',
                    '700': '#1C4060',
                    '800': '#0F2334',
                    '900': '#030609'
                },
            },
            animation: {
                'stir-spoon': 'stir 2s linear infinite',
            },
            keyframes: {
                'stir': {
                    '0%' : { transform: 'rotate(90deg)' },
                    '10%': { transform: 'rotate(114deg)' },
                    '20%': { transform: 'rotate(90deg)' },
                    '30%': { transform: 'rotate(130deg)' },
                    '40%': { transform: 'rotate(90deg)' },
                    '50%': { transform: 'rotate(100deg)' },
                    '60%': { transform: 'rotate(130deg)' },
                    '75%': { transform: 'rotate(100deg)' },
                    '90%': { transform: 'rotate(130deg)' },
                    '100%': { transform: 'rotate(100deg)' },
                }
            }

        },
        
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography')
    ],
};
