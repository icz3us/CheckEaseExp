<template>
  <div class="cards-section d-sm-flex" style="margin-top: 5px; margin-right: 500px;margin-left: 150px;">
    <div class="row justify-content-center" >
      <div class="col-md-6 col-lg-6 mb-4"> <!-- First card -->
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

      <div class="col-md-6 col-lg-6 mb-4"> <!-- Second card -->
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

      <div class="col-md-6 col-lg-6 mb-4"> <!-- Third card -->
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

      <div class="col-md-6 col-lg-6 mb-4"> <!-- Fourth card -->
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
</template>

<script>
export default {
  name: 'HomeView',
  data() {
    return {
      showForm: false,
      className: '',
      classCapacity: ''
    };
  },
  methods: {
    submitForm() {
      if (this.className && this.classCapacity) {
        console.log('Form submitted with Class Name:', this.className, 'and Class Capacity:', this.classCapacity);
        this.showForm = false;
      } else {
        alert('Please fill in both fields.');
      }
    }
  }
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
  width: 485px;
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
</style>
