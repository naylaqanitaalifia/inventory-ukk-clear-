// // export default {
// //   content: [
// //     "./resources/**/*.blade.php",
// //     "./resources/**/*.js",
// //   ],
// //   theme: {
// //     extend: {},
// //   },
// //   plugins: [],
// // }
// import defaultTheme from 'tailwindcss/defaultTheme';

// /** @type {import('tailwindcss').Config} */
// export default {
//     darkMode: 'class',
//     content: [
//         './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
//         './storage/framework/views/*.php',
//         './resources/**/*.blade.php',
//         './resources/**/*.js',
//     ],
//     theme: {
//         extend: {
//             fontFamily: {
//                 outfit: ['Outfit', 'sans-serif'],
//                 sans: [
//                     'Inter',
//                     'ui-sans-serif',
//                     'system-ui',
//                     'sans-serif',
//                     'Apple Color Emoji',
//                     'Segoe UI Emoji',
//                     'Segoe UI Symbol',
//                     'Noto Color Emoji',
//                 ],
//             },

//             screens: {
//                 '2xsm': '375px',
//                 xsm:    '425px',
//                 '3xl':  '2000px',
//                 sm:     '640px',
//                 md:     '768px',
//                 lg:     '1024px',
//                 xl:     '1280px',
//                 '2xl':  '1536px',
//             },

//             colors: {
//                 current:     'currentColor',
//                 transparent: 'transparent',
//                 white:       '#ffffff',

//                 brand: {
//                     25:  '#fffaf5',
//                     50:  '#fff7ed',
//                     100: '#ffedd5',
//                     200: '#fed7aa',
//                     300: '#fdba74',
//                     400: '#fb923c',
//                     500: '#f97316',
//                     600: '#ea580c',
//                     700: '#c2410c',
//                     800: '#9a3412',
//                     900: '#7c2d12',
//                     950: '#431407',
//                 },

//                 'blue-light': {
//                     25:  '#f5fbff',
//                     50:  '#f0f9ff',
//                     100: '#e0f2fe',
//                     200: '#b9e6fe',
//                     300: '#7cd4fd',
//                     400: '#36bffa',
//                     500: '#0ba5ec',
//                     600: '#0086c9',
//                     700: '#026aa2',
//                     800: '#065986',
//                     900: '#0b4a6f',
//                     950: '#062c41',
//                 },

//                 gray: {
//                     25:   '#fcfcfd',
//                     50:   '#f9fafb',
//                     100:  '#f2f4f7',
//                     200:  '#e4e7ec',
//                     300:  '#d0d5dd',
//                     400:  '#98a2b3',
//                     500:  '#667085',
//                     600:  '#475467',
//                     700:  '#344054',
//                     800:  '#1d2939',
//                     900:  '#101828',
//                     950:  '#0c111d',
//                     dark: '#1a2231',
//                 },

//                 orange: {
//                     25:  '#fffaf5',
//                     50:  '#fff6ed',
//                     100: '#ffead5',
//                     200: '#fddcab',
//                     300: '#feb273',
//                     400: '#fd853a',
//                     500: '#fb6514',
//                     600: '#ec4a0a',
//                     700: '#c4320a',
//                     800: '#9c2a10',
//                     900: '#7e2410',
//                     950: '#511c10',
//                 },

//                 success: {
//                     25:  '#f6fef9',
//                     50:  '#ecfdf3',
//                     100: '#d1fadf',
//                     200: '#a6f4c5',
//                     300: '#6ce9a6',
//                     400: '#32d583',
//                     500: '#12b76a',
//                     600: '#039855',
//                     700: '#027a48',
//                     800: '#05603a',
//                     900: '#054f31',
//                     950: '#053321',
//                 },

//                 error: {
//                     25:  '#fffbfa',
//                     50:  '#fef3f2',
//                     100: '#fee4e2',
//                     200: '#fecdca',
//                     300: '#fda29b',
//                     400: '#f97066',
//                     500: '#f04438',
//                     600: '#d92d20',
//                     700: '#b42318',
//                     800: '#912018',
//                     900: '#7a271a',
//                     950: '#55160c',
//                 },

//                 warning: {
//                     25:  '#fffcf5',
//                     50:  '#fffaeb',
//                     100: '#fef0c7',
//                     200: '#fedf89',
//                     300: '#fec84b',
//                     400: '#fdb022',
//                     500: '#f79009',
//                     600: '#dc6803',
//                     700: '#b54708',
//                     800: '#93370d',
//                     900: '#7a2e0e',
//                     950: '#4e1d09',
//                 },

//                 theme: {
//                     'pink-500':   '#ee46bc',
//                     'purple-500': '#7a5af8',
//                 },
//             },

//             boxShadow: {
//                 'theme-md':          '0px 4px 8px -2px rgba(16, 24, 40, 0.1), 0px 2px 4px -2px rgba(16, 24, 40, 0.06)',
//                 'theme-lg':          '0px 12px 16px -4px rgba(16, 24, 40, 0.08), 0px 4px 6px -2px rgba(16, 24, 40, 0.03)',
//                 'theme-sm':          '0px 1px 3px 0px rgba(16, 24, 40, 0.1), 0px 1px 2px 0px rgba(16, 24, 40, 0.06)',
//                 'theme-xs':          '0px 1px 2px 0px rgba(16, 24, 40, 0.05)',
//                 'theme-xl':          '0px 20px 24px -4px rgba(16, 24, 40, 0.08), 0px 8px 8px -4px rgba(16, 24, 40, 0.03)',
//                 datepicker:          '-5px 0 0 #262d3c, 5px 0 0 #262d3c',
//                 'focus-ring':        '0px 0px 0px 4px rgba(249, 115, 22, 0.12)',
//                 'slider-navigation': '0px 1px 2px 0px rgba(16, 24, 40, 0.1), 0px 1px 3px 0px rgba(16, 24, 40, 0.1)',
//                 tooltip:             '0px 4px 6px -2px rgba(16, 24, 40, 0.05), -8px 0px 20px 8px rgba(16, 24, 40, 0.05)',
//             },

//             dropShadow: {
//                 '4xl': [
//                     '0 35px 35px rgba(0, 0, 0, 0.25)',
//                     '0 45px 65px rgba(0, 0, 0, 0.15)',
//                 ],
//             },

//             zIndex: {
//                 1:      '1',
//                 9:      '9',
//                 99:     '99',
//                 999:    '999',
//                 9999:   '9999',
//                 99999:  '99999',
//                 999999: '999999',
//             },
//         },
//     },
//     plugins: [],
// };
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  darkMode: 'class', // Sesuai dengan @custom-variant dark
  theme: {
    extend: {
      screens: {
        '2xsm': '375px',
        'xsm': '425px',
        '3xl': '2000px',
      },
      fontFamily: {
        outfit: ['Outfit', 'sans-serif'],
        sans: [
          'Inter', 'ui-sans-serif', 'system-ui', 'sans-serif',
          'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'
        ],
      },
      colors: {
        brand: {
          25: '#fffaf5', 50: '#fff7ed', 100: '#ffedd5', 200: '#fed7aa',
          300: '#fdba74', 400: '#fb923c', 500: '#f97316', 600: '#ea580c',
          700: '#c2410c', 800: '#9a3412', 900: '#7c2d12', 950: '#431407',
        },
        'blue-light': {
          25: '#f5fbff', 50: '#f0f9ff', 100: '#e0f2fe', 200: '#b9e6fe',
          300: '#7cd4fd', 400: '#36bffa', 500: '#0ba5ec', 600: '#0086c9',
          700: '#026aa2', 800: '#065986', 900: '#0b4a6f', 950: '#062c41',
        },
        gray: {
          25: '#fcfcfd', 50: '#f9fafb', 100: '#f2f4f7', 200: '#e4e7ec',
          300: '#d0d5dd', 400: '#98a2b3', 500: '#667085', 600: '#475467',
          700: '#344054', 800: '#1d2939', 900: '#101828', 950: '#0c111d',
          dark: '#1a2231',
        },
        orange: {
          25: '#fffaf5', 50: '#fff6ed', 100: '#ffead5', 200: '#fddcab',
          300: '#feb273', 400: '#fd853a', 500: '#fb6514', 600: '#ec4a0a',
          700: '#c4320a', 800: '#9c2a10', 900: '#7e2410', 950: '#511c10',
        },
        success: {
          25: '#f6fef9', 50: '#ecfdf3', 100: '#d1fadf', 200: '#a6f4c5',
          300: '#6ce9a6', 400: '#32d583', 500: '#12b76a', 600: '#039855',
          700: '#027a48', 800: '#05603a', 900: '#054f31', 950: '#053321',
        },
        error: {
          25: '#fffbfa', 50: '#fef3f2', 100: '#fee4e2', 200: '#fecdca',
          300: '#fda29b', 400: '#f97066', 500: '#f04438', 600: '#d92d20',
          700: '#b42318', 800: '#912018', 900: '#7a271a', 950: '#55160c',
        },
        warning: {
          25: '#fffcf5', 50: '#fffaeb', 100: '#fef0c7', 200: '#fedf89',
          300: '#fec84b', 400: '#fdb022', 500: '#f79009', 600: '#dc6803',
          700: '#b54708', 800: '#93370d', 900: '#7a2e0e', 950: '#4e1d09',
        },
        theme: {
          pink: { 500: '#ee46bc' },
          purple: { 500: '#7a5af8' },
        },
        // Mapping Custom Variables
        primary: '#f9fafb',
        secondary: '#f97316',
        tertiary: '#ffe8d9',
        quaternary: '#f5f5f5',
        'surface-base': '#d1d3d4',
        'surface-muted': '#4b4c44',
        'accent-soft': '#fff1e8',
      },
      textColor: {
        'primary': '#f97316',
        'secondary': '#f9fafb',
        'tertiary': '#c9cdcf',
        'quaternary': '#919194',
      },
      boxShadow: {
        'theme-xs': '0px 1px 2px 0px rgba(16, 24, 40, 0.05)',
        'theme-sm': '0px 1px 3px 0px rgba(16, 24, 40, 0.1), 0px 1px 2px 0px rgba(16, 24, 40, 0.06)',
        'theme-md': '0px 4px 8px -2px rgba(16, 24, 40, 0.1), 0px 2px 4px -2px rgba(16, 24, 40, 0.06)',
        'theme-lg': '0px 12px 16px -4px rgba(16, 24, 40, 0.08), 0px 4px 6px -2px rgba(16, 24, 40, 0.03)',
        'theme-xl': '0px 20px 24px -4px rgba(16, 24, 40, 0.08), 0px 8px 8px -4px rgba(16, 24, 40, 0.03)',
        'datepicker': '-5px 0 0 #262d3c, 5px 0 0 #262d3c',
        'focus-ring': '0px 0px 0px 4px rgba(249, 115, 22, 0.12)',
        'slider-navigation': '0px 1px 2px 0px rgba(16, 24, 40, 0.1), 0px 1px 3px 0px rgba(16, 24, 40, 0.1)',
        'tooltip': '0px 4px 6px -2px rgba(16, 24, 40, 0.05), -8px 0px 20px 8px rgba(16, 24, 40, 0.05)',
      },
      dropShadow: {
        '4xl': ['0 35px 35px rgba(0, 0, 0, 0.25)', '0 45px 65px rgba(0, 0, 0, 0.15)'],
      },
      zIndex: {
        '1': '1', '9': '9', '99': '99', '999': '999', '9999': '9999', '99999': '99999', '999999': '999999',
      },
      fontSize: {
        'title-2xl': ['72px', { lineHeight: '90px' }],
        'title-xl': ['60px', { lineHeight: '72px' }],
        'title-lg': ['48px', { lineHeight: '60px' }],
        'title-md': ['36px', { lineHeight: '44px' }],
        'title-sm': ['30px', { lineHeight: '38px' }],
        'theme-xl': ['20px', { lineHeight: '30px' }],
        'theme-sm': ['14px', { lineHeight: '20px' }],
        'theme-xs': ['12px', { lineHeight: '18px' }],
      },
    },
  },
  plugins: [],
}
