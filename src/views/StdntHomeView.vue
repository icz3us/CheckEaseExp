<template>
  <div class="welcome-section d-flex flex-column align-items-start">
    <div class="welcome-text" style="padding: 20px; margin-right: 250px; margin-bottom: 20px;">
      <img src="/public/images/2s.png" alt="Logo" class="logo">
      <h1>Hi, Student! 👋</h1>
      <h2>Welcome to Check Ease!</h2>
      <p>Take and Track your Students’ Clearances and Attendance here!</p>
    </div>
    
    <div class="cards-section" style="margin-top: 5px; margin-right: 500px;">
      <div class="row justify-content-center">
        <div class="col-md-6 col-12 mb-4"> <!-- First card -->
          <div class="dashboard-card">
            <div class="card custom-card h-100">
              <div class="card-body d-flex align-items-center">
                <img src="/public/images/1.png" alt="Class Clearance" class="card-img me-3">
                <div>
                  <h5 class="card-title">??/?? of your Classes are Cleared!</h5>
                  <p class="card-text">Please resolve your Clearance<br>
                      issues by contacting your Professor.</p>
                  <router-link to="/StudentClearance" class="btn custom-btn"><u>Check</u></router-link>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-12 mb-4"> <!-- Second card -->
          <div class="dashboard-card">
            <div class="card custom-card h-100">
              <div class="card-body d-flex align-items-center">
                <img src="/public/images/2.png" alt="Take Attendance" class="card-img me-3">
                <div>
                  <h5 class="card-title">Take Attendance</h5>
                  <p class="card-text">Be sure to Attend all your classes.</p>
                  <router-link to="/StudentAttendance" class="btn custom-btn"><u>Check</u></router-link>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-12 mb-4"> <!-- Third card -->
          <div class="dashboard-card">
            <div class="card custom-card h-100">
              <div class="card-body d-flex align-items-center">
                <img src="/public/images/3.png" alt="Personal Information" class="card-img me-3">
                <div>
                  <h5 class="card-title">Personal Information</h5>
                  <p class="card-text">Edit your Personal Information here.</p>
                  <router-link to="#" class="btn custom-btn"><u>Edit</u></router-link>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-12 mb-4"> <!-- Fourth card -->
          <div class="dashboard-card">
            <div class="card custom-card h-100">
              <div class="card-body d-flex align-items-center">
                <img src="/public/images/4.png" alt="Create Class" class="card-img me-3">
                <div>
                  <h5 class="card-title">Want to track your Attendance?</h5>
                  <p class="card-text" style="font-size: small;">
                    Please enter the unique class code provided by <br>
                    your instructor into the form below, ensuring that <br>
                    the code is entered exactly as given, and click the<br>
                    “Join” button to join in the class in order to gain<br>
                    an access to your attendance and clearance record.
                  </p>
                  <div class="d-flex align-items-center">
                    <input type="text" placeholder="Class Code" class="form-control class-code-input me-2">
                    <router-link to="#" class="btn custom-btn"><u>Join</u></router-link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'StdntHomeView',
};
</script>

<style scoped>
.welcome-section {
  padding: 20px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.logo {
  width: 100%; 
  max-width: 200px; 
  height: auto; 
}

@media (max-width: 768px) {
  .logo {
    display: none; 
  }
  .welcome-section {
    margin-left: 60px;
    margin-top: auto;
  }

  .welcome-text {
    margin-left: 0; 
    padding: 20px;
  }

  .cards-section {
    margin-top: 10px; 
  }
}

.cards-section {
  width: 100%;
  height: auto;
}

.dashboard-card {
  height: 240px;
}

.card.custom-card {
  background-color: #96D4DE;
  color: white;
  border-radius: 15px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  width: 485px;  
  height: 240px; 
  transition: background-color 0.3s ease;
}

.card.custom-card:hover {
  background-color: #227B94;
  color: black;
}

.card-img {
  width: 80px;
  height: 80px;
  object-fit: cover;
}

.card-body {
  display: flex;
  align-items: center;
  overflow: hidden; 
}

.custom-btn {
  background-color: #78B7D0;
  border-radius: 20px;
  color: white;
  padding: 10px 20px;
  transition: background-color 0.3s ease;
}

.custom-btn:hover {
  background-color: #5B97A9;
}

.form-control.class-code-input {
  border-radius: 15px;
  border: 1px solid #78B7D0;
}

.mb-4 {
  margin-bottom: 20px; 
}
</style>
