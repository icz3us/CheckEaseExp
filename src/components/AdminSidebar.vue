Richard Del Carmen Jr.
<template>
  <div class=" postion-fixed">
    <!-- Hamburger Icon for Mobile -->
    <button
      class="btn d-md-none"
      @click="toggleSidebar"
      style="position: fixed; top: 10px; left: 10px; z-index: 1001; background: none; border: none; padding: 0;"
    >
      <i class="material-icons" style="color: black;">menu</i>
    </button>

    <!-- Sidebar -->
    <div
      :class="['sidebar', { 'sidebar-hidden': isSidebarHidden }]"
      style="width: 250px; height: 100vh;"
    >
      <!-- Logo Section -->
      <div class="text-center py-3">
        <img src="/public/images/checkEaseLogo.png" alt="Check Ease Logo" width="150" />
      </div>

      <!-- Menu Items -->
      <ul class="list-unstyled mt-4">
        <li>
          <router-link
            to="/home"
            class="sidebar-item"
            :class="{ active: isActive('/home') }"
          >
            <i class="material-icons">dashboard</i> Dashboard
          </router-link>
        </li>
        <li>
          <router-link
            to="/class"
            class="sidebar-item"
            :class="{ active: isActive('/class') }"
          >
            <i class="material-icons">add_circle</i> Create Class
          </router-link>
        </li>

        <!-- Attendance Dropdown -->
        <li>
          <div
            class="sidebar-item"
            @click="toggleAttendanceDropdown"
            style="cursor: pointer;"
          >
            <i class="material-icons">event</i> Attendance
            <i class="material-icons ml-auto">
              {{ isAttendanceDropdownOpen ? 'expand_less' : 'expand_more' }}
            </i>
          </div>
          <ul v-if="isAttendanceDropdownOpen" class="dropdown-list pl-4">
            <li>
              <router-link
                to="/attendance"
                class="sidebar-sub-item"
                :class="{ active: isActive('/attendance') }"
              >
                Take Attendance
              </router-link>
            </li>
            <li>
              <router-link
                to="/ViewStudentAttendance"
                class="sidebar-sub-item"
                :class="{ active: isActive('/ViewStudentAttendance') }"
              >
                View Student Attendance
              </router-link>
            </li>
          </ul>
        </li>

        <li>
          <router-link
            to="/clearance"
            class="sidebar-item"
            :class="{ active: isActive('/clearance') }"
          >
            <i class="material-icons">assignment</i> Clearance
          </router-link>
        </li>
      </ul>

      <!-- Logout Icon Fixed at Bottom -->
      <div class="logout-icon" @click="logout">
        <i class="material-icons">exit_to_app</i> <b>Logout</b>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isSidebarHidden: false,
      isAttendanceDropdownOpen: false,
      currentRoute: '/home',
    };
  },
  mounted() {
    this.handleResize();
    window.addEventListener('resize', this.handleResize);
  },
  beforeDestroy() {
    window.removeEventListener('resize', this.handleResize);
  },
  methods: {
    toggleSidebar() {
      this.isSidebarHidden = !this.isSidebarHidden;
    },
    toggleAttendanceDropdown() {
      this.isAttendanceDropdownOpen = !this.isAttendanceDropdownOpen;
    },
    handleResize() {
      this.isSidebarHidden = window.innerWidth < 768;
    },
    logout() {
      localStorage.removeItem('authToken'); 
      this.$router.push('/Login');
    },
    isActive(route) {
      return this.$route.path === route;
    },
  },
};
</script>

<style scoped>
.sidebar {
  background-color: #DBF4F8;
  
  color: #000;
  position: fixed;
  top: 0;
  left: 0;
  overflow-y: auto;
  transition: transform 0.3s ease;
  z-index: 1000;
  display: flex;
  flex-direction: column;
  padding-top: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5) !important;
}

.sidebar-hidden {
  transform: translateX(-100%);
}

.sidebar-item {
  padding: 18px;
  font-size: 20px;
  cursor: pointer;
  color: gray;
  display: flex;
  align-items: center;
  text-decoration: none;
}

.sidebar-item i {
  font-size: 26px;
  margin-right: 12px;
}

.sidebar-item.active {
  color: black;
}

.sidebar-item:hover {
  color: black;
}

.sidebar-item:not(.active) {
  color: gray;
}

.dropdown-list {
  list-style: none;
  padding-left: 0;
  margin-top: 0;
}

.sidebar-sub-item {
  padding: 12px 18px;
  font-size: 18px;
  color: gray;
  display: block;
  text-decoration: none;
}

.sidebar-sub-item.active {
  color: black;
}

.logout-icon {
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  padding: 18px;
  color: #000;
  position: absolute;
  bottom: 0;
  width: 100%;
}

button {
  background: none;
  border: none;
  padding: 0;
}

@media (max-width: 768px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: fixed;
    top: 0;
    left: 0;
    box-shadow: none;
    z-index: 1000; /* Ensure sidebar is above other content */
  }

  .sidebar-hidden {
    transform: translateY(-100%);
  }

  .sidebar-item {
    padding: 10px;
  }

  .logout-icon {
    position: relative;
    bottom: auto;
  }
}
</style>
