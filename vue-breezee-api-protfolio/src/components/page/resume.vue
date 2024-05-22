<script setup> 
    
</script>

<template>
    <div>
         <!-- resume section start -->
      <div class="resume" id="resume">
        <div class="container">

          <div class="heading">
            <div class="sub-heading">
              <img src="../../assets/img/orangeDot.png" alt="orange">
              <p>My Resume</p>
            </div>
            <h2>10+ YEARS OF EXPERIENCE</h2>
          </div>

          <div class="row">

            <div class="row-left">

              <div class="topics">
                <h3 class="topics-1">Education</h3>
                <h3 class="topics-2">Software Skills</h3>
                <h3 class="topics-3">Experience</h3>
              </div>

            </div>

            <div class="row-right">
                <!-- education start -->
                <div class="education">

                  <div class="first">
                    <h4>BSc in Computer Science</h4>
                    <p>University of ULAV (2018 - 2022)</p>
                    <p class="ulav">Pomnis voluptas assumenda est, omnis dolor repellendus.</p>
                  </div>

                  <div class="second">
                   <h3>AS - Science & Information</h3>
                   <p>University of ULAV (2016 - 2018)</p>
                   <p class="ulav">Pomnis voluptas assumenda est, omnis dolor repellendus.</p>
                  </div>

                  <div class="third">
                    <h3>Secondary School Education</h3>
                    <p>Kindergarten (2006 - 2016)</p>
                    <p class="ulav">Pomnis voluptas assumenda est, omnis dolor repellendus.</p>
                  </div>

                </div>
                <!-- education end -->
                <!-- skills start-->
                <div class="skills">

                      <div class="first">
                        <h4>UI/UX Design</h4>
                        <div class="row-1">
                          <p class="type">Figma</p>
                          <span></span>
                          <p class="number">90%</p>
                        </div>
                        <div class="row-2">
                          <p class="type">AdobeXD</p>
                          <span></span>
                          <p class="number">85%</p>
                        </div>
                        <div class="row-3">
                          <p class="type">Photoshop</p>
                          <span></span>
                          <p class="number">80%</p>
                        </div>

                      </div>

                      <div class="second">
                        <h4>Web Developer</h4>
                        <div class="row-1">
                          <p class="type">WordPress</p>
                          <span></span>
                          <p class="number">90%</p>
                        </div>
                        <div class="row-2">
                          <p class="type">Mockplus</p>
                          <span></span>
                          <p class="number">85%</p>
                        </div>
                        <div class="row-3">
                          <p class="type">Weebly</p>
                          <span></span>
                          <p class="number">80%</p>
                        </div>
                      </div>

                      <div class="third">
                        <h4>App Development</h4>
                        <div class="row-1">
                          <p class="type">Quixy</p>
                          <span></span>
                          <p class="number">90%</p>
                        </div>
                        <div class="row-2">
                          <p class="type">AppyPie</p>
                          <span></span>
                          <p class="number">85%</p>
                        </div>
                        <div class="row-3">
                          <p class="type">iBuildAppp</p>
                          <span></span>
                          <p class="number">80%</p>
                        </div>
                      </div>
                    
                  
                </div>
                <!-- skills  end -->
                <!-- experience start -->
                <div class="experience">

                  <div class="first">
                    <h4>Web Developer & Trainer</h4>
                    <p>Brac Developer Team - (2012 - 2016)</p>
                    <p class="ulav">Pomnis voluptas assumenda est, omnis dolor repellendus.</p>
                  </div>

                  <div class="second">
                   <h3>Front-end Developer</h3>
                   <p>Brane - (2020 - 2011)</p>
                   <p class="ulav">Pomnis voluptas assumenda est, omnis dolor repellendus.</p>
                  </div>

                  <div class="third">
                    <h3>UI/UX Designer</h3>
                    <p>Google Out Tech - (2017 - Present)</p>
                    <p class="ulav">Pomnis voluptas assumenda est, omnis dolor repellendus.</p>
                  </div>

                </div>
                <!-- experience end -->
              
            </div>

          </div>

        </div>
      </div>
      <!-- resume section end -->
    </div>
</template>


<style lang="scss" scoped>
.resume {
  background: var(--light-color);
  padding: 130px 0;
  width: 100%;

  @media only screen and (min-width: 1500px){
    padding:100px 250px ;
  }
  @media only screen and (max-width: 992px){
    padding: 90px 0px;
  }
  .container {
    padding: 0 100px;
   
    @media only screen and (max-width: 992px){
      padding:0px 50px;
  }
  @media only screen and (max-width: 576px) {
    padding: 0px 10px;
}
    .row {
      display: flex;
      justify-content: space-between;
      margin-top: 50px;
       gap: 20px;
      @media only screen and (max-width: 576px) {
       display: block;
       gap: 10px;
    }
    
      .row-left {
        flex-basis: 15%;
        @media only screen and (max-width: 1180px) {
          display: none;
         }
        @media only screen and (max-width: 992px){
         display: none;
        }
        .topics {
          content: "";
          width: 2px;
          background: #929292;
          height: 100%;

          .topics-1 {
            padding: 130px 0;
            margin-left: 23px;
            line-height: 1.3em;
            font-size: 24px;
            font-weight: 500;
            position: relative;
            &::before {
              content: "";
              position: absolute;
              width: 18px;
              height: 18px;
              border-radius: 50%;
              background: var(--orange-color);
              top: 50%;
              transform: translateY(-50%);
              left: -31px;
            }
          }

          .topics-2 {
            padding:62px 0;
            margin-left: 23px;
            line-height: 1.3em;
            font-size: 24px;
            font-weight: 500;
            position: relative;

            &::before {
              content: "";
              position: absolute;
              width: 18px;
              height: 18px;
              border-radius: 50%;
              background: var(--orange-color);
              top: 50%;
              transform: translateY(-50%);
              left: -31px;
            }
          }
          .topics-3 {
            padding-top: 170px;
            margin-left: 23px;
            line-height: 1.3em;
            font-size: 24px;
            font-weight: 500;
            position: relative;

            &::before {
              content: "";
              position: absolute;
              width: 18px;
              height: 18px;
              border-radius: 50%;
              background: var(--orange-color);
              top: 93%;
              transform: translateY(-50%);
              left: -31px;
            }
          }
        }
      }
      .row-right {
        flex-basis: 80%;
        @media only screen and (max-width: 1200px) {
          flex-basis: 100%;
         }
         @media only screen and (max-width: 992px) {
          flex-basis: 100%;
         }
      
        .education {
          display: flex;     
          padding: 33px;
          border-radius: 6px;
          background: var(--white-color);
          flex-basis: 15%;
          @media only screen and (max-width: 992px){
          flex-wrap: wrap;
          flex-basis: 100%;
          }
         
          .first {
            padding-right: 78px;
            @media only screen and (max-width: 992px){
              padding-right: 0px;
              padding-left: 0px;
              margin-bottom: 30px;
            }
            h4 {
              font-size: 21px;
              margin: 0;
              font-weight: 600;
              line-height: 1.2em;
            }
            p {
              margin-top: 10px;
              line-height: 1.7em;
              font-weight: 400;
              color: var(--secondary-black-color);
            }
            .ulav {
              margin-top: 20px;
              line-height: 1.7em;
              font-weight: 400;
              font-size: 16px;
              color: var(--secondary-black-color);
            }
          }
          .second {
            padding-right: 39px;
            padding-left: 50px;
            position: relative;
            @media only screen and (max-width: 992px){
              padding-right: 0px;
              padding-left: 0px;
              margin-bottom: 30px;
            }
            &::before {
              content: "";
              position: absolute;
              left: -20px;
              top: 50%;
              transform: translateY(-50%);
              display: inline-block;
              width: 1px;
              height: 90%;
              background-color: #d1d1d1;
              @media only screen and (max-width: 992px){
                display: none;
              }
            }
            h4 {
              font-size: 21px;
              margin: 0;
              font-weight: 600;
              line-height: 1.2em;
            }
            p {
              margin-top: 10px;
              line-height: 1.7em;
              font-weight: 400;
              color: var(--secondary-black-color);
            }
            .ulav {
              margin-top: 20px;
              line-height: 1.7em;
              font-weight: 400;
              font-size: 16px;
              color: var(--secondary-black-color);
            }

            &::after {
              content: "";
              position: absolute;
              right: -20px;
              top: 50%;
              transform: translateY(-50%);
              display: inline-block;
              width: 1px;
              height: 90%;
              background-color: #d1d1d1;
              @media only screen and (max-width: 992px){
                display: none;
              }
            }
          }
          .third {
            padding-left: 78px;
            @media only screen and (max-width: 992px){
              
              padding-left: 0px;
             
            }
            h4 {
              font-size: 21px;
              margin: 0;
              font-weight: 600;
              line-height: 1.2em;
            }
            p {
              margin-top: 10px;
              line-height: 1.7em;
              font-weight: 400;
              color: var(--secondary-black-color);
            }
            .ulav {
              margin-top: 20px;
              line-height: 1.7em;
              font-weight: 400;
              font-size: 16px;
              color: var(--secondary-black-color);
            }
          }
        }
        .skills {
          margin-top: 1.5rem;
          padding: 33px;
          border-radius: 6px;
          background: var(--white-color);
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          @media only screen and (max-width: 992px){
            flex-wrap: wrap;
            }
            span{
              width: 80%;
              height: 1px;
              background-color: #d9d9d9;
              margin-left: 10px;
              margin-right: 10px;
              margin-top: 15px;
              transform: translateY(-50%);
              @media only screen and (max-width: 992px){
                width: 80%;
              }
            }

          .first {
            padding-right: 78px;
            flex-basis: 33.33%;
           
            @media only screen and (max-width: 992px){
              padding-right: 0px;
              padding-left: 0px;
              margin-bottom: 30px;
              flex-basis: 100%;
              
            }
            h4 {
              font-size: 21px;
              font-weight: 600;
              padding-right: 44px;
              color: var(--black-color);
            }
            .row-1 {
              display: flex;
              justify-content: space-between;
              margin-top: 10px;
             
             
              .type {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                position: relative;
                color: var(--secondary-black-color);
              }
              .number {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
            
                color: var(--secondary-black-color);
              }
            }
            .row-2 {
              margin-top: 10px;
              display: flex;
              justify-content: space-between;
              .type {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                position: relative;
                color: var(--secondary-black-color);

              
              }
              .number {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                color: var(--secondary-black-color);
              }
            }
            .row-3 {
              margin-top: 10px;
              display: flex;
              justify-content: space-between;
              .type {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                position: relative;
                color: var(--secondary-black-color);

             
              }
              .number {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                color: var(--secondary-black-color);
              }
            }
          }
          .second {
            padding-right: 40px;
            padding-left: 35px;
            position: relative;
            flex-basis: 33.33%;
            @media only screen and (max-width: 992px){
              padding-right: 0px;
              padding-left: 0px;
              margin-bottom: 30px;
              flex-basis: 100%;
            }
            &::before {
              content: "";
              position: absolute;
              left: -17px;
              top: 50%;
              transform: translateY(-50%);
              display: inline-block;
              width: 1px;
              height: 100%;
              background-color: #d1d1d1;
              @media only screen and (max-width: 992px){
                display: none;
              }
            }
            h4 {
              font-size: 21px;
              font-weight: 600;
              padding-right: 44px;
              color: var(--black-color);
            }
            .row-1 {
              display: flex;
              justify-content: space-between;
              margin-top: 10px;
              .type {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                position: relative;
                color: var(--secondary-black-color);

               
              }
              .number {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                color: var(--secondary-black-color);
              }
            }
            .row-2 {
              margin-top: 10px;
              display: flex;
              justify-content: space-between;
              .type {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                position: relative;
                color: var(--secondary-black-color);

              
              }
              .number {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                color: var(--secondary-black-color);
              }
            }
            .row-3 {
              margin-top: 10px;
              display: flex;
              justify-content: space-between;
              .type {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                position: relative;
                color: var(--secondary-black-color);

               
              }
              .number {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                color: var(--secondary-black-color);
              }
            }

            &::after {
              content: "";
              position: absolute;
              right: -20px;
              top: 50%;
              transform: translateY(-50%);
              display: inline-block;
              width: 1px;
              height: 100%;
              background-color: #d1d1d1;
              @media only screen and (max-width: 992px){
                display: none;
              }
            }
          }
          .third {
            padding-left: 78px;
            flex-basis: 33.33%;
            padding-left: 55px;
            @media only screen and (max-width: 992px){
              padding-left: 0px;
              flex-basis: 100%;
            }

            h4 {
              font-size: 21px;
              font-weight: 600;
              padding-right: 44px;
              color: var(--black-color);
            }
            .row-1 {
              display: flex;
              justify-content: space-between;
              margin-top: 10px;
              .type {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                position: relative;
                color: var(--secondary-black-color);

              
              }
              .number {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                color: var(--secondary-black-color);
              }
            }
            .row-2 {
              margin-top: 10px;
              display: flex;
              justify-content: space-between;
              .type {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                position: relative;
                color: var(--secondary-black-color);

             
              }
              .number {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                color: var(--secondary-black-color);
              }
            }
            .row-3 {
              margin-top: 10px;
              display: flex;
              justify-content: space-between;
              .type {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                position: relative;
                color: var(--secondary-black-color);

              
              }
              .number {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                color: var(--secondary-black-color);
              }
            }
          }
        }
        .experience{
            margin-top: 50px;
            background: var(--white-color);
            padding: 33px;
            border-radius: 6px;
            display: flex;
            @media only screen and (max-width: 992px){
              flex-wrap: wrap;
              flex-basis: 100%;
              }

            .first {
                padding-right: 78px;
                @media only screen and (max-width: 992px){
                  padding-right: 0px;
                  padding-left: 0px;
                  margin-bottom: 30px;
                }
                h4 {
                  font-size: 21px;
                  margin: 0;
                  font-weight: 600;
                  line-height: 1.2em;
                }
                p {
                  margin-top: 10px;
                  line-height: 1.7em;
                  font-weight: 400;
                  color: var(--secondary-black-color);
                }
                .ulav {
                  margin-top: 20px;
                  line-height: 1.7em;
                  font-weight: 400;
                  font-size: 16px;
                  color: var(--secondary-black-color);
                }
              }
              .second {
                padding-right: 39px;
                padding-left: 50px;
                position: relative;
                @media only screen and (max-width: 992px){
                  padding-right: 0px;
                  padding-left: 0px;
                  margin-bottom: 30px;
                }
                &::before {
                  content: "";
                  position: absolute;
                  left: -20px;
                  top: 50%;
                  transform: translateY(-50%);
                  display: inline-block;
                  width: 1px;
                  height: 90%;
                  background-color: #d1d1d1;
                  @media only screen and (max-width: 992px){
                    display: none;
                  }
                }
                h4 {
                  font-size: 21px;
                  margin: 0;
                  font-weight: 600;
                  line-height: 1.2em;
                }
                p {
                  margin-top: 10px;
                  line-height: 1.7em;
                  font-weight: 400;
                  color: var(--secondary-black-color);
                }
                .ulav {
                  margin-top: 20px;
                  line-height: 1.7em;
                  font-weight: 400;
                  font-size: 16px;
                  color: var(--secondary-black-color);
                }
    
                &::after {
                  content: "";
                  position: absolute;
                  right: -20px;
                  top: 50%;
                  transform: translateY(-50%);
                  display: inline-block;
                  width: 1px;
                  height: 90%;
                  background-color: #d1d1d1;

                  @media only screen and (max-width: 992px){
                    display: none;
                  }
                }
              }
              .third {
                padding-left: 78px;
                padding-left: 78px;
                @media only screen and (max-width: 992px){
                  
                  padding-left: 0px;
                 
                }
                h4 {
                  font-size: 21px;
                  margin: 0;
                  font-weight: 600;
                  line-height: 1.2em;
                }
                p {
                  margin-top: 10px;
                  line-height: 1.7em;
                  font-weight: 400;
                  color: var(--secondary-black-color);
                }
                .ulav {
                  margin-top: 20px;
                  line-height: 1.7em;
                  font-weight: 400;
                  font-size: 16px;
                  color: var(--secondary-black-color);
                }
              }
        }
      }
    }
  }
}

</style>