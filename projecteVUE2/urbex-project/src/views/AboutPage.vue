<template>
  <div class="explore-page container">
    <h1>Explore Our Discoveries</h1>
    <p>
      This page is where you'll showcase your urbex photography, stories, and
      findings. You can add sections for:
    </p>
    <ul>
      <li>
        <strong>Galleries:</strong> Categorized by location, type of building,
        or theme.
      </li>
      <li>
        <strong>Blog Posts/Stories:</strong> Detailed accounts of your
        explorations.
      </li>
      <li>
        <strong>Interactive Maps:</strong> (More advanced) To show regions
        you've explored.
      </li>
      <li>
        <strong>Featured Locations:</strong> Highlight some of your best work.
      </li>
    </ul>

    <div class="placeholder-content">
      <h3>Coming Soon: Amazing Urbex Content!</h3>
      <p>
        We're currently curating a collection of breathtaking photos and
        intriguing stories from our latest urban explorations. Check back soon
        for updates!
      </p>
    </div>
  </div>
</template>

<script>
export default {
  name: "ExplorePage", // Assuming you keep this name, or change to "CrudPage"
};
</script>

<style scoped>
.explore-page {
  padding: 40px 20px;
  max-width: 1000px;
  margin: 0 auto;
}

.explore-page h1 {
  font-size: 3rem;
  margin-bottom: 25px;
  color: #333;
  text-align: center;
}

.explore-page p {
  margin-bottom: 15px;
  color: #555;
}

.explore-page ul {
  list-style-type: disc;
  margin-left: 20px;
  margin-bottom: 30px;
}

.explore-page ul li {
  margin-bottom: 8px;
  color: #555;
}

.placeholder-content {
  background-color: #e9ecef;
  border-radius: 8px;
  padding: 40px;
  text-align: center;
  margin-top: 40px;
}

.placeholder-content h3 {
  font-size: 2rem;
  margin-bottom: 20px;
  color: #007bff;
}

.placeholder-content p {
  font-size: 1.1rem;
  margin-bottom: 30px;
  color: #666;
}
/* Insert ⏎ at the end of the file/style block, if not already there */
</style>
