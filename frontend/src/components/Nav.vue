<script setup>
import { useAuthStore } from '../stores/auth';

const authStore = useAuthStore();

</script>
<template>
 <nav class="navbar">
    <div class="navbar-container">
      <!-- Logo -->
      <a href="#" class="navbar-logo">Brand</a>
      
      <!-- Links -->
      <ul class="navbar-menu">
        <li class="navbar-item"><router-link :to="{name: 'Home'}"  class="navbar-link">Home</router-link></li>
       
        <template v-if="!authStore.user">
        <li class="navbar-item"><router-link :to="{name: 'Login'}"  class="navbar-link">Login</router-link></li>
        <li class="navbar-item"><router-link :to="{name: 'Register'}"  class="navbar-link">Register</router-link></li>
        </template>
        <template v-else>
     <!-- <li class="navbar-item"><router-link :to="{name: ''}"  class="navbar-link"></router-link></li> -->
     <li class="navbar-item" ><button @click="authStore.handleLogout">logout</button></li>
        
        </template>

      </ul>

      <!-- Hamburger Icon -->
      <div class="navbar-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </div>
  </nav>

  </template>
    <style>
    /* Reset some basic styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Navbar styles */
.navbar {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
}

.navbar-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1000px;
  margin: 0 auto;
}

.navbar-logo {
  font-size: 1.5rem;
  text-decoration: none;
  color: #fff;
}

/* Menu styles */
.navbar-menu {
  display: flex;
  list-style: none;
}

.navbar-item {
  margin-left: 20px;
}

.navbar-link {
  text-decoration: none;
  color: #fff;
  font-size: 1rem;
  transition: color 0.3s;
}

.navbar-link:hover {
  color: #ddd;
}

/* Hamburger Icon */
.navbar-toggle {
  display: none;
  flex-direction: column;
  cursor: pointer;
}

.bar {
  width: 25px;
  height: 3px;
  background-color: #fff;
  margin: 4px 0;
  transition: all 0.3s;
}

/* Responsive styles */
@media screen and (max-width: 768px) {
  .navbar-menu {
    display: none;
    flex-direction: column;
    width: 100%;
  }
  .navbar-menu.active {
    display: flex;
  }
  .navbar-item {
    margin: 10px 0;
    text-align: center;
  }
  .navbar-toggle {
    display: flex;
  }
}

  </style>