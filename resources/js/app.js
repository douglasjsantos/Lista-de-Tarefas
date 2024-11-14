// resources/js/app.js

import { createApp } from "vue";
import App from "./app.vue"; // importa o componente principal

const app = createApp(App); // cria a instância Vue com o componente App

app.mount("#app"); // monta o Vue na div com id="app" na view Blade
