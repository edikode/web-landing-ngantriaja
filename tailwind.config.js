const defaultTheme = require("tailwindcss/defaultTheme");
// nb
const colors = require("tailwindcss/colors");

module.exports = {
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php"
    ],

    darkMode: "media",

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans]
            },
            // nb
            colors: {
                "light-blue": colors.lightBlue,
                cyan: colors.cyan
            }
        }
    },

    variants: {
        extend: {
            opacity: ["disabled"]
        }
    },

    plugins: [require("@tailwindcss/forms")]
};
