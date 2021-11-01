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
                "clr-link": "#11c0e9",
                "clr-js": "#e8d44d",
                "clr-special": "#ba98f5",
                "clr-github": "#6e5494",
                "clr-discord": "#7289da",
                "clr-linkedin": "#0e76a8",
                "clr-twitter": "#08a0e9",
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
