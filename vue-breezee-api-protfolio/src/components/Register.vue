<template>
     <div class="container">
        <div class="left_container">
            <h1>Sign Up</h1>
            <form >
                     <p for="email">User Name:</p>
                    <input type="text" v-model="email" id="email" required placeholder="User Name" />

                    <p for="email">Email:</p>
                    <input type="email" v-model="email" id="email" required placeholder="Email" />
               
                    <p for="password">Password:</p>
                    <input type="password" v-model="password" id="password" required placeholder="Password" />
              
                   <p for="password">Confirmed Password:</p>
                    <input type="password" v-model="password" id="password" required placeholder="Confirmed Password" />
              
                <button type="submit">Register </button>
            </form>
            <div class="forgot" >
                <router-link :to="{name: 'login'}">Login</router-link>
            </div>
        </div>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>
.container{
    padding: 100px 150px;
    background: #fff5ef;

    .left_container{
        background: #fff;
        box-shadow: 2px 2px 3px 2px #e3dfdf7a;
        padding: 40px 30px;
        text-align: left;
        width: 60%;
        margin: 0 auto;
        border-radius: 6px ;
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
                    border: #ff6b00;
                    background: #ff6b00 ;                   
                    color: white;
                    cursor: pointer;
                
            }
      
    }
     .forgot{
        text-align: center;
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