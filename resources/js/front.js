window.Vue = require("vue");

import App from "./components/";

const app = new Vue({
    el: "#app",
    render: (h) => h(app),
});
