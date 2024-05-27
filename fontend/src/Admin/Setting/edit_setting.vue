<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
import { useRoute } from "vue-router";
const router = useRouter();
const route = useRoute();
//---------------------------------------------------
const form = ref([]);
const logo_img = [];

onMounted(async () => {
  editSetting();
});
const editSetting = async () => {
    const id = route.params.id;
  let response = await axios.get(`/api/edit_setting/${id}`);
    form.value = response.data.setting;
};
console.log(form.value)
const handleFileChange = async (event) => {
  logo_img.value = event.target.files[0];
};

const updateSetting = async () => {
    let id = route.params.id;
    const formData = new FormData();
    formData.append("email", form.value.email);
    formData.append("address", form.value.address);
    formData.append("phone", form.value.phone);
    formData.append("facebook", form.value.facebook);
    formData.append("github", form.value.github);
    formData.append("copy_right", form.value.copy_right);
    formData.append("short_desc", form.value.short_desc);
    formData.append("logo_img", logo_img.value);
  
    let response = await axios.post(`/api/update_setting/${id}`, formData).then(() => {
      router.push("/all-setting");
    })
  

};


</script>

<template>
  <div style=" background: rgba(245, 245, 247, 0.5019607843);  flex: auto;">
    <div class="btn" >
        <router-link :to="{ name: 'all-setting' }" >
         All Setting Data
        </router-link>
    </div>
      <form @submit.prevent="updateSetting" enctype="multipart/form-data">
      <h1>Update Setting Data</h1>
      <div class="container">

        <label for="uname"><b>Email </b></label>
        <input v-model="form.email" type="email" placeholder="email " />

        <label for="uname"><b>Address </b></label>
        <input v-model="form.address" type="text" placeholder="address " />

        <label for="uname"><b>Phone </b></label>
        <input v-model="form.phone" type="text" placeholder="phone " />

        <label for="uname"><b>Facebook </b></label>
        <input v-model="form.facebook" type="text" placeholder="facebook url " />

        <label for="uname"><b>Github </b></label>
        <input v-model="form.github" type="text" placeholder="github url " />

        <label for="uname"><b>Copy-Right </b></label>
        <input v-model="form.copy_right" type="text" placeholder="Copy-Right " />

         <label for="uname"><b>Short Description </b></label>
        <textarea v-model="form.short_desc" type="text" placeholder="Short Description  " rows="4"  ></textarea>


        <label for="psw"><b> Image</b></label>
        <input
          @change="handleFileChange"
          type="file"
          placeholder="Product Image"
          name="psw"
          required
        />

        <br /><br />
        <button type="submit">Update Data</button>
      </div>
    </form>
  </div>
</template>

<style lang="scss" scoped>
h1 {
  text-align: center;
  font-size: 25px;
  color: #444;
}
form {
  border: 1px solid #f1f1f1;
  margin: 0 auto;
  background: white;
  width: 60%;
  margin-top: 5px;
  margin-bottom: 50px;
  border-radius: 8px;
  padding: 20px;
}

.form-footer {
  background-color: rgb(241, 241, 241);
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-radius: 8px;
  padding: 4px 16px;
  margin: 0px 12px;
}

input[type="text"],
input[type="password"],
input[type="file"],
input[type="number"],
input[type="email"],
select,
textarea,
.input_wrapper {
  width: 100%;
  padding: 12px 20px;
  margin: 10px 0px 22px 0px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 8px;
   &:focus-visible{
        border: 1px solid #ff6b00a6;
        outline: none;
    }
}

button {
  background-color: #ff6b00;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 8px;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }

  .cancelbtn {
    width: 100%;
  }
}
 .btn {
    text-align: right;
    padding: 50px 50px 20px;
  
      a {
        text-decoration: none;
        font-size: 16px;
        font-weight: 500;
        color: #fff;
        padding: 10px 20px;
        border-radius: 6px;
        border: 1px solid #ff6b00;
        background: #ff6b00;
        transition: all .3s;
      }
      a:hover{
         color: #ff6b00;
         background: #fff;
         border: 1px solid #ff6b00;
      }

  }
</style>
