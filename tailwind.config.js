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
            colors: {
                blue: "#53B1FD",
                blueLight: "#84CAFF",
                green: "#33B44F",
                red: "#F13A50",
            },
            fontFamily: {
                poppins: ["Poppins"],
            },
        },
    },

    plugins: [forms, typography],
};
