<script setup> 
    
</script>

<template>
    <div>
        <!-- service section start -->
      <section class="service" id="service">
        <div class="container">
          <div class="row">

            <div class="heading">

              <div class="sub-heading">
                <img src="../../assets/img/orangeDot.png" alt="one">
                <p>My service</p>
              </div>

              <h2>SERVICES I OFFER</h2>
            </div>
            <div class="service-grid">

              <div class="grid-1">
                <img src="../../assets/img/serviceOne.png" alt="one">
                <h3>UI/UX Design</h3>
                <p>Hen our power of choice is untrammelled and when nothing prevents our being able</p>
              </div>
              <div class="grid-1">
                <img src="../../assets/img/serviceTwo.png" alt="one">
                <h3>Mobile App</h3>
                <p>Hen our power of choice is untrammelled and when nothing prevents our being able</p>
              </div>
              <div class="grid-1">
                <img src="../../assets/img/serviceThree.png" alt="one">
                <h3>Graphic Design</h3>
                <p>Hen our power of choice is untrammelled and when nothing prevents our being able</p>
              </div>
              <div class="grid-1">
                <img src="../../assets/img/serviceFour.png" alt="one">
                <h3>Web Developer</h3>
                <p>Hen our power of choice is untrammelled and when nothing prevents our being able</p>
              </div>
              <div class="grid-1">
                <img src="../../assets/img/serviceFive.png" alt="one">
                <h3>SEO Optimisation</h3>
                <p>Hen our power of choice is untrammelled and when nothing prevents our being able</p>
              </div>
              <div class="grid-1">
                <img src="../../assets/img/serviceSix.png" alt="one">
                <h3>WordPress Developer</h3>
                <p>Hen our power of choice is untrammelled and when nothing prevents our being able</p>
              </div>
              <div class="grid-1">
                <img src="../../assets/img/serviceSeven.png" alt="one">
                <h3>App Development</h3>
                <p>Hen our power of choice is untrammelled and when nothing prevents our being able</p>
              </div>
              <div class="grid-1">
                <img src="../../assets/img/serviceEight.png" alt="one">
                <h3>Business Strategy</h3>
                <p>Hen our power of choice is untrammelled and when nothing prevents our being able</p>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- service section end  -->
    </div>
</template>


<style lang="scss" scoped>
    .service {
  padding: 65px 0px 130px 0px;

  @media only screen and (min-width: 1500px){
    padding:30px 250px ;
  }
  @media only screen and (max-width: 992px){
    padding:45px 0px 90px 0px;
}
  .container {
    padding: 0 100px;
    @media only screen and (max-width: 992px){
      padding:0px 50px;
  }
  @media only screen and (max-width: 576px) {
    padding: 0;
}
    .row {
      padding: 0 12px;
      .service-grid {
        margin-top: 50px;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 24px;
        box-sizing: border-box;

          @media only screen and (max-width: 1200px){
            grid-gap: 15px;
          }
          @media only screen and (max-width: 992px){
            grid-gap: 24px;
            grid-template-columns: repeat(2,1fr);
              }
              @media only screen and (max-width: 576px) {
                grid-template-columns: 1fr;
            }
        .grid-1 {
          padding: 50px 30px;
          border: 1px solid #FFE2D1;
          border-radius: 6px;
          transition: all 0.3s;
          text-align: center;
          @media only screen and (max-width: 1200px){
            padding: 50px 15px;
          }
          @media only screen and (max-width: 992px){
            padding: 50px 30px;
          }
          
          img {
            margin-bottom: 25px;
          }
          h3 {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 13px;
            color: var(--black-color);
          }
          p {
            font-size: 16px;
            font-weight: 400;
            line-height: 1.7em;
            color: var(--secondary-black-color);
          }
        }
        .grid-1:hover {
          background: var(--light-color);
        }
      }
    }
  }
}

</style>