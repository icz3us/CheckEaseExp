<template>
  <div id="sidebar" class="d-flex flex-column align-items-center bg-light py-4">
    <img src="/public/images/logo.png" alt="Logo" class="mb-4 logo">

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
</template>

<script>
export default {
  name: "Sidebar",
  methods: {
    logout() {
      // Clear any authentication data if stored (e.g., localStorage)
      localStorage.removeItem('authToken'); // Assuming an auth token is stored

      
      this.$router.push('/Login');
    }
  }
};
</script>


<style scoped>
#sidebar {
  width: 60px;
  background-color: #DBF4F8 !important;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
  z-index: 1000;
}

.logo {
  width: 40px;
}

.material-icons {
  font-size: 24px;
  cursor: pointer;
}

.logout-icon {
  margin-bottom: 20px;
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

.nav-icons i {
  margin-bottom: 0;
}
</style>
