/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/*.blade.php",
        "./resources/views/**/*.blade.php",
    ],
    theme: {
        fontFamily: {
            poppins: ["Poppins", "sans-serif"],
        },
        extend: {},
    },
    plugins: [],
};
