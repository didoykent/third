import Vue from 'vue'

import VueRouter from 'vue-router'

import axios from 'axios'



Vue.use(VueRouter)





const router = new VueRouter({



  routes: [

    {path: '/student-register', component:require('./components/Auth/StudentRegister.vue')},
    {path: '/student-login', component:require('./components/Auth/StudentLogin.vue')},
    {path: '/student-recording', component:require('./components/Recording.vue')},
    {path: '/student-edit', component:require('./components/Auth/StudentEdit.vue')}


  ]
});


export default router
