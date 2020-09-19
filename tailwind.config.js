const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    purge: [],
    theme: {
        extend: {
            colors: {
                yellow: {
                    ...defaultTheme.colors.yellow,
                    600: '#FFDA00',
                },
            },
        },
    },
    variants: {},
    plugins: [],
}
