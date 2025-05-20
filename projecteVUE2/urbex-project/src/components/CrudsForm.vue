<template>
  <div class="crud-container">
    <h2>Manage Urbex Locations</h2>

    <!-- Form for Adding/Editing Items -->
    <form
      @submit.prevent="isEditing ? updateEntry() : addEntry()"
      class="entry-form"
    >
      <h3>{{ isEditing ? "Edit Location" : "Add New Location" }}</h3>
      <div>
        <label for="name">Name of Place:</label>
        <input type="text" id="name" v-model="formData.name" required />
      </div>
      <div>
        <label for="date">Date of Visit:</label>
        <input type="date" id="date" v-model="formData.date" required />
      </div>
      <div>
        <label for="description">Small Description:</label>
        <textarea
          id="description"
          v-model="formData.description"
          required
        ></textarea>
      </div>
      <div>
        <label for="remarkableThings">Remarkable Things:</label>
        <textarea
          id="remarkableThings"
          v-model="formData.remarkableThings"
        ></textarea>
      </div>
      <div>
        <label for="imageUrl">Image URL:</label>
        <input
          type="url"
          id="imageUrl"
          v-model="formData.imageUrl"
          placeholder="https://example.com/image.jpg"
        />
      </div>
      <button type="submit">
        {{ isEditing ? "Save Changes" : "Add Location" }}
      </button>
      <button type="button" v-if="isEditing" @click="cancelEdit">Cancel</button>
    </form>

    <!-- List of Existing Items -->
    <div class="entries-list">
      <h3>Existing Locations</h3>
      <div v-if="locations.length === 0" class="no-entries">
        <p>No locations added yet. Use the form above to add your first one!</p>
      </div>
      <ul v-else>
        <li v-for="location in locations" :key="location.id" class="entry-item">
          <h4>{{ location.name }}</h4>
          <p><strong>Date:</strong> {{ location.date }}</p>
          <p><strong>Description:</strong> {{ location.description }}</p>
          <p v-if="location.remarkableThings">
            <strong>Remarkable:</strong> {{ location.remarkableThings }}
          </p>
          <div v-if="location.imageUrl" class="image-container">
            <img
              :src="location.imageUrl"
              :alt="'Image of ' + location.name"
              class="entry-image"
            />
          </div>
          <div class="actions">
            <button @click="startEdit(location)" class="edit-btn">Edit</button>
            <button @click="deleteEntry(location.id)" class="delete-btn">
              Delete
            </button>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "UrbexCrudManager", // Multi-word component name
  data() {
    return {
      locations: [
        // Sample initial data - remove or replace with fetched data in a real app
        {
          id: 1,
          name: "Abandoned Power Plant",
          date: "2023-05-15",
          description:
            "A sprawling industrial complex, silent for decades. The air still smells of oil and rust.",
          remarkableThings:
            "Intact main control room with all dials, towering smokestacks against the sunset.",
          imageUrl:
            "https://images.unsplash.com/photo-1500879928482-657e1599alsj?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=800&fit=max&ixid=eyJhcHBfaWQiOjEyMDd9", // Example image URL
        },
        {
          id: 2,
          name: "Forgotten Grand Theatre",
          date: "2023-08-20",
          description:
            "Once a majestic venue for arts, now decaying gracefully under layers of dust.",
          remarkableThings:
            "Ornate balconies still holding their shape, dusty velvet seats in the main hall, remnants of old posters.",
          imageUrl:
            "https://images.unsplash.com/photo-1579704462880-02a34ea91df3?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=800&fit=max&ixid=eyJhcHBfaWQiOjEyMDd9", // Example image URL
        },
      ],
      formData: {
        // Used for the form, both for new and editing items
        id: null,
        name: "",
        date: "",
        description: "",
        remarkableThings: "",
        imageUrl: "",
      },
      isEditing: false, // Flag to switch form mode between Add and Edit
      nextId: 3, // Simple ID generator for new items (in a real app, backend would handle this)
    };
  },
  methods: {
    generateId() {
      // Basic ID generation. In a real app, IDs come from a database.
      const id = this.nextId;
      this.nextId++;
      return id;
    },
    resetForm() {
      this.formData = {
        id: null,
        name: "",
        date: "",
        description: "",
        remarkableThings: "",
        imageUrl: "",
      };
      this.isEditing = false;
    },
    addEntry() {
      // Basic validation
      if (
        !this.formData.name ||
        !this.formData.date ||
        !this.formData.description
      ) {
        alert(
          "Name, Date of Visit, and Small Description are required fields."
        );
        return;
      }
      const newLocation = { ...this.formData, id: this.generateId() };
      this.locations.push(newLocation);
      this.resetForm();
    },
    startEdit(location) {
      this.isEditing = true;
      // Create a copy of the location data to edit, so original isn't affected until save
      this.formData = { ...location };
    },
    updateEntry() {
      if (
        !this.formData.name ||
        !this.formData.date ||
        !this.formData.description
      ) {
        alert(
          "Name, Date of Visit, and Small Description are required fields."
        );
        return;
      }
      const index = this.locations.findIndex(
        (loc) => loc.id === this.formData.id
      );
      if (index !== -1) {
        // Update the item in the array.
        // Vue 3 reactivity will handle the update in the list.
        this.locations.splice(index, 1, { ...this.formData });
      }
      this.resetForm();
    },
    deleteEntry(locationId) {
      if (
        confirm(
          "Are you sure you want to delete this location? This action cannot be undone."
        )
      ) {
        this.locations = this.locations.filter((loc) => loc.id !== locationId);
        // If the item being deleted was also the one in the edit form, reset the form
        if (this.isEditing && this.formData.id === locationId) {
          this.resetForm();
        }
      }
    },
    cancelEdit() {
      this.resetForm();
    },
  },
};
</script>

<style scoped>
.crud-container {
  max-width: 900px;
  margin: 30px auto;
  padding: 25px;
  background-color: #f8f9fa; /* Light grey background */
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

.crud-container h2,
.entry-form h3,
.entries-list h3 {
  color: #343a40; /* Dark grey for headings */
  text-align: center;
  margin-bottom: 25px;
}

.entry-form {
  margin-bottom: 35px;
  padding: 25px;
  background-color: #ffffff; /* White background for form */
  border-radius: 8px;
  border: 1px solid #dee2e6; /* Light border */
}

.entry-form div {
  margin-bottom: 18px;
}

.entry-form label {
  display: block;
  margin-bottom: 6px;
  font-weight: 600;
  color: #495057; /* Slightly lighter grey for labels */
}

.entry-form input[type="text"],
.entry-form input[type="date"],
.entry-form input[type="url"],
.entry-form textarea {
  width: calc(100% - 24px); /* Full width minus padding */
  padding: 10px 12px;
  border: 1px solid #ced4da; /* Standard input border */
  border-radius: 5px;
  font-size: 1rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.entry-form input[type="text"]:focus,
.entry-form input[type="date"]:focus,
.entry-form input[type="url"]:focus,
.entry-form textarea:focus {
  border-color: #007bff; /* Blue border on focus */
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); /* Blue shadow on focus */
}

.entry-form textarea {
  min-height: 100px;
  resize: vertical;
}

.entry-form button {
  padding: 10px 18px;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 1rem;
  font-weight: 500;
  margin-right: 10px;
  transition: background-color 0.2s ease;
}

.entry-form button[type="submit"] {
  background-color: #007bff; /* Primary blue */
}
.entry-form button[type="submit"]:hover {
  background-color: #0056b3;
}

.entry-form button[type="button"] {
  /* Cancel button */
  background-color: #6c757d; /* Secondary grey */
}
.entry-form button[type="button"]:hover {
  background-color: #545b62;
}

.entries-list h3 {
  border-bottom: 2px solid #e9ecef; /* Separator for the list heading */
  padding-bottom: 12px;
}

.no-entries p {
  text-align: center;
  color: #6c757d;
  font-size: 1.1rem;
  padding: 20px;
  background-color: #e9ecef;
  border-radius: 5px;
}

.entries-list ul {
  list-style-type: none;
  padding: 0;
}

.entry-item {
  background-color: #ffffff;
  border: 1px solid #dee2e6;
  border-radius: 8px;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.entry-item h4 {
  margin-top: 0;
  margin-bottom: 12px;
  font-size: 1.4em;
  color: #007bff; /* Blue for item titles */
}

.entry-item p {
  margin: 8px 0;
  color: #495057;
  line-height: 1.7;
}
.entry-item p strong {
  color: #343a40;
}

.image-container {
  margin-top: 15px;
  text-align: center; /* Center the image if it's smaller than container */
}

.entry-item .entry-image {
  max-width: 100%;
  height: auto;
  max-height: 300px; /* Control max image height */
  border-radius: 6px;
  border: 1px solid #e9ecef;
  object-fit: cover; /* Ensures image covers the area nicely */
}

.entry-item .actions {
  margin-top: 18px;
  display: flex;
  gap: 10px; /* Spacing between buttons */
}

.entry-item .actions button {
  padding: 8px 14px;
  font-size: 0.95em;
  border-radius: 5px;
  cursor: pointer;
  border: none;
  transition: background-color 0.2s ease, transform 0.1s ease;
}
.entry-item .actions button:hover {
  transform: translateY(-1px); /* Slight lift on hover */
}

.edit-btn {
  background-color: #ffc107; /* Warning yellow */
  color: #212529;
}
.edit-btn:hover {
  background-color: #e0a800;
}

.delete-btn {
  background-color: #dc3545; /* Danger red */
  color: white;
}
.delete-btn:hover {
  background-color: #c82333;
}
</style>
