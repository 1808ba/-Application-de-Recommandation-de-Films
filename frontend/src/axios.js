import axios from "axios";

axios.defaults.withCredentials = true;
axios.defaults.withXSRFToken = true;
axios.defaults.baseURL="http://localhost:8000";
// Ensure CSRF token is set
// axios.get('/sanctum/csrf-cookie').then(response => {
//     console.log('CSRF token set:', response);
// });