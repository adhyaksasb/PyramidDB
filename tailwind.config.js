import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "rgba(24, 28, 44, 1)",
                secondary: "rgba(32, 36, 52, 1)",
                font1: "rgba(56, 60, 140, 1)",
                font2: "rgba(56, 180, 140, 1)",
                dark: {
                    100: "#F4EEE0",
                    500: "#ABBBC2",
                    700: "#6D5D6E",
                    900: "#4F4557",
                    800: "#393646",
                },
                custom: "#EB966A", //#EB966A, #5c25cb
            },
            boxShadow: {
                custom: "0px 4px 12px rgba(234, 124, 105, 0.32)", //rgba(234, 124, 105, 0.32), rgba(92,37,203, 0.32)
                "inverse-top": "4px 4px 0 #FFFFFF",
                "inverse-bottom": "4px -4px 0 #FFFFFF",
                "inverse-top-dark": "4px 4px 0 #393646",
                "inverse-bottom-dark": "4px -4px 0 #393646",
            },
        },
    },

    plugins: [forms, typography],
    darkMode: "class",
};
