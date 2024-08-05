<script setup>
import {onMounted} from 'vue'
import { useAuthStore } from '../stores/auth'


const authStore = useAuthStore();

    onMounted(async () =>{
        await authStore.getUser();       
    });
    
</script>
<template>
    <!-- <h1>go and login</h1> -->
    <!-- <h1>{{ user?.name }}</h1>
    <p>{{ user?.email }}</p> -->
    <div v-if="authStore.user">
        <h1>{{ authStore.user.name }}</h1>
        <p>{{ authStore.user.email }}</p>
    </div>
    <div v-else>
        <h1>go and login</h1>

    </div>
</template>