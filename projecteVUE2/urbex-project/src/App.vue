<template>
  <div id="app">
    <Navbar />
    <main class="content">
      <router-view />
    </main>
    <Footer />
  </div>
</template>

<script>
import UrbexNavbar from "./components/UrbexNavbar.vue"; // Changed to double quotes
import Footer from "./components/Footer.vue"; // Changed to double quotes

export default {
  name: "App", // Changed to double quotes
  components: {
    Navbar: UrbexNavbar, // Added trailing comma
    Footer, // Added trailing comma
  }, // Added trailing comma and semicolon here
}; // Added semicolon
</script>

<style>
/* Global styles */
body {
  margin: 0;
  font-family: Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #333;
  background-color: #f4f4f4;
  min-height: 100vh; /* Ensure body takes full height */
  display: flex;
  flex-direction: column; /* For sticky footer */
}

#app {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.content {
  flex: 1; /* Allows content to push footer down */
}

/* Basic container for content centering */
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}
</style>
