<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
const router = useRouter();
//---------------------------------------------------
const setting = ref([]);

onMounted(async () => {
  getSetting();
});

const getSetting = async () => {
  let response = await axios.get("/api/get_setting");
    setting.value = response.data.setting;
};
//---------------------------------------------------
const form = ref([]);


const addContact = async () => {
   const formData = new FormData();
  formData.append("name", form.value.name);
  formData.append("email", form.value.email);
  formData.append("phone", form.value.phone);
  formData.append("subject", form.value.subject);
  formData.append("message", form.value.message);

  console.log({ formData });
  let response = await axios.post("/api/add_contact", formData);
  form.value = '';
};

</script>


<template>
    <div>
        <!-- Contact start -->
      <div class="contact" id="contact">
        <div class="container">
          <div class="heading">
            <div class="sub-heading">
              <img src="../assets/img/orangeDot.png" alt="orange">
              <p>My Contact</p>
            </div>
            <h2>I WANT TO HEAR FROM YOU</h2>
          </div>
          <div class="home">
            <div class="home-left">
              <form @submit.prevent="addContact">
                <input type="hidden" v-model="id">
                <div class="box-1">
                  <input type="text" class="name" v-model="form.name" placeholder="Your Name">
                </div>

                <div class="box-1">
                  <input type="text" class="name" v-model="form.email" placeholder="Your Email">
                </div>
                <div class="box-1">
                  <input type="text" class="name" v-model="form.phone" placeholder="Your Phone">
                </div>
                <div class="box-1">
                  <input type="text" class="name" v-model="form.subject" placeholder="Subject">
                </div>
                <div class="box-1 text-area">
                  <input type="text" class="name" v-model="form.message" placeholder="Message">
                </div>
                <button type="submit" class="submit-btn">
                  <span>Send Me Message</span>
                </button>
              </form>
            </div>
            <div class="home-right">
              <div class="margin">
                <div class="items-1">
                <div class="icon">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="project">
                  <h4>Address</h4>
                 <a href="#"><p>{{ setting.address }}</p></a>
                </div>
                </div>
                <div class="items-1">
                  <div class="icon">
                    <i class="fa-solid fa-envelope"></i>
                  </div>
                  <div class="project">
                    <h4>Phone</h4>
                   <a href="#"><p>+{{ setting.phone }}</p></a>
                  </div>
                  </div>
                  <div class="items-1">
                    <div class="icon">
                      <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="project">
                      <h4>Email</h4>
                     <a href="#"><p>{{ setting.email }}</p></a>
                    </div>
                    </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Contact end -->
    </div>
</template>


<style lang="scss" scoped>
.contact {
  padding: 65px 0px 130px 0px;

  @media only screen and (min-width: 1500px){
    padding:70px 250px ;
  }
  @media only screen and (max-width: 992px) {
    padding: 45px 0px 90px 0px;
  }
  .container {
    padding: 0 100px;
    @media only screen and (max-width: 992px){
      padding:0px 50px;
  }
  @media only screen and (max-width: 576px) {
    padding: 0px 10px;
  }

    .home {
      margin-top: 50px;
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      @media only screen and (max-width: 800px) {
       
        flex-wrap: wrap;
      }
     
      gap: 24px;
      .home-left {
        flex-basis: 70%;
        @media only screen and (max-width: 992px) {
          flex-basis: 100%;
          flex-wrap: wrap;
        }
        form {
          display: flex;
          width: 100%;
          justify-content: space-between;
          flex-wrap: wrap;

          .box-1 {
            flex-basis: 45%;
            gap: 5%;
            margin: 10px 0;
            @media only screen and (max-width: 576px) {
              flex-basis: 100%;
            }
            input {
              padding: 20px;
              border: 1px solid #ffe2d1;
              border-radius: 6px;
              line-height: 1.7em;
              width: 100%;
              font-size: 16px;
              font-weight: 400;

              &:focus-visible {
                outline: none;
                color: var(--black-color);
                border-color: #86b7fe;
                outline: 0;
                box-shadow: 0 0 0 0.25rem rgba(255, 107, 0, 0.2);
              }
            }
          }
          .text-area {
            flex-basis: 100%;
          }
        }
      }
      .home-right {
        flex-basis: 40%;
        @media only screen and (max-width: 992px) {
          width: 100%;
        }
        .margin {
          display: flex;
          flex-wrap: wrap;
          padding-left: 78px;
          @media only screen and (max-width: 992px) {
            padding-left: 0;
          }
          .items-1 {
            display: flex;
            margin-bottom: 30px;
            .icon {
              margin-right: 10px;
              width: 60px;
              height: 60px;
              background: var(--light-color);
              border-radius: 8px;
              display: flex;
              justify-content: center;
              align-items: center;
              i {
                color: var(--orange-color);
                font-size: 30px;
              }
            }
            .project {
              h4 {
                font-size: 21px;
                font-weight: 500;
                color: var(--black-color);
              }
              p {
                font-size: 16px;
                font-weight: 400;
                line-height: 1.7em;
                color: var(--secondary-black-color);
                transition: all 0.4s;
              }
              a {
                text-decoration: none;
              }
              p:hover {
                color: var(--orange-color);
              }
            }
          }
        }
      }
    }
  }
  textarea {
    min-height: calc(1.5em + 0.75rem + calc(var(--bs-border-width) * 2));
    height: 87px;
}
}

</style>