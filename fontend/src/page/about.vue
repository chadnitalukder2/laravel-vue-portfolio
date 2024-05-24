<script setup> 
    
</script>

<template>
     <div>
         <!-- about section start -->
      <section class="about" id="about">
        <div class="about-left">
          <div class="photo">
          <div class="cover-img">
          <img src="../assets/img/nitesh1-removebg-preview.png" alt="nitesh" />
          </div>
          <div class="hidden"></div>
        </div>
        </div>

        <div class="about-right">
          <div class="sub-heading">
            <img src="../assets/img/orangeDot.png" alt="orange" />
            <p>About Me</p>
          </div>
          <h2>I Can Design Anything You Want</h2>
          <p class="info">
            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
            impedit quo minus id quod maxime placeat facere possimus, omnis
            voluptas assumenda est, omnis dolor repellendus. Temporibus autem
            quibusdam et aut officiis. Nam libero tempore, cum soluta nobis est
            eligendi optio cumque nihil impedit.
          </p>
          <div class="description">

            <div class="complete">
              <img class="one" src="../assets/img/aboutIconOne.png" alt="one">
              <span>
              <h4 class="one-info">8+</h4>
             <h4>Complete Project</h4>
             </span>
            </div>
          
            <div class="experience">
              <img class="tow" src="../assets/img/aboutIconTwo.png" alt="tow">
              <span>
                <h4 class="tow-info">0+</h4>
                <h4> Year of experience</h4>
              </span>
            </div>

          </div>

          <div class="fead-up">
            <div class="col-1">
              <div class="row-1">
                <div class="work">
                  <i class="fa-regular fa-square-check"></i>
                  <p>Work simple and cline design</p>
                </div>
                <div class="web">
                  <i class="fa-regular fa-square-check"></i>
                  <p>Web Design Full stack</p>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="row-2">
                <div class="new">
                  <i class="fa-regular fa-square-check"></i>
                  <p>New idea and user friendly design</p>
                </div>
                <div class="revision">
                  <i class="fa-regular fa-square-check"></i>
                  <p>Unlimited Revisions</p>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="submit-btn">
            <a href="#">
            <span>Dowanload My CV</span>
            </a>
          </button>


        </div>
      </section>
      <!-- about section end -->
     </div>
</template>


<style lang="scss" scoped>
.about {
  padding: 130px 95px 50px 100px;
  width: 100%;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;

  @media only screen and (min-width: 1500px){
    padding:100px 250px ;
  }

  @media only screen and (max-width: 992px){
      padding: 90px 0px 45px 0px;
  }
  @media only screen and (max-width: 1200px){
    padding: 90px 0px 50px 25px;
}
@media only screen and (max-width: 576px) {
  padding: 0px 10px;
}



  .about-left {
    flex-basis: 50%;
    border-radius: 6px;
    @media only screen and (max-width: 992px){
      flex-basis: 100%;
      padding: 23px 100px 10px 100px;
  }
  @media only screen and (max-width: 576px) {
    flex-basis: 100%;
    padding: 0px 0px 0px 0px;
}
   
    .photo{
      position: relative;
      width: 100%;
      margin-bottom: 50px;
      
      .cover-img{
        img {
            background: rgba(0, 0, 0, 0.4);
          width: 100%;
          height: 100%;
          border-radius: 6px;
        }
      }
        .hidden{
          position: absolute;
          width: 100%;
          height: 100%;
          border-radius: 6px;
          background:#070b1093;
          margin: 0 auto;
          top: 0;
          transition: all .5s;
          opacity: 0;
        }
        &:hover{
          .hidden{
            opacity: 1;
          }
        }

    }
  
  }
 

  .about-right {
    flex-basis: 50%;
    padding: 45px 0px 0px 30px;

  

    @media only screen and (max-width: 1200px){
      padding: 0px 40px 0px 40px;
  }
  @media only screen and (max-width: 992px){
    flex-basis: 100%;
}
 
  @media only screen and (max-width: 576px) {
    padding: 0px 0px 0px 0px;
}
  
    h2 {
      font-size: 44px;
      font-weight: 700;
      color: var(--black-color);
      line-height: 1.3em;
      @media only screen and (max-width: 1200px){
        font-size: 42px;
    }
    }
    .info {
      margin-top: 20px;
      font-size: 16px;
      line-height: 1.7em;
      color: var(--secondary-black-color);
    }
    .description {
      display: flex;
      justify-content: space-between;
      margin-top: 50px;
      @media only screen and (max-width: 576px){
    margin-top: 30px;
    flex-wrap: wrap;
}
      .complete {
        display: flex;
        flex-basis: 50%;
        padding: 0 10px;
        @media only screen and (max-width: 576px) {
          flex-basis: 100%;
      }
       
        .one {
          margin-right: 10px;
        }
        .one-info{
            font-size: 21px;
            font-size: 700;
            color: var( --orange-color);
        }
        span h4{
            color: var(--black-color);
            font-size: 21px;
            font-weight: 500px;
        }
      }
      .experience {
        display: flex;
        padding: 0 10px;
        @media only screen and (max-width: 576px) {
          margin-top: 15px;
          flex-basis: 100%;
      }
        .tow {
          margin-right: 10px;
        }
        .tow-info{
            font-size: 21px;
            font-size: 700;
            color: var( --orange-color);
        }
        span h4{
            color: var(--black-color);
            font-size: 21px;
            font-weight: 500px;
        }
      }
    }
    .fead-up{
        margin-top: 50px;
        .row-1{
            display: flex;
            justify-content: space-between;
            align-items: start;
            
            @media only screen and (max-width: 576px) {
              flex-wrap: wrap;
              flex-basis: 100%;
          }
        
            .work{
                display:flex;
                padding: 15px 12px;
                @media only screen and (max-width: 576px) {
                  flex-basis: 100%;
              }
                i{
                    font-size: 16;
                    color: var(--orange-color);
                    margin-right: 10px;
                }
                p{
                    font-size: 16px;
                    color: var(--secondary-black-color);
                }
            }
            .web{
                display: flex;
                padding: 15px 12px;
                @media only screen and (max-width: 576px) {
                  flex-basis: 100%;
              }

                i{
                    font-size: 16;
                    color: var(--orange-color);
                    margin-right: 10px;
                }
                p{
                    font-size: 16px;
                    color: var(--secondary-black-color);
                }
            }
        }
        .row-2{
            display: flex;
            justify-content: space-between;
            align-items: start;
            flex-wrap: wrap;
            .new{
                display: flex;
                padding: 15px 12px;
                @media only screen and (max-width: 576px) {
                  flex-basis: 100%;
              }
                i{
                    font-size: 16;
                    color: var(--orange-color);
                    margin-right: 10px;
                }
                p{
                    font-size: 16px;
                    color: var(--secondary-black-color);
                }

            }
            .revision{
                display: flex;
                padding: 15px 30px 0  15px;
                @media only screen and (max-width: 576px) {
                  flex-basis: 100%;
              }
                i{
                    font-size: 16;
                    color: var(--orange-color);
                    margin-right: 10px;
                }
                p{
                    font-size: 16px;
                    color: var(--secondary-black-color);
                }
            }
        }
    }

  }
}

</style>