<template>
  <div class="header-container">
    <!-- Main Card Header -->
    <div class="card header-card">
      <div class="card-body d-flex align-items-center justify-content-between">
        <!-- Dashboard Title -->
        <h3 class="card-title mb-0 d-none d-sm-block"><b>{{ cardTitle }}</b></h3> 

        <!-- Profile Section -->
        <div class="profile-section d-flex align-items-center">
          <!-- Email Notification Dropdown -->
          <div class="dropdown me-3 position-relative" ref="dropdown">
            <button
              class="btn btn-light p-0 position-relative"
              type="button"
              @click="toggleDropdown"
              aria-expanded="false"
              style="border: none; background: transparent;"
            >
              <span class="material-icons">mail</span>
              <span
                class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"
                style="font-size: 0.75rem;"
              >
                <span class="visually-hidden">New notifications</span>
              </span>
            </button>
            <!-- Dropdown items -->
            <ul class="dropdown-menu" ref="dropdownMenu">
              <li><a class="dropdown-item" href="#">No new notifications</a></li>
              <li><a class="dropdown-item" href="#">Another notification</a></li>
              <li><a class="dropdown-item" href="#">More notifications</a></li>
            </ul>
          </div>

          <!-- User Info -->
          <div class="user-info d-flex align-items-center">
            <i class="material-icons">account_circle</i>
            <div class="ms-2">
              <strong>L.Name, Fname M.I.</strong><br />
              <small>202xxxxxx@yourdomain.edu.ph</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AdminHeader',
  computed: {
    cardTitle() {
      switch (this.$route.path) {
        case '/clearance' :
          return 'Clearance';
        case '/ClearanceRecord':
          return 'Clearance';
        case '/attendance':
          return 'Attendance';
        case '/home':
          return 'Dashboard';
        case '/class':
          return 'Create & View Class';
        case '/ViewStudentAttendance':
          return 'View Student Attendance';
        default:
          return 'Dashboard';
      }
    }
  },
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
.header-container {
  position: fixed;
  top: 0;
  right: 0;
  left: 250px; /* Adjust based on sidebar width */
  width: calc(100% - 250px); /* Adjust based on sidebar width */
  padding: 10px 20px;
  z-index: 1000;
  transition: all 0.3s ease;
}

.header-card {
  background-color: #DBF4F8;
  border-radius: 15px;
  width: 100%;
  height: auto;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.card-body {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
}

.card-title {
  font-size: 1.5rem;
  color: black;
}

.profile-section {
  display: flex;
  align-items: center;
  font-size: 14px;
}

.user-info {
  font-size: 14px;
  color: black;
}

.material-icons {
  font-size: 24px;
  color: black;
}

.profile-section i.material-icons {
  font-size: 24px;
}

.user-info i.material-icons {
  font-size: 36px;
  color: black;
  margin-right: 8px;
}

@media (max-width: 992px) {
  .header-container {
    left: 80px; /* Adjust based on collapsed sidebar width */
    width: calc(100% - 80px); /* Adjust based on collapsed sidebar width */
  }
}

@media (max-width: 768px) {
  .card-title {
    font-size: 1.25rem;
  }

  .profile-section {
    font-size: 12px;
  }

  .user-info {
    font-size: 12px;
  }

  .material-icons {
    font-size: 20px;
  }

  .profile-section i.material-icons {
    font-size: 20px;
  }

  .user-info i.material-icons {
    font-size: 28px;
  }
}

@media (max-width: 576px) {
  .header-container {
    left: 0;
    width: 100%;
    padding: 10px;
    z-index: 999; /* Ensure header is below the hamburger menu */
  }

  .card-title {
    display: none;
  }

  .profile-section {
    flex-direction: column;
    align-items: flex-start;
  }

  .user-info {
    font-size: 12px;
    margin-top: 8px;
  }

  .material-icons {
    font-size: 18px;
  }

  .profile-section i.material-icons {
    font-size: 18px;
  }

  .user-info i.material-icons {
    font-size: 28px;
  }
}
</style>
