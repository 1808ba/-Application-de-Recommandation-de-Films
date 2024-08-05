<script setup>
import { ref,} from 'vue';
// import  axios  from 'axios';
// import { useRouter } from 'vue-router';
import { useAuthStore } from '../stores/auth';


const authStore = useAuthStore();
// const router =useRouter();
const form = ref({
  name: '',
  email: '',
  password: '',
  password_confirmation: '',
});

// const handleRegister = async() => {
//   try {
//         const response = await axios.post('/register', {
//           name: form.value.name,
//           email: form.value.email,
//           password: form.value.password,
//           password_confirmation: form.value.password_confirmation
//         });
//         console.log('register response:', response);
//         router.push('/');
//     } catch (error) {
//         console.error('register error:', error);
//     }
// }






</script>
<template>
<h1>register</h1>
<div class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
  <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Register</h2>
  
  <form @submit.prevent="authStore.handleRegister(form)">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
      <input 
      class=
      "shadow appearance-none border rounded 
      w-full py-2 px-3 text-gray-700 
      leading-tight focus:outline-none 
      focus:shadow-outline" 
      id="name" type="text" placeholder="Name"
      v-model="form.name"
      
      >
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email" v-model="form.email" >
    </div>
    
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="********" v-model="form.password">
    </div>
    
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Confirm Password</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="confirm-password" type="password" placeholder="********" v-model="form.password_confirmation">
    </div>
    
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Register
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
        Already have an account?
      </a>
    </div>
  </form>
</div>

</div>
</template>