module.exports = {
  content: ["./resources/views/**/*.blade.php", "./resources/css/**/*.css"],
  theme: {
    extend: {},
  },
  plugins: [require("@tailwindcss/forms")],
};
