<template>
  <header>
    <nav>
      <router-link to="/">Home</router-link> |
      <router-link to="/about">About</router-link>
    </nav>
  </header>
</template>


<script lang="ts">
import { defineComponent } from 'vue';

export default defineComponent({
  name: 'AppHeader',
});
</script>

<style scoped>
.urbex-header {
  width: 100vw;
  background: linear-gradient(120deg, #232526 0%, #414345 100%);
  box-shadow: 0 4px 32px rgba(20, 20, 25, 0.22);
  border-bottom-left-radius: 40px;
  border-bottom-right-radius: 40px;
  color: #e4e6e9;
  padding: 0 0 0.3rem 0;
  position: sticky;
  top: 0;
  z-index: 100;
}

.header-inner {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1100px;
  margin: 0 auto;
  padding: 1.2rem 2rem 0.8rem 2rem;
}

.site-title {
  font-size: 1.7rem;
  color: #a2ed56;
  font-weight: bold;
  letter-spacing: 2px;
  text-shadow: 0 2px 24px #2f3b1b99;
}

.header-nav {
  display: flex;
  gap: 1.5rem;
}

.header-link {
  color: #71ecd5;
  text-decoration: none;
  font-size: 1.08rem;
  transition: color 0.2s;
  font-family: inherit;
}

.header-link:hover {
  color: #a2ed56;
  text-decoration: underline;
}

/* Responsive */
@media (max-width: 700px) {
  .header-inner {
    flex-direction: column;
    align-items: flex-start;
    padding: 1rem 0.8rem 0.7rem 1rem;
    gap: 0.7rem;
  }
  .urbex-header {
    border-bottom-left-radius: 16px;
    border-bottom-right-radius: 16px;
  }
  .header-nav {
    gap: 0.9rem;
  }
  .site-title {
    font-size: 1.22rem;
  }
}
</style>