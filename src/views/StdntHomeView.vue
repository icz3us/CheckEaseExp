<template>
  <div class="cards-section">
    <div class="container">
      <div class="row justify-content-center">
        <div
          class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4"
          v-for="(card, index) in cards"
          :key="index"
        >
          <div class="dashboard-card h-100">
            <div class="card custom-card">
              <div class="card-body">
                <div class="card-content">
                  <h5 class="card-title"><b>{{ card.title }}</b></h5>
                  <p class="card-text" v-html="card.text"></p>
                </div>
                <img :src="card.image" :alt="card.alt" class="card-img">
              </div>
              <router-link :to="card.link" class="btn custom-btn">
                <u>{{ card.buttonText }}</u>
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  name: "HomeView",
  data() {
    return {
      cards: [
        {
          title: "??/?? of your Classes are Cleared!",
          text: "Please resolve your Clearance<br> issues by contacting your Professor.",
          buttonText: "Check",
          image: "/images/1.png",
          alt: "Class Clearance",
          link: "/StudentClearance",
        },
        {
          title: "Take Attendance",
          text: "Be sure to Attend all your classes.",
          buttonText: "Check",
          image: "/images/2.png",
          alt: "Take Attendance",
          link: "/StudentAttendance",
        },
        {
          title: "Personal Information",
          text: "Edit your Personal Information here.",
          buttonText: "Edit",
          image: "/images/3.png",
          alt: "Personal Information",
          link: "#",
        },
        {
          title: "Want to track your Attendance?",
          text: "Please enter the unique class code here",
          buttonText: "Join",
          image: "/images/4.png",
          alt: "Create Class",
          link: "#",
        },
      ],
    };
  },
};
</script>


<style scoped>

.cards-section {
  margin: 0 auto;
  padding: 20px;
}

.container {
  max-width: 1200px;
  padding: 0 20px;
}

.row {
  gap: 1.5rem; 
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.dashboard-card {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%;
  box-sizing: border-box; /* Ensure padding is inside width */
}

.card.custom-card {
  background-color: #96d4de;
  color: black;
  border-radius: 15px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  transition: background-color 0.3s ease;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding: 20px;
  height: 100%;
}

.card.custom-card:hover {
  background-color: #227b94;
  color: white;
}

.card-content {
  margin-top: 10px;
  flex-grow: 1;
}

.card-title {
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
}

.card-text {
  font-size: 1rem;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.card-body {
  flex-grow: 1;
}

.card-img {
  width: 50px;
  height: 50px;
  margin-top: auto;
  align-self: end;
}

.custom-btn {
  background-color: #78b7d0;
  border-radius: 20px;
  color: white;
  padding: 8px 15px;
  margin: 10px auto;
  text-align: center;
  width: fit-content;
  transition: background-color 0.3s ease;
}

.custom-btn:hover {
  background-color: #5b97a9;
}

/* Responsive Adjustments */
@media (min-width: 1200px) {
  .container {
    padding: 0 40px;
  }

  .row {
    justify-content: flex-start; 
  }

  .dashboard-card {
    width: 25vw; 
  }
}

@media (max-width: 1024px) {
  .dashboard-card {
    width: 45vw; 
    margin: 0.25rem; 
  }
}

@media (max-width: 768px) {
  .dashboard-card {
    width: 50vw; 
    margin: 0.5rem; 
  }
}

@media (max-width: 576px) {
  .dashboard-card {
    width: 100%;
    margin: 10px 0;
  }

  .custom-card {
    margin: 0 auto; /* Center cards */
  }

  .cards-section {
    margin-left: 10px;
  }
}
</style>


