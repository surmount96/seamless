module.exports = {
    theme: {
        colors: {
            success: '#00D67D',
            negative: '#CC2E2E',
            pending: '#FFC82C',
            black: '#000000',
            white: '#FFFFFF',
            transparent: 'transparent',
            warning: '#EBA350',

            blue: {
                default: '#206CE0',
                base: '#032041',
                dark: '#1956b4',
                pale: '#E8F7FF',
                light: '#479BFF',
            },
            yellow: {
                default: '#FFC82C',
                dark: '#F8B700',
                light: '#FFD55F',
                pale: '#FFFADE',
            },

            orange: {
                default: '#F5A03A',
                light: '#ffd6a5',
            },

            green: {
                default: '#5FCAAF',
                dark: '#188F32',
                deep: '#3D8962',
                light: '#29EB7F',
                pale: '#DEFFE5',
            },

            red: {
                default: '#CC2E2E',
                dark: '#A10000',
                light: '#D75C5C',
                pale: '#FFFADE',
            },

            gray: {
                100: '#323643',
                200: '#444854',
                300: '#575A65',
                400: '#F9F9F9',
                500: '#EEEEEE',
                dark: '#4D575E',
                light: '#A6AAB4;',
                grayer: '#899296',
            },
            purple:{
                dark: '#8765DF'
            },
            pt:'#70CF98',
            fs:'#EB5758',
            sm:'#57CCF629',

            smoke: {
                dark: '#9DA8B6',
                100: '#C0CCDA',
                200: '#D3DCE6',
                300: '#E0E6ED',
            },

            snow: {
                100: '#E5E9F2',
                200: '#EEF1F5',
                300: '#FAFAFA',
            },
        },

        opacity: {
            0: '0',
            10: '0.1',
            20: '0.2',
            30: '0.3',
            40: '0.4',
            50: '0.5',
            60: '0.6',
            70: '0.7',
            80: '0.8',
            90: '0.9',
            100: '1',
        },

        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
            '2xl': '1440px',
        },

        fontSize: {
            subtext: '7px',
            default: '16px',
            large: '17px',
            medium: '.85rem',
            'body-2': '15px',
            h1: '48px',
            h2: '40px',
            h3: '32px',
            h4: '20px',
        },

        lineHeight: {
            22: '22px',
            26: '26px',
            28: '28px',
            33: '33px',
            42: '42px',
            52: '52px',
            62: '62px',
        },

        borderColor: (theme) => ({
            default: theme('color.gray', 'currentColor'),
            gray: '#F1F1F1',
            lightGrey: '#A6AAB4',
            orange: '#EBA350',
            green: '#5FCAAF',
        }),
        fontFamily: {
            display: ['Gilroy', 'sans-serif'],
            body: ['Graphik', 'sans-serif'],
        },
        borderWidth: {
            default: '1px',
            '0': '0',
            '2': '2px',
            '4': '4px',
        },
        extend: {
            colors: {
                cyan: '#9cdbff',
            },
            spacing: {
                '96': '24rem',
                '128': '32rem',
            }
        }
    },
    variants: {
        appearance: ['responsive'],
        backgroundColor: ['responsive', 'hover', 'focus'],
        tableLayout: ['responsive', 'hover', 'focus'],
        fill: [],
    },
}
