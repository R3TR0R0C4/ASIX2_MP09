<template>
  <urbex-header></urbex-header>
  <div id="app">
    <div class="hero">
      <h1>About Urban Exploration Adventures</h1>
      <p class="hero-intro">
        Discover the story behind this site, the explorer who built it, and the spirit that drives our community. Urban Exploration Adventures is more than a photo diary—it's a tribute to curiosity, urban history, and responsible adventure.
      </p>
    </div>
    <section class="cards-section">
      <div class="content-card">
        <h2>Our Mission</h2>
        <p>
          We aim to inspire and guide urban explorers of all levels. Whether you're a seasoned urbexer or just starting out, our mission is to share knowledge, foster respect, and celebrate the unseen corners of the city.
        </p>
      </div>
      <div class="content-card">
        <h2>Meet the Explorer</h2>
        <p>
          Hi, I'm Alex! With over six years of exploring hidden spaces, I've learned that every abandoned building has a unique story. Through this site, I hope to capture that magic and share it with fellow adventurers.
        </p>
      </div>
      <div class="content-card">
        <h2>How It Began</h2>
        <p>
          My very first explore was a forgotten train station tucked behind overgrown tracks. That spark of excitement ignited a lifelong passion to document the mysterious, the beautiful, and the eerie within urban spaces.
        </p>
      </div>
      <div class="content-card">
        <h2>Join the Journey</h2>
        <p>
          Urban Exploration Adventures welcomes stories, tips, and inspirations from explorers worldwide.<br>
          Want to contribute or just say hi? <a href="mailto:urbex.adventures@email.com" class="contact-link">Contact us here</a>.
        </p>
      </div>
    </section>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';

export default defineComponent({
  name: 'AboutPage',
});
</script>
