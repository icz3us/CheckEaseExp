<template>
    <div class="container d-flex justify-content-center align-items-center vh-100" style="margin-left: 150px;">
      <div class="card p-4 m-5 mt-3" style="width: 830px; height: 260px; border-radius: 20px; background-color: #fdf6f5;">
        <form class="d-flex flex-column">
          <div class="form-group mb-3">
            <label for="className" class="form-label font-weight-bold">Class Name</label>
            <input type="text" class="form-control custom-input" id="className" placeholder="Enter Class Name">
          </div>
          <div class="form-group mb-4">
            <label for="capacity" class="form-label font-weight-bold">Capacity</label>
            <input type="number" class="form-control custom-input" id="capacity" placeholder="Enter Capacity">
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn custom-btn"><b>Create</b></button>
          </div>
        </form>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        
      };
    },
    methods: {
      
    }
  };
  </script>
  
  <style scoped>
  .container {
    height: 100vh; 
    margin-top: -200px; 
  }
  
  .card {
    border-radius: 20px; /* Rounded corners */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Drop shadow */
    background-color: #fdf6f5; /* Light background color similar to the image */
  }
  
  .font-weight-bold {
    font-weight: bold;
  }
  
  .custom-input {
    border-radius: 10px; /* Rounded corners for inputs */
    box-shadow: inset 0px 2px 4px rgba(0, 0, 0, 0.1); /* Inner shadow for inputs */
  }
  
  .custom-btn {
    background-color: #78B7D0; /* Light blue color for the button */
    color: white;
    border-radius: 10px; /* Rounded corners for button */
    padding: 8px 16px;
    border: none;
  }
  
  .custom-btn:hover {
    background-color: #66a3c7; /* Darker blue on hover */
  }
  </style>
  