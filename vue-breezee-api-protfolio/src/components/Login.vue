<script setup>
import { useNotification } from "@kyvg/vue3-notification";
const { notify } = useNotification();

import { ref, onMounted } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';

const router = useRouter();
const errors = ref(null);
const validation = ref({});

const form = ref({
    email: '',
    password : '',
});

//---------------------------------------
const clearValidationMessage = (field) => {
  setTimeout(() => {
    validation.value[field] = '';
  }, 3000); // Set the timeout duration in milliseconds (e.g., 5000 for 5 seconds)
}
//----------------------------------------------
const validateEmail = (email) => {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
//----------------------------------------------
const handleLogin = async () => {

  if (form.value.email === "" || !validateEmail(form.value.email)) {
    validation.value.email = "Email is required and must be a valid email address";
    clearValidationMessage('email');
  }
  if (form.value.password === "" || form.value.password.length < 8) {
    validation.value.password = "Password is required and must be at least 8 characters long";
    clearValidationMessage('password');
  } else {
    await handleApiRequest();
  }
 
};
//---------------------------------------------
const handleApiRequest = async () => {

    try {
        let response = await axios.post('http://localhost:8000/login', {
             email: form.value.email,
            password: form.value.password,
          } )
          
        localStorage.setItem("password", form.value.password);
        localStorage.setItem("email", form.value.email);
        localStorage.setItem("", form.value.email);
        router.push('/');
  
   }catch (error) {
    console.error(error.response.data);
    // Handle login error
    errors.value = error.response.data.message || 'An error occurred during login.';
    // Clear previous validation messages
    validation.value.email = ''; 
    validation.value.password = '';
    };
}

</script>

<template>
    <div class="container">
        <div class="left_container">
            <h1>Sign In</h1>
            <form @submit.prevent="handleLogin" >
                
                    <p for="email">Email:</p>
                    <input type="email" v-model="form.email" id="email"  placeholder="Email" />
                    <p style="margin: 0px; color: red; font-size: 14px;">{{ validation.email }}</p>
               
                    <p for="password">Password:</p>
                    <input type="password" v-model="form.password" id="password"  placeholder="Password" />
                    <p style="margin: 0px; color: red; font-size: 14px;" >{{ validation.password }}</p>

                    <label style="margin: 0px; color: red; font-size: 14px;" >{{ errors }}</label>
                    <button type="submit">Login</button>
            </form>
            <div class="forgot" >
                <a href="">Forgot Password?</a>
            </div>
        </div>
        <div class="right_container">
            <h1>Welcome to login</h1>
            <p>Don't have an account?</p>
            <router-link :to="{name: 'register'}">Sign Up</router-link>
        </div>
    </div>
</template>



<style lang="scss" scoped>
.container{
    display: flex;
    padding: 100px 170px;
    text-align: center;
    align-items: center;
    background: #fff5ef;

    .left_container{
        flex-basis: 50%;
        background: #fff;
        box-shadow: 2px 2px 3px 2px #e3dfdf7a;
        padding: 40px 30px;
        text-align: left;
        border-radius: 6px 0px 0px 6px;
        h1{
            font-size: 25px;
            padding-bottom: 30px;
            color: #101010d1;
        }
      
            p{
                color: #101010d1;
                font-size: 15px;
                font-weight: 700;
                padding: 20px 0px 10px 0px;
            }
            input{
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
            button{
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
            
      
    }
    .right_container{
        flex-basis: 50%;
        padding: 151px 30px;
        background: #ff6b00;
        border-radius: 0px 6px 4px 0px;
        h1{
            font-size: 35px;
            padding-bottom: 18px;
            color: #fff;
        }
        p{
            color: white;
            font-size: 17px;
            padding-bottom: 28px;
        }
        a{
                text-decoration: none;
                background: #f38e45e0;
                padding: 10px 20px;
                border-radius: 20px;
                color: white;
                border: 1px solid white;
                transition: all .3s;
        }
        a:hover{
            background: #fff;
            color:#ff6b00;
            border: 1px solid #ff6b00;

        }
    }
    .forgot{
        a{
            text-decoration: none;
            font-size: 15px;
            color: #000000b0;
        }
        a:hover{
            color: #ff6b00;
        }
    }

}

</style>