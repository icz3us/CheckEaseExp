<template>
  <div>
    <!-- Burger Icon for Phone Screens -->
    <div 
      v-if="isPhoneView" 
      class="burger-menu-icon position-fixed"
      @click="toggleSidebar">
      <i class="material-icons">menu</i>
    </div>

    <!-- Sidebar -->
    <div 
      class="sidebar d-flex flex-column align-items-center py-4" 
      :class="{ 'hidden': isPhoneView && isCollapsed }" 
      id="sidebar">
      <!-- Logo (hidden in phone view when collapsed) -->
      <img 
        v-if="!isCollapsed || !isPhoneView" 
        src="/public/images/logo.png" 
        alt="Logo" 
        class="mb-4 logo">

      <div class="nav-icons d-flex flex-column align-items-center justify-content-center flex-grow-1">
        <router-link to="/StudentHome" class="nav-icon mb-3 button">
          <i class="material-icons">apps</i>
        </router-link>
        <router-link to="/StudentAttendance" class="nav-icon mb-3 button">
          <i class="material-icons">event</i>
        </router-link>
        <router-link to="/StudentClearance" class="nav-icon mb-3 button">
          <i class="material-symbols-outlined">inventory</i>
        </router-link>
      </div>

      <div class="logout-icon mt-auto" @click="logout">
        <i class="material-icons">exit_to_app</i>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "Sidebar",
  data() {
    return {
      isCollapsed: true, // Sidebar is initially collapsed
      isPhoneView: window.innerWidth <= 768, // Detect phone-sized screens
    };
  },
  methods: {
    toggleSidebar() {
      this.isCollapsed = !this.isCollapsed; // Toggle sidebar visibility
    },
    logout() {
      localStorage.removeItem("authToken"); // Clear auth data if stored
      this.$router.push("/Login");
    },
    updateView() {
      this.isPhoneView = window.innerWidth <= 768; // Detect phone-sized screens
      if (!this.isPhoneView) {
        // Reset sidebar state for larger screens
        this.isCollapsed = false;
      } else {
        // Automatically collapse sidebar on phone screens
        this.isCollapsed = true;
      }
    },
  },
  mounted() {
    window.addEventListener("resize", this.updateView);
    this.updateView(); // Ensure initial state is set correctly
  },
  beforeDestroy() {
    window.removeEventListener("resize", this.updateView);
  },
};
</script>
<style scoped>
/* Sidebar Styles */
#sidebar {
  width: 60px;
  background-color: #DBF4F8 !important;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
  z-index: 1000;
  transition: transform 0.3s ease, opacity 0.3s ease;
  overflow: hidden; /* Prevent content overflow */
}

#sidebar.hidden {
  transform: translateX(-100%); /* Move sidebar out of view */
  opacity: 0; /* Ensure it's visually hidden */
}

.logo {
  width: 40px;
  transition: opacity 0.3s ease, transform 0.3s ease;
}

.nav-icons {
  flex-grow: 1;
  display: flex;
  justify-content: center;
}

.nav-icon {
  text-decoration: none;
  color: inherit;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 40px;
  height: 40px;
  border-radius: 20px;
  transition: background-color 0.3s ease;
}

.nav-icon:hover {
  background-color: #78B7D0;
  color: white;
}

/* Burger Menu Icon */
.burger-menu-icon {
  z-index: 1100;
  cursor: pointer;
  top: 7px;
  left: 5px;
  position: fixed;
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.burger-menu-icon i {
  font-size: 30px;
}

/* Responsive Adjustments */
@media (max-width: 576px) {
  #sidebar {
    width: 60px;
  }
  .logo {
    display: none;
  }
}

</style>