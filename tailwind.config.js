const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue'
    ],
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
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
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],
}
