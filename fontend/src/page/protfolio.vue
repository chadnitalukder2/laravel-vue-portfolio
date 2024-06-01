<script setup>
import axios from "axios";
import { ref , onMounted, watch } from "vue";
import { useRouter } from "vue-router";
const router = useRouter();

const portfolio = ref([]);
const services = ref([]);

const filter = ref({
    service_id: "",
});

onMounted(async () => {
  getPortfolio();
  getService();
});

const getPortfolio = async () => {
  let response = await axios.get("/api/get_portfolio",{ params : { filter: filter.value }}  );
    portfolio.value = response.data.portfolio;
};

const getService = async () => {
  let response = await axios.get("/api/get_service");
    services.value = response.data.services;
};

watch(filter, (newValue, oldValue) => {
      getPortfolio();
}, { deep: true });

</script>

<template>
    <div>
         <!-- Protfolio start -->
      <div class="portfolio" id="portfolio">
        <div class="container">
        <div class="heading">
          <div class="sub-heading">
            <img src="../assets/img/orangeDot.png" alt="orange">
            <p>My portfolio</p>
          </div>
          <h2>VISIT MY PORTFOLIO</h2>
        </div>
        <div class="mobile-row">
          
          <div class="controls">
                        <button type="button" :class="{ active: filter.service_id === '' }" @click="filter.service_id = ''">All</button>
                        <button
                            type="button"
                            v-for="item in services"
                            :key="item.id"
                            :class="{ active: filter.service_id === item.id }"
                            @click="filter.service_id = item.id"
                        >
                            {{ item.title }}
                        </button>
          </div>
          <div class="portpoli-massonary">
            
            <div class="items " v-for="item in portfolio" :key="item.id">
              <div class="hidden">
              </div>
              <img :src="item.image">
              <div class="info">
                <p>{{ item.title }}</p>
                <h3>{{ item.short_title }}</h3>
              </div>
            </div>
           
          </div>

        </div>
        </div>
      </div>
      <!-- Protfolio end -->
    </div>
</template>


<style lang="scss" scoped>
    .portfolio {
  padding: 65px 0;

  @media only screen and (min-width: 1500px){
    padding:70px 50px ;
  }
  @media only screen and (max-width: 992px) {
    padding: 90px 0px;
  }
  .container {
    padding: 0 100px;
    @media only screen and (max-width: 992px) {
      padding: 0px 50px;
    }
    @media only screen and (max-width: 576px) {
      padding: 0px 10px;
    }

    .mobile-row {
      margin-top: 50px;

      .controls {
        margin-bottom: 45px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
        @media only screen and (max-width: 992px) {
          gap: 8px;
          padding: 0 15px;
        }
        button {
          font-weight: 500;
          font-size: 15px;
          padding: 15px;
          border: none;
          background: transparent;
          position: relative;
          color: var(--secondary-black-color);
          @media only screen and (max-width: 992px) {
            font-size: 14px;
          }
          @media only screen and (max-width: 576px) {
            padding: 10px;
           }
          &:hover {
            color: var(--black-color);
            position: relative;

            &::after {
              content: "";
              position: absolute;
              height: 2px;
              width: 30%;
              bottom: 0;
              left: 50%;
              transform: translatex(-50%);
              background-color: var(--orange-color);
            }
          }
        }
      }
      .active{
          &::after {
              content: "";
              position: absolute;
              height: 2px;
              width: 30%;
              bottom: 0;
              left: 50%;
              transform: translatex(-50%);
              background-color: var(--orange-color);
            }
      }

      .portpoli-massonary {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 24px;
        text-align: center;
        @media only screen and (max-width: 992px) {
          grid-template-columns: 1fr 1fr;
        }
        @media only screen and (max-width: 576px) {
          grid-template-columns: 1fr;
      }

        .items {
          position: relative;
          overflow: hidden;
          border-radius: 6px;
          img {
            width: 100%;
            height: 340px;
          }
          p {
            font-size: 16px;
            font-weight: 400;
            line-height: 1.7em;
            color: var(--whitw-color);
            text-align: start;
          }
          h3 {
            font-size: 21px;
            font-weight: 600px;
            line-height: 1.3em;
            color: var(--whitw-color);
            text-align: start;
          }
          .info {
            background: var(--orange-color);

            width: 70%;
            margin: 0 auto;
            border-radius: 10px;
            padding: 20px;
            position: absolute;
            transform: translate(22%, 10%);
            visibility: hidden;
            transition: all 0.5s;
          }
          .hidden {
            height: 0;
            transition: all 0.5s;
            background: #070b1093;
            height: 100%;
            position: absolute;
            width: 100%;
            top: -350px;
          }
          &:hover {
            .info {
              visibility: visible;
              transform: translate(22%, -150%);
            }
            .hidden {
              top: 0;
            }
          }
        }
    
      }
    }
  }
}

</style>