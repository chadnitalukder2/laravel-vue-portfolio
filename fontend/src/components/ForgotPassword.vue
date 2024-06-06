<script setup>
import axios from 'axios';
import { ref } from "vue";

const email = ref("");
const validation = ref({
  email : ''
});

const clearValidationMessage = (field) => {
  setTimeout(() => {
    validation.value[field] = '';
  }, 5000);
}

const validateEmail = (email) => {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

const handleForgotPassword = async () => {
  if (email.value === "" || !validateEmail(email.value)) {
    validation.value.email = "Email is required and must be a valid email address";
    clearValidationMessage('email');
  } else {
    await handleApiRequest();
  }
};

const handleApiRequest = async () => {
  try {
    await axios.post("/forgot-password", {
      email: email.value,
    }).then((res) => {
        if(res.status == 200){
          email.value = '';
        }
    })
  
  } catch (error) {
    // Handle error if necessary
    console.error(error);
  }
}
   
</script>

<template>
<div class="container">
  <form @submit.prevent="handleForgotPassword" method="post" style="width: 50%;">
      <p class="email">Enter Your Email</p>
      <input  type="email" v-model="email" placeholder="Enter email">
      <p style="margin: 0px; color: red; font-size: 14px;">{{ validation.email }} </p><br>
      <button type="submit">Submit</button>
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
    .email{
        color: #101010d1;
        font-size: 15px;
        font-weight: 700;
        padding: 20px 0px 10px 0px;
    }  
  
  input[type=email] {
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
  
