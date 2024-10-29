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
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                'bigBlac': "#0f0f0f",
                'pirpblu': "#3346ff",
                'blu': '#0085ff',
                'red': '#f25858',
                'white': {
                    100: '#ffffff',
                    150: '#f5f5f5',
                    200: '#eeeeee',
                    300: '#868686',
                    400: '#323334'
                },
                'bg-black': '#141516',
                'bg-dark': '#1a1b1c',
                'bg-gray': '#343434'
            },
            borderRadius: {
                'mid': '1.25rem',
            },
            keyframes: {
                'bg-blur': {
                    '0%': {
                        backdropFilter: 'blur(0)',
                    },
                    '100%': {
                        backdropFilter: 'blur(8px)',
                    },
                },

                scroll: {
                    '0%': {
                        transform: "translateX(0)",
                    },
                    '100%': {
                        transform: "translateX(-100%)"
                    }
                },
            },
            animation: {
                'scrolling-gallery': "scroll 20s linear infinite",
                'scrolling-gallery-reverse': "scroll 20s linear infinite reverse",
                'bluralize': "bg-blur 500ms ease-in-out"
            },
            backgroundImage: {
                'hero-image': "url(/resources/images/bg3.png)"
            }


        },
    },

    safelist: [
        '-translate-y-full',
    ],

    plugins: [forms, typography],
};
