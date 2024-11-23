<template>
    <div class="container position-flex offset-md-2" style="margin-top: 100px">
      <div class="row">
        <div
          class="col-12 col-sm-6 col-md-5 col-lg-4 mb-2 "
          v-for="(card, index) in cards"
          :key="index"
        >
          <div class="card custom-card shadow-sm d-flex flex-column align-items-center justify-content-center" style="width: 340px; height: 200px;">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
              <div class="card-content text-center mb-3">
                <h5 class="card-title"><b>{{ card.title }}</b></h5>
                <p class="card-text" v-html="card.text"></p>
              </div>
              <router-link 
                :to="card.button.link" 
                class="btn custom-btn"
              >
                <u>{{ card.button.text }}</u>
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "ClearanceView",
    data() {
      return {
        cards: [
          {
            title: "BSIT-2A",
            button: { text: "Clearance Record", link: "/ClearanceRecord" },
          },
          {
            title: "BSIT-2B",
            button: { text: "Clearance Record", link: "/ClearanceRecord" },
          },
          {
            title: "BSIT-2C",
            button: { text: "Clearance Record", link: "/ClearanceRecord" },
          },
          {
            title: "BSIT-2D",
            button: { text: "Clearance Record", link: "/ClearanceRecord" },
          },
          {
            title: "BSIT-2D",
            button: { text: "Clearance Record", link: "/ClearanceRecord" },
          },
          {
            title: "BSIT-2D",
            button: { text: "Clearance Record", link: "/ClearanceRecord" },
          },
          {
            title: "BSIT-2D",
            button: { text: "Clearance Record", link: "/ClearanceRecord" },
          },
          {
            title: "BSIT-2D",
            button: { text: "Clearance Record", link: "/ClearanceRecord" },
          },
          {
            title: "BSIT-2D",
            button: { text: "Clearance Record", link: "/ClearanceRecord" },
          },
 
        ],
      };
    },
  };
  </script>
  
  <style scoped>
.card {
  border-radius: 15px;
  margin-left: 45px;
  margin-top: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  background-color: #96D4DE;
  height: 200px;
  position: relative;
}

.card:hover {
  transition: all 0.2s ease-out;
  box-shadow: 0px 4px 8px rgba(38, 38, 38, 0.2);
  top: -4px;
  border: 1px solid #00838d;
  background-color: #00838d;
}

.card:hover .custom-btn {
  background-color: #96D4DE; 
  color: black; 
}
.card-title {
  font-size: 24px;  
}

.card:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: -16px;
  right: -16px;
  background: #00838d;
  height: 32px;
  width: 32px;
  border-radius: 32px;
  transform: scale(2);
  transform-origin: 50% 50%;
  transition: transform 0.15s ease-out;
}

.card:hover:before {
  transform: scale(2.15);
}

.custom-btn {
  width: 150%;
  
  max-width: 200px;
  background-color: #00838d;
  color: #fff;
  border: none;
  border-radius: 15px;
  text-align: center;
  padding: 8px 0;
  font-size: 16px;
  transition: background-color 0.2s ease-in-out;
}
@media (max-width: 576px) {
  .container {
    margin-top: 100px;
    margin-bottom: 50px;
  }
  .card {
    margin-left: 30px;
  }
}


  </style>
  
