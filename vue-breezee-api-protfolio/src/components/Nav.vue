
<script setup >
     

</script>



<template>
  <div>
      <!-- mobile-nav start-->
       <div class="mobile-nav">
        <div class="degain">
          <img src="../assets/img/Logo.png">
          <div class="icon" id="mobileMenuIcon">
            <a href="#">
              <i class="fa-solid fa-bars"></i>
            </a>
            </div>
            <div class="icon" id="mobileMenuIconClose">
              <a href="#">
                <i class="fa-solid fa-xmark"></i>
              </a>
            </div>
        </div>
        <div class="nav-menu">
          <ul>
            <li>
            <router-link :to="{name: 'home'}">Home</router-link>
            </li>
            <span></span>
            <li><a href="#about">ABOUT</a></li>
            <span></span>
            <li><a href="#service">SERVICES</a></li>
            <span></span>
            <li><a href="#resume">RESUME</a></li>
            <span></span>
            <li><a href="#portfolio">PORTFOLIO</a></li>
            <span></span>
            <li><a href="#blog">BLOG</a></li>
            <span></span>
            <li><a href="#contact">CONTACT</a></li>
            <li>
                <router-link :to="{name: 'login'}">LOGIN</router-link>
            </li>
             <li>
                <router-link :to="{name: 'register'}">REGISTER</router-link>
            </li>
          </ul>
        </div>
        </div>
      <!-- mobile nav end -->

      <!-- Start navbar -->
      <div class="navbar">
        <div class="navbar__logo">
          <a href="#">
            <img src="../assets/img/Logo.png" alt="logo" />
          </a>
        </div>
        <div class="navbar__menu">
          <ul>
            <li>
                <router-link :to="{name: 'home'}">Home</router-link>
            </li>
            <li><a href="#about">About</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#resume">Resume</a></li>
            <li><a href="#portfolio">Protfolio</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        <div class="navbar__contact navbar__menu">
          
            <ul>
           <li>
                <router-link :to="{name: 'login'}">Login</router-link>
            </li>
             <li>
                <router-link :to="{name: 'register'}">Register</router-link>
            </li>      
            </ul>
        </div>
      </div>
      <!-- End navbar -->
  </div>
</template>

<style lang="scss" scoped>
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: var(--whitw-color);
  width: 100%;
  gap: 10px;
  padding: 25px 60px;
  @media only screen and (min-width: 1500px){
    padding:0px 290px ;
  }

  @media only screen and (max-width: 1200px){
    padding: 0px 15px 0px 20px;
}
@media only screen and (max-width: 780px) {
  display: none;
}
  &__logo {
    flex-basis: 20%;
    img {
      width: 90px;
    }
 
    @media only screen and (max-width: 1200px){
      padding-left: 0px;
  }
  }
  &__menu {
    display: flex;
    justify-content: center;
    flex-basis: 60%;
    font-size: 15px;
    font-weight: 500;
    gap: 20px;
    ul{
      display: flex;
      flex-direction: row;
      list-style: none;
    }
    ul li{
      padding: 30px 0;
    }
    li a{
      text-decoration: none;
      color:var( --black-color);
      padding: 0 12px;
      transition: all .3s;
    }
    li a:hover{
      color: var(--orange-color);
    }
  }
  &__contact {
    display:flex;
    flex-basis: 20%;
    justify-content: right;
    @media only screen and (max-width: 1200px){
    justify-content: start;
  }
    a{
      text-decoration: none;
    }
    &-bold {
      font-size: 16px;
      font-weight: 700;
      color: var(--black-color);
      transition: all .3s;
      &:hover{
        color: var(--orange-color);
      }
    }
  
  }
}

.mobile-nav{   
    background:var( --light-color);
    width: 100%;
    @media only screen and (min-width: 780px) {
      display: none;
    }
    .degain{
     display: flex;
     justify-content: space-between;
     padding: 0px 5px;
     img{
        width: 80px;
        height: 30px;
        margin-top: 10px;
        margin-left: 10px;

     }
     .icon{
        a{
            text-decoration: none;
            i{
                font-size: 26px;
                color: black;
                padding: 10px;
            }

        }
     }
     #mobileMenuIconClose{
      display: none;
     }
    }
    .nav-menu{
        background:#0c1923;
        height: 0;
        transition: all .5s;
        ul{
            list-style: none;
        
            li{
                padding: 20px 25px;
                transition:all .3s ;
                a{
                    color: var( --white-color);
                    font-size: 12px;
                    text-decoration: none;
                }
                &:hover{
                    background: rgba(255,255,255,.1);

                }
              
            }


            span{
                display: block;
                width: 100%;
                height: 1px;
                border-top: 1px solid #383836;
                background-color: #d9d9d9;
                transform: translateY(-50%);
              
              }
             
        }
       
    }
}

//style common



</style>