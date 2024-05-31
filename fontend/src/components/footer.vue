<script setup>
import axios from "axios";
import { ref , onMounted} from "vue";
import { useRouter } from "vue-router";
const router = useRouter();

const setting = ref([]);

onMounted(async () => {
  getSetting();
});

const getSetting = async () => {
  let response = await axios.get("/api/get_setting");
    setting.value = response.data.setting;
};


</script>

<template>
 <!-- footer start -->
      <div class="footer" id="footer">
        <div class="row">
        <div class="container">
          <div class="footer-top">
            <div class="first">
              <img v-if=" !setting.logo_img == ''" :src="setting.logo_img" alt="logo">
                 <img v-else src="../assets/img/LogoWhite.png"  alt="logo">
              <p>{{ setting.short_desc }}</p>
              <h3>{{ setting.email }}</h3>
            </div>
            <div class="second">
              <h4>Explore Link</h4>
              <div class="link">
                <ul>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Resume</a></li>
                  <li><a href="#">Portfolio</a></li>
                  <li><a href="#">Blog</a></li>
                </ul>
              </div>
            </div>
            <div class="third second">
              <h4>My Services</h4>
              <div class="link">
                <ul>
                  <li><a href="#">UI/UX Design</a></li>
                  <li><a href="#">Mobile App</a></li>
                  <li><a href="#">Graphics Design</a></li>
                  <li><a href="#">Web Developer</a></li>
                </ul>
              </div>
            </div>
            <div class="four">
              <h4>Follow me</h4>
              <div class="media">
                <ul>
                  <li>
                    <a :href="setting.facebook">
                      <div class="icon">
                        <i class="fa-brands fa-facebook-f"></i>
                      </div>
                
                    </a>
                  </li>
                  <li>
                    <a :href=" setting.github" target="_blank">
                      <div class="icon">
                        <i class="fa-brands fa-github"></i>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="icon">
                        <i class="fa-brands fa-dribbble"></i>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="icon">
                        <i class="fa-brands fa-behance"></i>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
                <div class="items-1">
                  <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <div class="project">
                   <a href="#"><p>{{ setting.address  }}</p></a>
                  </div>
                  </div>
                  <div class="items-1">
                    <div class="icon">
                      <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="project">
                     <a href="#"><p>+{{ setting.phone  }}</p></a>
                    </div>
                
              </div>
            </div>
          </div>
          </div>
          </div>
          <div class="footer-bottom">
            <div class="margin-bottom">
              <div class="left-bottom">
                <p>{{ setting.copy_right  }}</p>
              </div>
              <div class="right-bottom">
                <ul>
                  <li>
                    <a href="#">Terms & Condition</a>
                  </li>
                  <li>
                    <a href="#">Privacy policy</a>
                  </li>
                </ul>
              </div>
            </div>
        </div>
        
      </div>
      <!-- footer end -->
</template>



<style lang="scss" scoped>
.footer {
  background-color: var(--black-color);
  .row {
    border-bottom: 1px solid #515151;
  }
  .container {
    padding: 0 100px;
    @media only screen and (min-width: 1500px){
      padding:0px 150px ;
    }
    @media only screen and (max-width: 992px){
        padding:0px 50px;
    }
    @media only screen and (max-width: 576px) {
      padding: 0px 10px;
    }
    .footer-top {
      padding: 130px 0px;
      display: flex;
      justify-content: space-between;
      align-items: start;
      flex-wrap: wrap;
      color: white;
      gap: 24px;
      @media only screen and (max-width: 992px) {
        padding: 90px 0px;
      }
      .first {
        flex-basis: 25%;
        @media only screen and (max-width: 992px) {
          flex-basis: 50%;
        }
        @media only screen and (max-width: 576px) {
        flex-basis: 100%;
        }
        img {
          margin-bottom: 36px;
          vertical-align: middle;
        }
        p {
          margin-bottom: 30px;
          line-height: 1.7em;
          font-size: 16px;
        }
        h3 {
          font-size: 20px;
        }
      }
      .second {
        flex-basis: 20%;
        @media only screen and (max-width: 992px) {
            flex-basis: 30%;
          }
        h4 {
          font-size: 21px;
          font-weight: 500;
          color: var(--white-color);
        }
        .link {
          margin-top: 57px;
          ul {
            list-style: none;
            li {
              margin-bottom: 20px;
            }
            a {
              text-decoration: none;
              font-size: 16px;
              font-weight: 400;
              line-height: 1.7em;
              color: var(--white-color);
              transition: all 0.3s;
            }
            a:hover {
              color: var(--orange-color);
            }
          }
        }
      }
      .third {
        flex-basis: 20%;
        @media only screen and (max-width: 992px) {
            flex-basis: 30%;
          }
      }
      .four {
        flex-basis: 25%;
        @media only screen and (max-width: 992px) {
            flex-basis: 50%;
          }
          @media only screen and (max-width: 576px) {
            flex-basis: 100%;
            }
        h4 {
          font-size: 21px;
          font-weight: 500;
          color: var(--white-color);
        }
        .media {
          margin-top: 63px;
          margin-bottom: 35px;
          ul {
            list-style: none;
            display: flex;
            align-items: center;
            li {
              margin-right: 20px;
              a {
                text-decoration: none;
                color: #fff;
                font-size: 21px;
                background: transparent;
                .icon {
                  width: 42px;
                  height: 42px;
                  background-color: var(--orange-color);
                  border-radius: 6px;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  transition: all 0.4s;
                  border-top: 3px solid orangered;
                  border-right: 3px solid orangered;
                  &:hover {
                    background-color: #fff;
                    color: var(--orange-color);
                  }
                }
              }
            }
          }
        }

        .items-1 {
          display: flex;
          margin-bottom: 30px;
          .icon {
            margin-right: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            i {
              color: var(--orange-color);
              font-size: 21px;
            }
          }
          .project {
            p {
              font-size: 16px;
              font-weight: 400;
              line-height: 1.7em;
              color: var(--white-color);
              transition: all 0.4s;
            }
            a {
              text-decoration: none;
            }
          }
        }
      }
    }
  }
  .footer-bottom {
    padding: 35px 0px;
 
    .margin-bottom {
      padding: 0 100px;

      @media only screen and (min-width: 1500px){
        padding:0px 250px ;
      }
      @media only screen and (max-width: 992px){
        padding:0px 50px;
    }
    @media only screen and (max-width: 576px) {
      padding: 0px 10px;
    }
      display: flex;
      justify-content: space-between;
      align-items: start;
      color: white;
      flex-wrap: wrap;
      .left-bottom {
        p {
          font-size: 16px;
          line-height: 1.7em;
          color: #fff;
        }
      }
      .right-bottom {
        ul {
          display: flex;
          justify-content: space-between;
          list-style: none;
          gap: 50px;
        
          a {
            text-decoration: none;
            color: var(--white-color);
            font-size: 16px;
            transition: all 0.3s;
          }
          a:hover {
            color: var(--orange-color);
          }
        }
      }
    }
  }
}

</style>