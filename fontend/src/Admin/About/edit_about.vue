<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
import { useRoute } from "vue-router";
const router = useRouter();
const route = useRoute();
//---------------------------------------------------
const form = ref([]);
const image = [];
const cv = ref();

onMounted(async () => {
  editAbout();
});
const editAbout = async () => {
    const id = route.params.id;
  let response = await axios.get(`/api/edit_about/${id}`);
    form.value = response.data.abouts;

    console.log(form.value, 'value')
   
};

const handleFileChange = async (event) => {
  image.value = event.target.files[0];
};

const handleFileCV = async (event) => {
  cv.value = event.target.files[0];
};

const updateAbout = async () => {
   let id = route.params.id;
  const formData = new FormData();
  formData.append("title", form.value.title);
  formData.append("short_title", form.value.short_title);
  formData.append("description", form.value.description);
  formData.append("complete_project", form.value.complete_project);
  formData.append("year_experience", form.value.year_experience);
  formData.append("image", image.value);
  formData.append("cv", cv.value);


    let response = await axios.post(`/api/update_about/${id}`, formData).then(() => {
      router.push("/All-about");
  })

};


</script>

<template>
  <div style=" background: rgba(245, 245, 247, 0.5019607843); ">
    <div class="btn" >
        <router-link :to="{ name: 'All-about' }" >
        All About Data
        </router-link>
    </div>
    <form @submit.prevent="updateAbout" enctype="multipart/form-data">
      <h1>Update About Data</h1>
      <div class="container">
        <label for="uname"><b>Title </b></label>
        <input
          v-model="form.title"
          type="text"
          placeholder="title "
        />

        <label for="uname"><b>Short Title</b></label>
        <input
          v-model="form.short_title"
          type="text"
          placeholder="short title"
        />
        <label for="uname"><b>Complete Project</b></label>
        <input
          v-model="form.complete_project"
          type="text"
          placeholder="Complete Project"
        />
        <label for="uname"><b>Experience Year</b></label>
        <input
          v-model="form.year_experience"
          type="text"
          placeholder="Experience Year"
        />

        <label for="uname"><b>  Description</b></label>
        <textarea v-model="form.description" type="text" placeholder="description" rows="5"></textarea>

        <label for="psw"><b> Image</b></label>
        <input
          @change="handleFileChange"
          type="file"
          placeholder="Product Image"
          name="psw"
          required
        />

        <label for="psw"><b> CV</b></label>
        <input
          @change="handleFileCV"
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
