<template>
  <div>
    <h1>TANGINAAA</h1>

    <div class="container d-flex flex-column align-items-center">
      <div class="welcome-section text-center">
        <img src="/images/2s.png" alt="Logo" class="logo">
        <h1>Hi, Student! 👋</h1>
        <h2>Welcome to Check Ease!</h2>
        <p>Take and Track your Students’ Clearances and Attendance here!</p>
      </div>
      
      <div class="cards-section justify-content-center">
        <div class="align-items-center justify-content-center">
          <div 
            v-for="(card, index) in cards" 
            :key="index" 
            class="dashboard-card"> 
            <div class="card custom-card h-100">
              <img :src="card.image" :alt="card.alt" class="card-img me-3">
              <div>
                <h5 class="card-title">{{ card.title }}</h5>
                <p class="card-text" v-html="card.text"></p>
                <router-link :to="card.link" class="btn custom-btn"><u style="text-decoration: none;" >{{ card.buttonText }}</u></router-link>
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
  data() {
    return {
      cards: [
        {
          title: "??/?? of your Classes are Cleared!",
          text: "Please resolve your Clearance<br> issues by contacting your Professor.",
          buttonText: "Check",
          image: "/images/1.png", // Adjusted path
          alt: "Class Clearance",
          link: "/StudentClearance"
        },
        {
          title: "Take Attendance",
          text: "Be sure to Attend all your classes.",
          buttonText: "Check",
          image: "/images/2.png", // Adjusted path
          alt: "Take Attendance",
          link: "/StudentAttendance"
        },
        {
          title: "Personal Information",
          text: "Edit your Personal Information here.",
          buttonText: "Edit",
          image: "/images/3.png", // Adjusted path
          alt: "Personal Information",
          link: "#"
        },
        {
          title: "Want to track your Attendance?",
          text: "Please enter the unique class code provided by <br> your instructor into the form below, ensuring that <br> the code is entered exactly as given, and click the<br> “Join” button to join in the class in order to gain<br> access to your attendance and clearance record.",
          buttonText: "Join",
          image: "/images/4.png", // Adjusted path
          alt: "Create Class",
          link: "#"
        }
      ]
    };
  }
};
</script>

<style scoped>
.container {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  justify-content: center;
}

.welcome-section {
  padding: 20px;
  text-align: center;
}

.logo {
  width: 100%; 
  max-width: 150px; 
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
  width: 100%;  
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

.mb-4 {
  margin-bottom: 20px; 
}
</style>
