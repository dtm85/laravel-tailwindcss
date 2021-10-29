module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                "clr-sea-green": "#17C3B2",
                "clr-cg-blue": "#227C9D",
                "clr-max-yellow-red": "#FFCB77",
                "clr-floral-white": "#FEF9EF",
                "clr-light-coral": "#FE6D73",
            },
        },
        container: {
            center: true,
            padding: "1rem",
            screens: {
                lg: "1124px",
                xl: "1124px",
                "2xl": "1124px",
            },
        },
        fontFamily: {
            Nunito: ["Nunito, sans-serif"],
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
