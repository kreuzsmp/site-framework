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
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
                serif: ['"Work Sans"', ...defaultTheme.fontFamily.serif],
                mono: ['"Jetbrains mono"', ...defaultTheme.fontFamily.mono]
            },
            colors: {
                'purple': '#5865F2',
                'light': {
                    100: '#999999',
                    200: '#CACACA',
                    300: '#E4E2E2',
                    400: '#FFFFFF',
                },
                'lightgray': '#4E6A77',
                'darkgray': '#1f2a30',
                'darkergray': '#191919',

                'g_lin_1': {
                    100: '#E5E3E3',
                    200: '#7F7E7E',
                },
            },
            transitionTimingFunction: {
                'def': 'cubic-bezier(.44,.15,.23,.98)',
                'hero': 'cubic-bezier(.27,.16,.26,1.22)',
            },
            backgroundImage: {
                'hero-bg': 'url(/resources/images/bg.webp)'
            },
            transitionDuration: {
                '350': '350ms',
            },
            keyframes: {
                'from-left' : {
                    '0%': {
                        transform: 'translateX(-50%)',
                    },
                    '100%': {
                        transform: 'translateX(0)'
                    }
                },

                'loading': {
                    '0%': {
                        transform: 'scale(100%, 100%)',
                        opacity: '100%'
                    },
                    '99%': {
                        transform: 'scale(100%, 100%)',
                        opacity: '0%'
                    },
                    '100%': {
                        transform: 'scale(0, 0)',
                        opacity: '0',
                    }
                },

                'around': {
                    '0%': {
                        transform: 'rotate(0)',
                    },
                    '50%': {
                        transform: 'rotate(-180deg)',
                    },
                    '100%': {
                        transform: 'rotate(-360deg)',
                    }
                }
            },

            animation: {
                'hero-translate': 'from-left 1225ms ease',
                'loaded': 'loading 500ms cubic-bezier(.45,.19,.13,1.16)',
                'around-loader': 'around 1s ease'
            }
        },
    },
    safelist: [
        'animate-loaded',
        'scale-0',
        'animate-around-loader',
        'scale-150',
        'absolute',
        'bottom-0',
        'visible',
        'invisible',
        'scale-100'
    ],
    plugins: [forms, typography],
};
