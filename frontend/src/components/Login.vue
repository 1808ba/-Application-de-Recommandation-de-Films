<script setup>
import { ref, onMounted} from 'vue';
// import  axios  from 'axios';
import { useAuthStore } from '../stores/auth'

// import { useRouter } from 'vue-router';

// const router = useRouter();
const authStore = useAuthStore();

const form =ref({
  email:'',
  password:'',
});

// const getToken = async () =>
// {
//   await axios.get('/sanctum/csrf-cookie');
// }
// const handleLogin = async () => {
//   await getToken();
//         await axios.post('/login', {
//             email: form.value.email,
//             password: form.value.password,
//         });
//         router.push('/');
   
// };
</script>
<template>


<div class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Login</h2>
    
    <form @submit.prevent="authStore.handleLogin(form)">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
        <input 
        class=
        "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
        id="email" type="email" placeholder="Email"
        v-model="form.email"
        >
      </div>
      
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
        <input 
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" 
        type="password" 
        placeholder=""
        v-model="form.password"
        
        >
      </div>
      
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Sign In
        </button>
        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
          Forgot Password?
        </a>
      </div>
    </form>
  </div>
  </div>



</template>