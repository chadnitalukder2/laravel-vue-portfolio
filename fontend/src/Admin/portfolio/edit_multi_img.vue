<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
import { useRoute } from "vue-router";
const router = useRouter();
const route = useRoute();
//---------------------------------------------------
const form = ref([]);
const multi_image = [];

onMounted(async () => {
  editImage();
});
const editImage = async () => {
    const id = route.params.id;
  let response = await axios.get(`/api/edit_image/${id}`);
    form.value = response.data.image;
};

const handleFileChange = async (event) => {
  multi_image.value = event.target.files[0];
};

const updateImage = async () => {
    let id = route.params.id;
    const formData = new FormData();
    formData.append("multi_image", multi_image.value);
  
    let response = await axios.post(`/api/update_image/${id}`, formData).then(() => {
      router.push("/all-multi-img");
  })

};


</script>

<template>
  <div style=" background: rgba(245, 245, 247, 0.5019607843);  flex: auto;">
    <div class="btn" >
        <router-link :to="{ name: 'all-multi-img' }" >
         All Multi Image
        </router-link>
    </div>
    <form @submit.prevent="updateImage"  enctype="multipart/form-data">
      <h1>Update Image  </h1>
      <div class="container">
   
        <label for="psw"><b> Image</b></label>
        <input
          @change="handleFileChange"
          type="file"
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
