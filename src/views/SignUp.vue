<template>
  <div id="app" class="container-fluid p-0">
    <div class="background-container">
      <div class="square" v-for="n in 26" :key="n" :class="'square-' + n"></div>
    </div>

    <div class="container position-absolute top-50 start-50 translate-middle">
      <div class="row min-vh-100 justify-content-center align-items-center">
        <!-- Information Section -->
        <div class="col-md-6 col-lg-5 d-flex flex-column justify-content-center align-items-center text-center mb-md-0 mb-5" v-if="showInfoSection">
          <div class="mb-5">
            <div class="logo-container mb-4">
              <img src="/public/images/checkEaseLogo.png" alt="logo here" class="img-fluid" style="max-width: 100%; height: auto;" />
            </div>
            <h1>What is Check Ease?</h1>
            <p>
              A web application that simplifies the process of managing and viewing attendance and clearance records.
              It allows students to easily track their attendance and clearance status, while faculty and/or student
              organizations can update these records.
            </p>
            <p class="text-secondary">
              <a href="#" class="text-decoration-none">About the developers?</a>
            </p>
          </div>
        </div>

        <!-- Signup Form Section -->
        <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center align-items-center mb-5">
          <div class="box-container" style="max-width: 600px;">
            <h1 class="text-center mt-4"><b>Sign up</b></h1>
            <p class="text-center text-secondary">
              Already have an account?
              <router-link to="/login" class="text-decoration-none">Click here to Log in!</router-link>
            </p>

            <form @submit.prevent="submitForm" class="px-3 py-2">
              <div class="row">
                <div class="col-md-6 mb-2">
                  <label for="firstname" class="form-label">First name</label>
                  <input type="text" id="firstname" v-model="firstname" class="form-control" required>
                </div>

                <div class="col-md-6 mb-2">
                  <label for="lastname" class="form-label">Last name</label>
                  <input type="text" id="lastname" v-model="lastname" class="form-control" required>
                </div>
              </div>
              <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="uername" id="username" v-model="username" class="form-control" required>
              </div>

              <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" v-model="email" class="form-control" required>
              </div>

              <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" v-model="password" class="form-control" required>
              </div>

              <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select id="role" v-model="role" class="form-select" required>
                  <option value="" disabled selected>Select your role</option>
                  <option value="student">Student</option>
                  <option value="teacher">Teacher</option>
                </select>
              </div>

              <button type="submit" class="btn btn-primary w-100 mb-3">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'SignUp',
  data() {
    return {
      firstname: '',
      lastname: '',
      email: '',
      username: '',
      password: '',
      role: '',
      showInfoSection: true
    };
  },
  mounted() {
    this.checkScreenSize();
    window.addEventListener('resize', this.checkScreenSize);
  },
  beforeUnmount() {
    window.removeEventListener('resize', this.checkScreenSize);
  },
  methods: {
    checkScreenSize() {
      this.showInfoSection = window.innerWidth >= 768; // Show info section on screens larger than 768px (medium)
    },
    async submitForm() {
      try {
        const response = await axios.post('http://localhost/vue-login-backend/signup.php', {
          firstname: this.firstname,
          lastname: this.lastname,
          username: this.username,
          email: this.email,
          password: this.password,
          role: this.role
        });

        const result = response .data;

        if (result.success) {
          // Redirect to login page after successful signup
          this.$router.push('/login'); 
        } else {
          // Display error message from server
          alert(result.message); 
        }
      } catch (error) {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
      }
    }
  }
};
</script>

<style scoped>
body {
  font-family: 'Outfit', sans-serif;
  min-height: 100vh;
}

.box-container {
  background-color: white;
  border-radius: 8px;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  padding: 20px;
  width: 100%; 
}

.background-container {
  position: fixed; 
  z-index: -1; 
  top: 0;
  left: 0;
  width: 100%; 
  height: 100%; 
}

.square {
  position: absolute;
  background-color: rgba(0, 123, 255, 0.1);
  opacity: 0.5;
  border-radius: 10%;
}

.square-1 { width: 100px; height: 100px; top: 10%; left: 10%; }
.square-2 { width: 150px; height: 150px; top: 20%; left: 60%; }
.square-3 { width: 120px; height: 120px; top: 70%; left: 30%; }
.square-4 { width: 130px; height: 130px; top: 40%; left: 80%; }
.square-5 { width: 140px; height: 140px; top: 30%; left: 20%; }
.square-6 { width: 110px; height: 110px; top: 60%; left: 40%; }
.square-7 { width: 160px; height: 160px; top: 50%; left: 50%; }
.square-8 { width: 90px; height: 90px; top: 20%; left: 80%; }
.square-9 { width: 150px; height: 150px; top: 80%; left: 10%; }
.square-10 { width: 130px; height: 130px; top: 10%; left: 50%; }
.square-11 { width: 170px; height: 170px; top: 70%; left: 20%; }
.square-12 { width: 120px; height: 120px; top: 90%; left: 60%; }
.square-13 { width: 140px; height: 140px; top: 30%; left: 90%; }
.square-14 { width: 100px; height: 100px; top: 20%; left: 10%; }
.square-15 { width: 160px; height: 160px; top: 40%; left: 30%; }
.square-16 { width: 110px; height: 110px; top: 60%; left: 50%; }
.square-17 { width: 150px; height: 150px; top: 50%; left: 80%; }
.square-18 { width: 120px; height: 120px; top: 10%; left: 30%; }
.square-19 { width: 130px; height: 130px; top: 80%; left: 40%; }
.square-20 { width: 140px; height: 140px; top: 10%; left: 60%; }
.square-21 { width: 90px; height: 90px; top: 20%; left: 70%; }
.square-22 { width: 150px; height: 150px; top: 30%; left: 20%; }
.square-23 { width: 130px; height: 130px; top: 50%; left: 10%; }
.square-24 { width: 170px; height: 170px; top: 70%; left: 30%; }
.square-25 { width: 120px; height: 120px; top: 90%; left: 50%; }
.square-26 { width: 140px; height: 140px; top: 20%; left: 80%; }
</style>
