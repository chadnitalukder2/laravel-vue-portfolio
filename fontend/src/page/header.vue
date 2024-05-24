<script setup>
   
</script>

<template>
     <!----- header start ---->
      <div class="header">
        <div class="header-left">
          <div class="up-banner">
            <img src="../assets/img/particleOne.png" alt="one" />
          </div>
          <div class="sub-heading">
            <img src="../assets/img/orangeDot.png" alt="orange" />
            <p>i am designer</p>
          </div>

          <div class="animate-heading">
            <h1>
              Creative Design and Web
              <span class="wrapper">
                <b class="visible">Solution</b>
                <b class="hidden">Design</b>
              </span>
            </h1>
          </div>
          <div class="info">
            <p>
              Nam libero tempore, cum soluta nobis est eligendi optio cumque
              nihil impedit quo minus id quod maxime placeat facere possimus,
              omnis voluptas assumenda est, omnis dolor repellendus. Temporibus
              autem quibusdam et.
            </p>
          </div>
          
           <button type="submit" class="submit-btn">
            <a href="#">
            <span>Dowanload My CV</span>
            </a>
          </button>
      

          
          <div class="down-banner">
            <img src="../assets/img/particleTwo.png" alt="tow" />
          </div>
        </div>

        <div class="header-right">
          <div class="bg-img">
            <img src="../assets/img/homeNannerShape.png" alt="home" />
          </div>
          <div class="image" style="display: flex; text-align: center;">
            <img src="../assets/img/nitesh1-removebg-preview.png" alt="nitesh" />
          </div>
        </div>
      </div>
      <!-- header End -->
</template>


<style lang="scss" scoped>
.header {
  position: relative;
  width: 100%;
  background: var(--light-color);
  display: flex;
  flex-wrap: wrap;
  padding: 0 50px 0 140px;
  @media only screen and (min-width: 1500px){
    padding:0px 250px ;
  }
 
  @media only screen and (max-width: 1200px) {
    padding: 0px 0px 50px 30px;
  }
  @media only screen and (max-width: 576px) {
  padding: 0px 10px;
  }

  .header-left {
    flex-basis: 50%;
    margin-top: 100px;
    @media only screen and (max-width: 992px) {
      flex-basis: 100%;
      order: 2;
    }
    @media only screen and (max-width: 576px) {
      margin-top: 30px;
     }

    .up-banner {
      margin-left: -110px;
      img {
        width: 70px;
        margin-top: -50px;
        animation-name: cercal;
        animation-duration: 0.3s;
        animation-iteration-count: infinite;
        position: absolute;
       
        @media only screen and (max-width: 1200px) {
          top: 60px;
          left: 27px;
          width: 75px;
        }
        @media only screen and (max-width: 992px) {
          top: 60px;
          left: 50px;
          width: 80px;
         }
         @media only screen and (max-width: 576px) {
          top: 65px;
          left: 17px;
          width: 50px;
         }
      }
    }
    .animate-heading h1 {
      font-size: 60px;
      line-height: -10px;
      padding-right: 18%;
      font-weight: 700;
      margin: 0;
      @media only screen and (max-width: 1200px) {
        font-size: 46px;
        padding-right: 10%;
      }
      @media only screen and (max-width: 576px) {
        font-size: 36px;
     }
      .wrapper {
        color: var(--orange-color);
      }
    }
    .info p {
      font-size: 18px;
      font-weight: 400;
      margin: 0;
      margin-top: 20px;
      line-height: 1.7em;
      color: var(--secondary-black-color);
    }

    .down-banner {
      margin-bottom: 23px;
      text-align: center;
      animation: floatUpDown 3s infinite ease-in-out;
    
       
      img {
        width: 70px;
       
      }
    }
  }

  .header-right {
    flex-basis: 50%;
    @media only screen and (max-width: 992px) {
      width: 100%;
      order: 1;
      
    }

    .image{
          margin: 0 auto;
          display: flex;
          width: 290px;
          height: 320px;
          box-shadow: 0px 0px 0px 4px #ff6b00;
          margin-top: 30%;
          border-radius: 6px;
          overflow: hidden;
        @media only screen and (max-width: 992px) {
          width: 100%;
          height: 100%;
          margin-top: 0%;
          margin-left: 50%;
          padding: 0px 0px 0px 0px;
          position: relative;
        }
        @media only screen and (max-width: 576px) {
        padding: 0px 0px 0px 0px;
        width: 390px;
        height: 380px;
        margin-left: 0px;
        margin-top: 0%;
      }
      img {
      position: relative;
      width: 100%;
      height: 100%;
      top: 0;
      margin-left: 0px;
      @media only screen and (max-width: 992px) {
        width: 100%;
        padding: 0px 0px 0px 0px;
        position: relative;
         margin-left: 0px;
      }
      @media only screen and (max-width: 576px) {
        padding: 0px 0px 0px 0px;
        width: 100%;
      }
    }
    }
     
    
    
    .bg-img {
      
          margin-top: 20%;
        img {
          margin: 49px 91px;
          position: absolute;
          width: 364px;
          animation-name: image-anim;
          animation-duration: 3s;
          animation-iteration-count: infinite;
          animation-timing-function: linear;
          @media only screen and (max-width: 992px){
          position:absolute;
          padding: 37px 0px 0px 150px;
          margin: 0px -14px;
          width: 60%;
          }
          @media only screen and (max-width: 576px) {
            padding: 0px 0px 0px 0px;

          }
        }
    }
   
  }
}

</style>