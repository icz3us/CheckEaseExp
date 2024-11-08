import { createRouter, createWebHistory } from 'vue-router';
import AttendanceView from '@/views/AttendanceView.vue';
import ClearanceView from '@/views/ClearanceView.vue';
import HomeView from '@/views/HomeView.vue';
import StdntHomeView from '@/views/StdntHomeView.vue';
import StdntClearanceView from '@/views/StdntClearanceView.vue';
import StdntAttendanceView from '@/views/StdntAttendanceView.vue';
import Login from '@/views/Login.vue'; 
import SignUp from '@/views/SignUp.vue';
import CreateClass from '@/views/CreateClass.vue';

const routes = [
  {
    path: '/',
    redirect: '/login', 
  },
  {
    path: '/Home',
    name: 'Home',
    component: HomeView,
  },
  {
    path: '/attendance',
    name: 'Attendance',
    component: AttendanceView,
  },
  {
    path: '/clearance',
    name: 'Clearance',
    component: ClearanceView,
  },
  {
    path: '/StudentHome',
    name: 'StudentHome',
    component: StdntHomeView,
  },
  {
    path: '/StudentClearance',
    name: 'StudentClearance',
    component: StdntClearanceView,
  },
  {
    path: '/StudentAttendance',
    name: 'StudentAttendance',
    component: StdntAttendanceView,
  },
  {
    path: '/Class',
    name: 'Class',
    component: CreateClass,
  },
  {
    path: '/login',
    name: 'Login',
    component: Login,
    meta: { layout: 'empty' },
  },
  {
    path: '/signup',
    name: 'SignUp',
    component: SignUp,
    meta: { layout: 'empty' },
  },

];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
