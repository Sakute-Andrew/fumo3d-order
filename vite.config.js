import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/js/app.js", "resources/scss/app.scss", "resources/css/app.css"],
            ssr: "resources/js/ssr.js",
            refresh: true,
        }),

    ],
    ssr: {
        noExternal: ["vue", "@protonemedia/laravel-splade"]
    },
});
