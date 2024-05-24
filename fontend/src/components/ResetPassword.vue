<script setup>
import { useRouter } from "vue-router";
const router = useRouter();
const route = useRoute();

import { ref } from "vue";
import { useRoute } from "vue-router";
import axios from "axios";

const form = ref({
    password: "",
    password_confirmation: "",
    email: route.query.email,
    token: route.params.token,
});

const handleResetPassword = async (form) => {
    try {
        const response = await axios.post("/reset-password", form).then(() =>{
            router.push('/login')
        })
        // Handle response if necessary
    } catch (error) {
        // Handle error if necessary
        console.error(error);
    }
}


   
</script>

<template>
   <div class="container">
    <form @submit.prevent="handleResetPassword(form)" method="post" style="width: 50%;">
    
        <p class="title">New Password </p>
        <input v-model="form.password" type="password" placeholder=" New password"  >
      
        <p class="title">Confirm Password  </p>
        <input v-model="form.password_confirmation" type="password" placeholder="Password confirmation "  >
        <!-- <p style="margin: 0px; color: red; font-size: 14px;" >{{ validation.password }}</p><br> -->
  
        <button type="submit"> Submit</button>

    </form>
    </div>
</template>

<style lang="scss" scoped>
  .container{
    background: #fff5ef;
  }
  form {
    background: #fff;
    box-shadow: 2px 2px 3px 2px #e3dfdf7a;
    margin: 0 auto;
    /* height: 100vh; */
    margin-top: 50px;
    margin-bottom: 50px;
    border-radius: 8px;
    padding: 20px;
    
  }
    .title{
        color: #101010d1;
        font-size: 15px;
        font-weight: 700;
        padding: 20px 0px 10px 0px;
    }  
  
  input {
    width: 100%;
    padding: 13px;
    font-size: 15px;
    border-radius: 50px;
    border: 1px solid #e3dfdf7a;
    background: #e3dfdf7a;

    &:focus-visible{
        border: 1px solid #ff6b00a6;
        outline: none;
    }
  }
  
  button {
    font-size: 18px;
    padding: 13px;
    margin: 20px 0px;
    width: 100%;
    border-radius: 50px;
    border: 1px solid #ff6b00;
    background: #ff6b00 ;                   
    color: white;
    cursor: pointer;
  }
  
  button:hover {
    opacity: 0.8;
  }
  
  .container {
    padding: 16px;
  }
  
  
  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
      display: block;
      float: none;
    }
  
    .cancelbtn {
      width: 100%;
    }
  }
  </style>
  
