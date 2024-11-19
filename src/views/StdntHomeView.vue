<template>
  <div class="background-container">
      <div class="square" v-for="n in 26" :key="n" :class="'square-' + n"></div>
    </div>
  <div class="cards-section py-4">

    <div class="container">
      <div class="row g-3" style="justify-content: center">
        
        <div class="col-12 col-sm-6 col-md-5 col-lg-4">
          <div class="card custom-card" style="background-color: transparent; color: black; border: 3px solid transparent;">
            <div class="card-body text-center">
              <img src="/public/images/2s.png" alt="Logo" class="card-img-top mb-3" style="width: auto; height: 80px;">
              <h1 class="h5 mb-2"> Hi, Student Name 👋</h1>
              <h2 class="h6 mb-3">Welcome to Check Ease!</h2>
              <p class="text-muted muted">Track your Clearances and Attendance here!</p>
            </div>
          </div>
        </div>

        <div
          class="col-12 col-sm-6 col-md-5 col-lg-4"
          v-for="(card, index) in cards"
          :key="index"
        >
          <div class="card custom-card shadow-sm">
            <div class="card-body flex-column">
              <div class="card-content flex-grow-1">
                <h5 class="card-title text-center"><b>{{ card.title }}</b></h5>
                <p class="card-text text-center" v-html="card.text"></p>
              </div>
              <img 
                :src="card.image" 
                :alt="card.alt" 
                class="card-img position-absolute" 
              />
            </div>
            <router-link :to="card.link" class="btn custom-btn mx-auto mb-3">
              <u>{{ card.buttonText }}</u>
            </router-link>
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
.container {
  margin-left: 25px;
}
.row{ 
  margin-top: 120px;
  margin-left: 150px;
}
.cards-section {
  padding: 20px;
}

/* Custom Card Styling */
.card.custom-card {
  background-color: #C9E6F0;
  color: black;
  border-radius: 8px;
  height: 30vh; /* Fixed height for all cards */
  transition: background-color 0.3s ease;
  display: flex;
  flex-direction: column; /* Ensures children align properly */
}

.card.custom-card:hover {
  background-color: #78B3CE;
  color: white;
}

/* Card Content and Positioning */
.card-content {
  margin-top: 10px;
  flex-grow: 1;
}

.card-img {
  width: 100px; /* Adjust the width as needed */
  height: 100px; /* Adjust the height as needed */
  bottom: 15px; /* Positioning adjustment */
  left: 15px; /* Positioning adjustment */
  object-fit: contain; /* Ensures the image maintains aspect ratio */
}


/* Button Styling */
.custom-btn {
  background-color: #0e77e0;
  border-radius: 20px;
  color: white;
  padding: 8px 15px;
  text-align: center;
  transition: background-color 0.3s ease;
  position: absolute;
  right: 15px;
  bottom: 0px;
}

.custom-btn:hover {
  background-color: #000B58;
}

.custom-btn u {
  text-decoration: none;
  color: white;
}

/* Responsive Fixes */
@media (max-width: 1024px) {
  .container{ 
    margin-left: -60px;
  }
  .custom-card {
    margin: 0 auto;
    width: 100%;
  }
  .custom-card .card-body .card-img-top {
    /* Add your styles here */
    padding: 5px;
  }
  .custom-card .card-body h1{
    margin-top: -25px;
  }
  .cards-section {
    margin-left: 30px;
  }
}

@media (max-width: 768px) {
  .row {
    margin-top: 50px;
  }
  .container {
    margin-left: 15px;
  }
  .row{ 
    margin-left: 30px;
  }
  .custom-card {
    margin: 0 auto;
    width: 100%;
  }
  .cards-section {
    margin-left:20px;
  }
}

@media (max-width: 576px) {
  .row {
    margin-top: 20px;
  }
  .container{ 
    margin-left: -45px;
  }
  .custom-card {
    margin: 0 auto;
    width: 120%;
  }
}

@media (max-width: 425px) {
  .container{ 
    margin-left: -55px;
  }
  .custom-card {
    margin: 0 auto;
    width: 130%;
  }
}

@media (max-width: 375px) {
  .container{ 
    margin-left: -72.5px;
  }
  .custom-card {
    margin: 0 auto;
    width: 150%;
  }
}

.square {
  position: absolute;
  background-color: rgba(0, 123, 255, 0.1);
  opacity: 0.7;
  border-radius: 10%;
}

.square-1 { width: 10vw; height: 10vw; top: 10%; left: 10%; }
.square-2 { width: 15vw; height: 15vw; top: 20%; left: 60%; }
.square-3 { width: 12vw; height: 12vw; top: 70%; left: 30%; }
.square-4 { width: 13vw; height: 13vw; top: 40%; left: 80%; }
.square-5 { width: 14vw; height: 14vw; top: 30%; left: 20%; }
.square-6 { width: 11vw; height: 11vw; top: 60%; left: 40%; }
.square-7 { width: 16vw; height: 16vw; top: 50%; left: 50%; }
.square-8 { width: 9vw; height: 9vw; top: 20%; left: 80%; }
.square-9 { width: 15vw; height: 15vw; top: 80%; left: 10%; }
.square-10 { width: 13vw; height: 13vw; top: 10%; left: 50%; }
.square-11 { width: 17vw; height: 17vw; top: 70%; left: 20%; }
.square-12 { width: 12vw; height: 12vw; top: 90%; left: 60%; }
.square-13 { width: 14vw; height: 14vw; top: 30%; left: 90%; }
.square-14 { width: 10vw; height: 10vw; top: 20%; left: 10%; }
.square-15 { width: 16vw; height: 16vw; top: 40%; left: 30%; }
.square-16 { width: 11vw; height: 11vw; top: 60%; left: 50%; }
.square-17 { width: 15vw; height: 15vw; top: 50%; left: 80%; }
.square-18 { width: 12vw; height: 12vw; top: 10%; left: 30%; }
.square-19 { width: 13vw; height: 13vw; top: 80%; left: 40%; }
.square-20 { width: 14vw; height: 14vw; top: 10%; left: 60%; }
.square-21 { width: 9vw; height: 9vw; top: 20%; left: 70%; }
.square-22 { width: 15vw; height: 15vw; top: 30%; left: 20%; }
.square-23 { width: 13vw; height: 13vw; top: 50%; left: 10%; }
.square-24 { width: 17vw; height: 17vw; top: 70%; left: 30%; }
.square-25 { width: 12vw; height: 12vw; top: 90%; left: 50%; }
.square-26 { width: 14vw; height: 14vw; top: 20%; left: 80%; }

</style>
