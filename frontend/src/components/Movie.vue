<!-- <script setup>
import { ref } from 'vue';
import axios from 'axios';

const movie = ref({
  title: '',
  image: '',
});

const addMovie = async () => {
  try {
    const response = await axios.post('/api/movies', movie.value);
    console.log('Movie added:', response.data);
    // Optionally reset the form or redirect
    movie.value = { title: '', image: '' };
  } catch (error) {
    console.error('Error adding movie:', error);
  }
};
</script>

<template>
  <div>
    <h2>Add New Movie</h2>
    <form @submit.prevent="addMovie">
      <div>
        <label for="title">Movie title:</label>
        <input v-model="movie.title" id="title" type="text" required />
      </div>
      <div>
        <label for="image">Image URL:</label>
        <input v-model="movie.image" id="image" type="text" required />
      </div>
      <button type="submit">Add Movie</button>
    </form>
  </div>
</template> -->


<!-- <template>
    <div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-md">
      <h2 class="text-2xl font-semibold text-gray-800 mb-6">Add New Movie</h2>
   -->
      <!-- <form @submit.prevent="submitMovie">
     
        <div class="mb-4">
          <label for="movieName" class="block text-gray-700 font-bold mb-2">Movie Name:</label>
          <input
            type="text"
            id="movieName"
            v-model="movieName"
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Enter movie name"
            required
          />
        </div> -->
  
        <!-- Movie Description -->
        <!-- <div class="mb-4">
          <label for="movieDescription" class="block text-gray-700 font-bold mb-2">Description:</label>
          <textarea
            id="movieDescription"
            v-model="movieDescription"
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Enter movie description"
            rows="4"
            required
          ></textarea>
        </div> -->
  
        <!-- Trailer Link -->
        <!-- <div class="mb-4">
          <label for="trailerLink" class="block text-gray-700 font-bold mb-2">Trailer Link:</label>
          <input
            type="url"
            id="trailerLink"
            v-model="trailerLink"
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Enter trailer link"
            required
          />
        </div> -->
  
        <!-- Movie Image -->
        <!-- <div class="mb-6">
          <label for="movieImage" class="block text-gray-700 font-bold mb-2">Movie Image:</label>
          <input
            type="file"
            id="movieImage"
            @change="onFileChange"
            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            required
          />
        </div> -->
  
        <!-- Submit Button -->
        <!-- <button
          type="submit"
          class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
          Add Movie
        </button>
      </form>
    </div>
  </template>
   -->






   <script setup>
   import oceanImage from '../assets/pics/oceans8.jpg';
   import inceptionImage from '../assets/pics/inception.jpeg';
   
   const movies = [
     {
       title: 'Ocean\'s 8',
       description: 'Debbie Ocean gathers an all-female crew to attempt an impossible heist at New York City\'s yearly Met Gala.',
       trailer: 'https://www.youtube.com/watch?v=MFWF9dU5Zc0',
       image: oceanImage
     },
     {
       title: 'Inception',
       description: 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.',
       trailer: 'https://www.youtube.com/watch?v=YoHD9XEInc0',
       image: inceptionImage
     },
     {
       title: 'Ocean\'s 8',
       description: 'Debbie Ocean gathers an all-female crew to attempt an impossible heist at New York City\'s yearly Met Gala.',
       trailer: 'https://www.youtube.com/watch?v=MFWF9dU5Zc0',
       image: oceanImage
     },
     {
       title: 'Inception',
       description: 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.',
       trailer: 'https://www.youtube.com/watch?v=YoHD9XEInc0',
       image: inceptionImage
     },
     // Add more movie objects here...
   ];
   </script>
   
   
   <template>
    <div class="movies-container">
      <div class="movie-card" v-for="movie in movies" :key="movie.title">
        <h2>{{ movie.title }}</h2>
        <img :src="movie.image" alt="Movie Image" class="movie-image" />
        <p class="description">{{ movie.description }}</p>
        <a :href="movie.trailer" target="_blank" class="trailer-link">Watch Trailer</a>
      </div>
    </div>
  </template>
  
   
   <style scoped>
   .movies-container {
     display: flex;
     flex-wrap: wrap;
     gap: 20px;
     justify-content: center;
   }
   
   .movie-card {
     background-color: #f4f4f4;
     border-radius: 10px;
     box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
     padding: 15px;
     max-width: 300px;
     text-align: center;
   }
   
   .movie-image {
     width: 250px;
     height: 350px;
     border-radius: 10px;
   }
   
   .description {
     margin: 10px 0;
     color: #333;
   }
   
   .trailer-link {
     display: inline-block;
     margin-top: 10px;
     padding: 10px 15px;
     background-color: #007bff;
     color: white;
     border-radius: 5px;
     text-decoration: none;
     transition: background-color 0.3s ease;
   }
   
   .trailer-link:hover {
     background-color: #0056b3;
   }
   </style>
   
