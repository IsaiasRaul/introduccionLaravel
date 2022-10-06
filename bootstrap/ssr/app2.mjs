import _ from "lodash";
import axios from "axios";
import Alpine from "alpinejs";
window._ = _;
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
const app = "";
window.Alpine = Alpine;
Alpine.start();
