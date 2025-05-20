<template>
  <nav class="navbar">
    <div class="container">
      <router-link to="/" class="navbar-brand">Urbex Explorer</router-link>
      <ul class="navbar-links">
        <li><router-link to="/">Home</router-link></li>
        <li><router-link to="/about">About</router-link></li>
        <li><router-link to="/crud">CRUD</router-link></li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  name: "UrbexNavbar",
};
</script>

<style scoped>
.navbar {
  background-color: #333;
  padding: 1rem 0;
  color: white;
}

.navbar .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.navbar-brand {
  color: white;
  text-decoration: none;
  font-size: 1.8rem;
  font-weight: bold;
}

.navbar-links {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

.navbar-links li {
  margin-left: 25px;
}

.navbar-links a {
  color: white;
  text-decoration: none;
  font-weight: bold;
  transition: color 0.3s ease;
}

.navbar-links a:hover,
.navbar-links a.router-link-exact-active {
  color: #007bff; /* Example hover/active color */
}
</style>
