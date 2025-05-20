<template>
  <div class="home-page">
    <header class="hero">
      <div class="hero-content">
        <h1>Unveiling the Forgotten</h1>
        <p>Explore the hidden beauty of abandoned spaces.</p>
        <router-link to="/crud" class="btn btn-primary"
          >Start Your Journey</router-link
        >
      </div>
    </header>

    <section class="intro-section">
      <div class="container">
        <h2>What is Urbex?</h2>
        <p>
          Urban exploration (often shortened as urbex) is the exploration of
          man-made structures, usually abandoned ruins or disused facilities. It
          is also commonly called infiltration, though this term is sometimes
          associated with illegal activities. The hobby is sometimes also
          referred to as "draining" when referring to the exploration of
          stormwater drains.
        </p>
        <router-link to="/about" class="btn btn-secondary"
          >Learn More</router-link
        >
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: "HomePage",
};
</script>

<style scoped>
.home-page {
  text-align: center;
}

/* Important: The hero background image style has been removed. Add your own! */
.hero {
  /* background: url('../assets/your-hero-image.jpg') no-repeat center center/cover; */
  background-color: #555; /* Placeholder background color */
  color: white;
  padding: 100px 20px;
  min-height: 500px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.hero::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Overlay for readability */
}

.hero-content {
  position: relative;
  z-index: 1;
}

.hero h1 {
  font-size: 3.5rem;
  margin-bottom: 20px;
}

.hero p {
  font-size: 1.5rem;
  margin-bottom: 30px;
}

.btn {
  display: inline-block;
  padding: 12px 25px;
  border-radius: 5px;
  text-decoration: none;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.btn-primary {
  background-color: #007bff;
  color: white;
}

.btn-primary:hover {
  background-color: #0056b3;
}

.btn-secondary {
  background-color: #6c757d;
  color: white;
  margin-top: 20px;
}

.btn-secondary:hover {
  background-color: #5a6268;
}

.intro-section {
  padding: 60px 20px;
  background-color: #f8f8f8;
}

.intro-section .container {
  max-width: 800px;
  margin: 0 auto;
}

.intro-section h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
  color: #333;
}

.intro-section p {
  font-size: 1.1rem;
  line-height: 1.6;
  margin-bottom: 20px;
  color: #555;
}
</style>
