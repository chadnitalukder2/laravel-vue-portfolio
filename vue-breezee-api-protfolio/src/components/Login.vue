<script setup>

</script>

<template>
    <div class="container">
        <div class="left_container">
            <h1>Sign In</h1>
            <form >
                
                    <p for="email">Email:</p>
                    <input type="email" v-model="email" id="email" required placeholder="Email" />
               
                    <p for="password">Password:</p>
                    <input type="password" v-model="password" id="password" required placeholder="Password" />
              
                <button type="submit">Login</button>
            </form>
            <div >
                <a href="">Forgot Password?</a>
            </div>
        </div>
        <div class="right_container">
            <h1>Welcome to login</h1>
            <p>Don't have an account?</p>
            <a href=""> Sign Up</a>
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
                color: black;
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
        }
    }
}

</style>