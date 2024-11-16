<template>
  <header class="d-flex justify-content-end align-items-center p-2 header">
    <!-- Email Notification Dropdown Button -->
    <div class="dropdown me-3" ref="dropdown">
      <button 
        class="btn btn-light position-relative d-flex justify-content-center align-items-center shadow-notification"
        id="dropdownMenuButton" 
        @click="toggleDropdown"
        aria-expanded="false"
        style="height: 50px; width: 52px; border-radius: 50%;">
        <span class="material-icons">email</span>
        <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
          <span class="visually-hidden">New notifications</span>
        </span>
      </button>
      <!-- Dropdown items -->
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" ref="dropdownMenu">
        <li><a class="dropdown-item" href="#">No new notifications</a></li>
        <li><a class="dropdown-item" href="#">Another notification</a></li>
        <li><a class="dropdown-item" href="#">More notifications</a></li>
      </ul>
    </div>

    <!-- Account Information -->
    <div class="account-info d-flex flex-column justify-content-center bg-light px-3 shadow-account">
      <span class="fw-bold">LName, FName M.I.</span> 
      <span>202xxxxxxx@gordoncollege.edu.ph</span> 
    </div>
  </header>
</template>

<script>
export default {
  name: "Header",
  methods: {
    toggleDropdown() {
      const dropdownElement = this.$refs.dropdown;
      const dropdownMenu = this.$refs.dropdownMenu;
      if (dropdownMenu.classList.contains('show')) {
        dropdownMenu.classList.remove('show');
        dropdownElement.classList.remove('show');
        dropdownElement.setAttribute('aria-expanded', 'false');
      } else {
        dropdownMenu.classList.add('show');
        dropdownElement.classList.add('show');
        dropdownElement.setAttribute('aria-expanded', 'true');
      }
    }
  }
};
</script>

<style scoped>
.header {
  position: fixed;
  top: 0;
  right: 0;
  z-index: 1000; 
  background: transparent; 
  border: none;
}

.material-icons {
  font-size: 1.5rem;
}

.account-info {
  border: 1px solid #dee2e6; 
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 50px; 
  width: 270px;
  border-radius: 20px;
}

.shadow-account {
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); 
}

.shadow-notification {
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); 
}

span {
  font-size: 0.9rem;
}

.fw-bold {
  font-weight: bold;
}

/* Responsive: Profile Circle on Small Screens */
@media (max-width: 576px) {
  .account-info {
    height: 50px; 
    width: 50px; /* Circle size */
    border-radius: 50%; /* Makes it a circle */
    padding: 0; /* Remove padding */
    justify-content: center;
    align-items: center; /* Center content */
    text-align: center; /* Center text if any */
  }

  .account-info span {
    display: none; /* Hide the text */
  }

  .account-info::before {
    content: "👤"; /* You can use an emoji or a placeholder image here */
    font-size: 2rem; /* Size of the icon */
  }
}
</style>
