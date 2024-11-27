<template>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 offset-md-3" style="margin-top:100px;">
          <div class="card shadow-sm table-container">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
              <div class="header-text me-2">
                <h4>Student Clearance Status</h4>
              </div>
              <div>
                <input type="text" v-model="searchQuery" placeholder="Search" class="form-control form-control-sm d-inline-block w-auto me-2" />
                <select v-model="filterStatus" class="form-select form-select-sm d-inline-block w-auto me-2">
                  <option value="">All</option>
                  <option value="CLEARED">Cleared</option>
                  <option value="NOT YET CLEARED">Not Yet Cleared</option>
                </select>
                <button class="btn btn-light btn-sm me-2" @click="deleteSelectedStudents">
                <span class="material-icons me-2">delete</span>Delete
                </button>
                <button class="btn btn-light btn-sm" @click="showAddStudentDialog = true">
                <span class="material-symbols-outlined">add</span>Add Student
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped table-hover mb-0 student-table">
                  <thead class="table-light">
                    <tr>
                      <th><input type="checkbox" @change="selectAll($event)" /></th>
                      <th>Last Name</th>
                      <th>First Name</th>
                      <th>Student Number</th>
                      <th>Email</th>
                      <th>Clearance Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="student in filteredStudents" :key="student.studentNumber">
                      <td><input type="checkbox" v-model="student.selected" /></td>
                      <td>{{ student.lastName }}</td>
                      <td>{{ student.firstName }}</td>
                      <td>{{ student.studentNumber }}</td>
                      <td>{{ student.email }}</td>
                      <td>
                        <select 
                          v-model="student.status" 
                          @change="updateStatus(student)"
                          class="form-select"
                          :class="{
                            'text-success': student.status === 'CLEARED',
                            'text-warning': student.status === 'NOT YET CLEARED'
                          }"
                        >
                          <option value="NOT YET CLEARED">NOT YET CLEARED</option>
                          <option value="CLEARED">CLEARED</option>
                        </select>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Add Student Dialog -->
      <div v-if="showAddStudentDialog" class="modal-overlay">
        <div class="modal-dialog" style="width: 500px; height: 500px;">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add an Existing Student</h5>
              <button type="button" class="btn-close" @click="showAddStudentDialog = false"></button>
            </div>
            <div class="modal-body">
              <form @submit.prevent="addStudent">
                <div class="mb-3">
                  <label for="studentName" class="form-label">Student Name</label>
                  <select id="studentName" v-model="selectedStudent" class="form-select" required>
                    <option v-for="student in allStudents" :key="student.studentNumber" :value="student">{{ student.firstName }} {{ student.lastName }}</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Add Student</button>
                <button type="button" class="btn btn-secondary" @click="showAddStudentDialog = false">Close</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        students: [
          { lastName: 'Doe', firstName: 'John', studentNumber: 'ST001', email: 'john.doe@example.com', status: 'NOT YET CLEARED', selected: false },
          { lastName: 'Smith', firstName: 'Jane', studentNumber: 'ST002', email: 'jane.smith@example.com', status: 'CLEARED', selected: false },
          { lastName: 'Johnson', firstName: 'Mike', studentNumber: 'ST003', email: 'mike.johnson@example.com', status: 'NOT YET CLEARED', selected: false },
          { lastName: 'Williams', firstName: 'Sarah', studentNumber: 'ST004', email: 'sarah.williams@example.com', status: 'CLEARED', selected: false }
        ],
        allStudents: [
          { lastName: 'Doe', firstName: 'John', studentNumber: 'ST001', email: 'john.doe@example.com' },
          { lastName: 'Smith', firstName: 'Jane', studentNumber: 'ST002', email: 'jane.smith@example.com' },
          { lastName: 'Johnson', firstName: 'Mike', studentNumber: 'ST003', email: 'mike.johnson@example.com' },
          { lastName: 'Williams', firstName: 'Sarah', studentNumber: 'ST004', email: 'sarah.williams@example.com' },
          { lastName: 'Brown', firstName: 'Emily', studentNumber: 'ST005', email: 'emily.brown@example.com' } // Additional students for the dropdown
        ],
        showAddStudentDialog: false,
        selectedStudent: null,
        searchQuery: '',
        filterStatus: '',
      }
    },
    computed: {
      filteredStudents() {
        return this.students.filter(student => {
          const matchesSearchQuery = student.lastName.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
            student.firstName.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
            student.studentNumber.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
            student.email.toLowerCase().includes(this.searchQuery.toLowerCase());
          const matchesFilterStatus = this.filterStatus === '' || student.status === this.filterStatus;
          return matchesSearchQuery && matchesFilterStatus;
        });
      }
    },
    methods: {
      updateStatus(student) {
        console.log(`Status updated for ${student.firstName} ${student.lastName} to ${student.status}`);
      },
      addStudent() {
        if (this.selectedStudent) {
          this.students.push({ ...this.selectedStudent, status: 'NOT YET CLEARED', selected: false });
          this.showAddStudentDialog = false;
          this.selectedStudent = null;
        }
      },
      deleteSelectedStudents() {
        this.students = this.students.filter(student => !student.selected);
      },
      selectAll(event) {
        this.students.forEach(student => {
          student.selected = event.target.checked;
        });
      }
    }
  }
  </script>
  
  <style scoped>
  .table-container {
    width: 100%;
    max-width: 1250px;
    margin: 0 auto;
    margin-left:-35px;
  }
  
  .student-table {
    width: 100%;
    height: 100%;
    table-layout: fixed;
  }
  
  .table-responsive {
    max-height: 1000px;
    overflow-y: auto;
  }
  

  @media (max-width: 768px) {
    .table-container {
      width: 100%;
      padding: 0 15px;
      margin-left:10px;
      margin-right: 10px;
      margin-top: 50px;
      margin-bottom: 30px;
    }
    
    .student-table th,
    .student-table td {
      font-size: 12px;
      padding: 6px;
    }
  }
  
  .header-text {
    flex: 1;
    text-align: left;
  }
  

  .student-table th, 
  .student-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }
  
  .student-table th {
    background-color: #f2f2f2;
    font-weight: bold;
  }
  
  .student-table tr:nth-child(even) {
    background-color: #f9f9f9;
  }
  
  select {
    width: 100%;
    padding: 5px;
    border: 1px solid #ddd;
  }
  
 
  .modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .modal-dialog {
    background: white;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    width: 500px;
    height: 500px;
  }
  
  .modal-header,
  .modal-body {
    padding: 15px;
  }
  
  .modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #dee2e6;
  }
  
  .modal-title {
    margin: 0;
  }
  
  .btn-close {
    border: none;
    background: none;
    font-size: 1.25rem;
    line-height: 1;
  }
  
  .btn-close:focus {
    outline: none;
    box-shadow: none;
  }
  
  .modal-body {
    display: flex;  
    flex-direction: column;
  }
  </style>
  
