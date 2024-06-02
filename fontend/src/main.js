import { createApp } from "vue";
import { createPinia } from "pinia";
import router from "./router";
import axios from "./axios.js";


import Notifications from "@kyvg/vue3-notification";

import "./style.css";
import App from "./App.vue";

const pinia = createPinia();
const app = createApp(App);
app.use(pinia);
app.use(router);
app.use(Notifications);

app.config.globalProperties.$axios = axios;

app.mount("#app");