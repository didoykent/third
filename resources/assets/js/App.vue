<template id="">

<div>

<v-app>
  <v-toolbar  color="pink" >
    <v-toolbar-side-icon></v-toolbar-side-icon>
    <v-toolbar-title>Megatalking</v-toolbar-title>
    <v-spacer></v-spacer>
    <v-toolbar-items class="hidden-sm-and-down">


      <v-btn flat :to = "'student-login'" v-if = "!isLogged" >Login|</v-btn>
      <v-btn flat :to = "'student-register'"  v-if = "!isLogged">Register</v-btn>





        </v-toolbar-items>

    <v-toolbar-items class="hidden-sm-and-down">

      <v-btn flat @click="studentLogOut" v-if = "isLogged">LogOut</v-btn>
      <v-btn flat @click="testIn" v-if = "isLogged">testData</v-btn>
        </v-toolbar-items>

  </v-toolbar>

  <h2 v-if="isLogged">Logged In</h2>


  <router-view></router-view>


</v-app>




</div>


</template>


<script>

import axios from 'axios'
import {mapGetters} from 'vuex'
export default{

  data(){

    return{

      myData : ''
    }
  },

computed:mapGetters([

  'isLogged'
]),



  methods:{

    testIn(){
var vm =  this
      axios.get('api/getStudents').then(function(response){

        console.log(response.data)

      }).catch(function(error){

        console.log(error)
      })
    },

    studentLogOut(){

      var vm  = this
      vm.$store.dispatch('studentLogOut')
    }
  }
}

</script>
