/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'system-ui', 'sans-serif'],
                serif: ['Merriweather', 'serif'],
            },
            backgroundImage: {
                'bgSerumpun': "url('bg-serumpun.png')",
            },
            colors: {
                serumpun: {
                    dark: '#1b242d',
                    middark: '#323a42',
                    yellow: '#fde401'
                },
            },
        },
    },
    plugins: [],
};