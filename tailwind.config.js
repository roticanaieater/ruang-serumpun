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
                hijau: {
                    1: '#17743f',
                    2: '#3ba167',
                    3: '#34cd73',
                    4: '#4bff93',
                    5: '#a8ffcb',
                },
                biru: {
                    1: '#0000b0',
                    2: '#0000ff',
                    3: '#0055ff',
                    4: '#00aaff',
                    5: '#00d8ff',
                },
                merah: {
                    1: '#800100',
                    2: '#c30001',
                    3: '#fd0002',
                    4: '#ff5555',
                    5: '#fcaeb3',
                },
                kuning: {
                    1: '#6f4200',
                    2: '#a16300',
                    3: '#de8900',
                    4: '#ffc700',
                    5: '#fffa00',
                },
                ungu: {
                    1: '#400068',
                    2: '#6a0dad',
                    3: '#9933ff',
                    4: '#bf80ff',
                    5: '#ebd4ff',
                },
                toska: {
                    1: '#004444',
                    2: '#007e7e',
                    3: '#00b4b4',
                    4: '#4de8e8',
                    5: '#bdf7f7',
                },
                oranye: {
                    1: '#7c2500',
                    2: '#b83d00',
                    3: '#ff5e00',
                    4: '#ff944d',
                    5: '#ffd6b8',
                },
                magenta: {
                    1: '#63003b',
                    2: '#9e005e',
                    3: '#e60088',
                    4: '#ff5cb8',
                    5: '#ffc7e6',
                },
                kelabu: {
                    1: '#1e293b',
                    2: '#475569',
                    3: '#64748b',
                    4: '#94a3b8',
                    5: '#e2e8f0',
                },
            },
        },
    },
    plugins: [],
};