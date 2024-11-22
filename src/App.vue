<template>
  <div id="app" class="d-flex">
    <AdminSidebar v-if="isHomeView || isClearanceView || isAttendanceView || isCreateClass || isViewStdntAttendance || isClearanceRecord" />
    <Sidebar v-else-if="!isAuthPage" />
    
    <div class="main-content flex-grow-3">
      <AdminHeader v-if="isHomeView || isClearanceView || isAttendanceView || isCreateClass || isViewStdntAttendance || isClearanceRecord" />
      <Header v-else-if="!isAuthPage" />
      
      <div class="container-fluid">
        <RouterView />
      </div>
    </div>
  </div>
</template>

<script>
import Sidebar from './components/Sidebar.vue';
import Header from './components/Header.vue';
import AdminSidebar from './components/AdminSidebar.vue';
import AdminHeader from './components/AdminHeader.vue';



export default {
  components: {
    Sidebar,
    Header,
    AdminSidebar,
    AdminHeader,
  },
  computed: {
    isAuthPage() {
      return this.$route.meta.layout === 'empty';
    },
    isHomeView() {
      return this.$route.name === 'Home'; 
    },
    isClearanceView() {
      return this.$route.name === 'Clearance';
    },
    isAttendanceView() {
      return this.$route.name === 'Attendance';
    },
    isCreateClass() {
      return this.$route.name === 'Class';
    },
    isViewStdntAttendance() {
      return this.$route.name === 'StudentAttendanceCheck';
    },
    isClearanceRecord() {
      return this.$route.name === 'ClearanceRecord';
    }
  }
};
</script>

<style scoped>


</style>
