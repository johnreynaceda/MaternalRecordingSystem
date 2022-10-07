const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Rubik", ...defaultTheme.fontFamily.sans],
                pop: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                main: "#FF5364",
                back: "#f6faff",
            },
            backgroundImage: {
                hero: "url('/images/Animated.svg')",
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
