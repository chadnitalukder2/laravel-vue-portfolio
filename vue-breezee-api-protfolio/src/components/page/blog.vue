<script setup> 
    
</script>

<template>
    <div>
         <!-- blog start -->
      <section class="blog" id="blog">
        <div class="container">
          <div class="heading">
            <div class="sub-heading">
              <img src="../../assets/img/orangeDot.png" alt="orange">
              <p>My Blog</p>
            </div>
            <h2>LETEST BLOG</h2>
          </div>
          <div class="blogs-container">
            <div class="card">
              <div class="image">
                <img src="../../assets/img/blogOne.png" alt="one">
                <div class="hidden"></div>
              </div>
              <div class="card-body">
                <p>20 January, 2023</p>
                <a href="#"><span>Become a UX/UI Designer With Career Foundry.</span></a>
                <div class="btn">
                  <a href="#">
                  <span>Read More</span>
                  <i class="fa-solid fa-arrow-right"></i>
                </a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="image">
                <img src="../../assets/img/blogTwo.png" alt="one">
                <div class="hidden"></div>
              </div>
              <div class="card-body">
                <p>20 January, 2023</p>
                <a href="#"><span>Become a UX/UI Designer With Career Foundry.</span></a>
                <div class="btn">
                  <a href="#">
                  <span>Read More</span>
                  <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="image">
                <img src="../../assets/img/blogThree.png" alt="one">
                <div class="hidden">gh</div>
              </div>
              <div class="card-body">
                <p>20 January, 2023</p>
                <a href="#"><span>Become a UX/UI Designer With Career Foundry.</span></a>
                <div class="btn">
                  <a href="#">
                  <span>Read More</span>
                  <i class="fa-solid fa-arrow-right"></i>
                </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- blog end -->
    </div>
</template>


<style lang="scss" scoped>
.blog {
  padding: 65px 0;

  @media only screen and (min-width: 1500px){
    padding:70px 250px ;
  }
  @media only screen and (max-width: 992px) {
    padding: 45px 0px;
  }
  .container {
    padding: 0 100px;
    @media only screen and (max-width: 992px) {
      padding: 0px 50px;
    }
    @media only screen and (max-width: 576px) {
      padding: 0px 10px;
  }
    .blogs-container {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 24px;
      margin-top: 50px;
      @media only screen and (max-width: 576px) {
        grid-template-columns: 1fr;
    }
      .card {
        border: 1px solid #ffe2d1;
        border-radius: 6px;
        .image {
          width:fit-content;
          position: relative;
          img {
            max-height: 300px;
            width: 424px;
            max-width: 100%;
            border-radius: 6px 6px 0 0;
            position: relative;
            @media only screen and (max-width: 576px) {
              width: 512px;
          }
          }
          .hidden {
            position: absolute;
            width: 100%;
            height: 98%;
            border-radius: 6px 6px 0 0;
            background: #070b1093;
            margin: 0 auto;
            top: 0;
            opacity: 0;
            transition: all 0.5s;
          }
          &:hover {
            .hidden {
              opacity: 1;
            }
          }
        }
        .card-body {
          padding: 30px;
          flex: 1 1 auto;
          p {
            margin-bottom: 20px;
            line-height: 1.7em;
            font-weight: 400;
            font-size: 16px;
            color: var(--secondary-black-color);
          }
          a {
            text-decoration: none;
            color: var(--black-color);
            margin: 0;
            background: transparent;
            transition: all 0.3s;

            span {
              font-size: 24px;
              line-height: 1.3em;
              font-weight: 600;
            }
            &:hover {
              color: var(--orange-color);
            }
          }
          .btn {
            margin-top: 1.5rem;
            display: flex;
            align-items: center;
            span {
              margin-right: 10px;
              line-height: 1.7rem;
              font-weight: 600;
              font-size: 15px;
              color: var(--orange-color);
            }
            i {
              font-size: 16px;
              font-weight: 700;
              color: var(--orange-color);
              margin: 0;
              transition: all 0.3s;
            }
            &:hover {
              i {
                margin-left: 10px;
              }
            }
          }
        }
      }
    }
  }
}

</style>