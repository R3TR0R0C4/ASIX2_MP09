<template>
  <footer class="footer">
    <div class="container">
      <p>&copy; {{ currentYear }} Urbex Explorer. All rights reserved.</p>
      <div class="social-links">
        <a
          href="https://github.com/R3TR0R0C4"
          target="_blank"
          rel="noopener noreferrer"
          >GitHub</a
        >
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "AppFooter", // Changed "Footer" to "AppFooter" and added a comma
  data() {
    return {
      currentYear: new Date().getFullYear(), // Added a comma
    }; // Added a semicolon
  }, // Added a comma
}; // Added a semicolon
</script>

<style scoped>
.footer {
  background-color: #222;
  color: white;
  padding: 1.5rem 0;
  text-align: center;
  margin-top: auto; /* Pushes footer to the bottom */
}

.footer .container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.footer p {
  margin-bottom: 10px;
  font-size: 0.9rem;
}

.social-links a {
  color: white;
  text-decoration: none;
  margin: 0 10px;
  transition: color 0.3s ease;
}

.social-links a:hover {
  color: #007bff;
}
</style>
