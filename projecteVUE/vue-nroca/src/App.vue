<template>
  <urbex-header></urbex-header>
  <div id="app">
    <div class="hero">
      <h1>Urban Exploration Adventures</h1>
      <p class="hero-intro">
        Welcome to the world of urban exploration, or "urbex"! This is your gateway to the forgotten corners of our cities—abandoned factories, secret tunnels, and lost rooftops yearning to be discovered.
      </p>
    </div>
    <section class="cards-section">
      <div class="content-card">
        <h2>Who Am I?</h2>
        <p>
          My name is Alex, a city dweller with a curiosity for the shadows. I've been exploring abandoned sites and hidden urban gems for over six years, turning each adventure into a story and a set of photos for this diary.
        </p>
      </div>
      <div class="content-card">
        <h2>Why Urbex?</h2>
        <p>
          There’s a unique thrill in stepping where most don't dare. Urban exploration allows us to witness the forgotten history of our cities and the beauty that emerges as nature reclaims man's creations.
        </p>
      </div>
      <div class="content-card">
        <h2>Featured Explores</h2>
        <ul>
          <li>The Sunken Railway Depot</li>
          <li>Old Mill on Riverside</li>
          <li>Midtown Power Plant</li>
        </ul>
      </div>
      <div class="content-card">
        <h2>Safety & Ethics</h2>
        <p>
          Explore wisely! Always seek permission when required, respect property, never vandalize, and never reveal sensitive locations. Take only memories and photos—leave no mark behind.
        </p>
      </div>
      <div class="content-card">
        <h2>Get Involved</h2>
        <p>
          Want to join a future exploration, share your stories, or ask questions? <br>
          <a href="mailto:urbex.adventures@email.com" class="contact-link">Contact me here.</a>
        </p>
      </div>
    </section>
  </div>
</template>

<script>
import UrbexHeader from './components/UrbexHeader.vue';
import Home from '@/Home.vue'
import About from '@/About.vue'

export default {
  name: 'App',
  components: {
    UrbexHeader
  }
}
</script>