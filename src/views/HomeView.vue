<template>
  <div class="container-md position-absolute top-50 start-50 translate-middle ">
    <div class="cards-section ">
      <div class="row">
        <!-- Card 1: Students -->
        <div class="col-md-6 col-lg-6 mb-4 ">
          <div class="dashboard-card">
            <div class="card custom-card h-100">
              <div class="card-body position-relative">
                <div class="card-content">
                  <h5 class="card-title"><b>Students</b></h5>
                  <p class="card-text">????</p>
                </div>
                <img src="/public/images/Group.png" alt="Class Clearance" class="card-img">
              </div>
            </div>
          </div>
        </div>

        <!-- Card 2: Classes -->
        <div class="col-md-6 col-lg-6 mb-4">
          <div class="dashboard-card">
            <div class="card custom-card h-100">
              <div class="card-body position-relative">
                <div class="card-content">
                  <h5 class="card-title"><b>Classes</b></h5>
                  <p class="card-text">????</p>
                </div>
                <img src="/public/images/Group2.png" alt="Take Attendance" class="card-img">
              </div>
            </div>
          </div>
        </div>

        <!-- Card 3: Class Sections -->
        <div class="col-md-6 col-lg-6 mb-4">
          <div class="dashboard-card">
            <div class="card custom-card h-100">
              <div class="card-body position-relative">
                <div class="card-content">
                  <h5 class="card-title"><b>Class Sections</b></h5>
                  <p class="card-text">????</p>
                </div>
                <img src="/public/images/Group3.png" alt="Personal Information" class="card-img">
              </div>
            </div>
          </div>
        </div>

        <!-- Card 4: Total of Attendance -->
        <div class="col-md-6 col-lg-6 mb-4">
          <div class="dashboard-card">
            <div class="card custom-card h-100">
              <div class="card-body position-relative">
                <div class="card-content">
                  <h5 class="card-title"><b>Total of Attendance</b></h5>
                  <p class="card-text">????</p>
                </div>
                <img src="/public/images/Group4.png" alt="Create Class" class="card-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bottom Blank Card -->
    <div class="blank-card position-absolute top-100 start-50 translate-middle" style="margin-top: 50px;"></div>
  </div>
</template>

<script>
export default {
  name: 'HomeView',
};
</script>

<style scoped>
.cards-section {
  width: 100%;
  height: auto;
}

.dashboard-card {
  height: 240px;
}

.card.custom-card {
  background-color: #96D4DE;
  color: black;
  border-radius: 15px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  width: 100%; /* Ensure responsiveness */
  height: 240px;
  transition: background-color 0.3s ease;
}

.card.custom-card:hover {
  background-color: #227B94;
  color: white;
}

.card-content {
  margin-top: 20px;
}

.card-title {
  font-size: 1.5rem;
  margin-bottom: 0.5rem;
}

.card-text {
  font-size: 1.2rem;
}

.card-body {
  position: relative;
  padding: 20px;
}

.card-img {
  width: 80px;
  height: 80px;
  position: absolute;
  bottom: 30px;
  right: 50px;
}

.blank-card {
  width: 1558px;
  height: 70px;
  background-color: #96D4DE;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);

  margin:  auto;
}

@media (max-width: 768px) {
  .cards-section {
    margin-top: 525px;
  }

  .blank-card {
    width: 100%;
  }
}
</style>
