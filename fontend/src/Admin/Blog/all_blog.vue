<script setup>
import { useNotification } from '@kyvg/vue3-notification';
const { notify } = useNotification();

import axios from "axios";
import { ref , onMounted} from "vue";
import { useRouter } from "vue-router";
const router = useRouter();

const blogs = ref([]);

onMounted(async () => {
  getBlog();
});

const getBlog = async () => {
  let response = await axios.get("/api/get_blog");
    blogs.value = response.data.blogs;
};
console.log('blog', blogs.value)
const deleteBlog = (id) => {
  axios.get(`/api/delete_blog/${id}`).then(() => {
    notify({
      title: "Blog Item Deleted",
      type: "success",
    });
    getBlog();
  });
};

</script>

<template>
  <div class="container" style="flex: auto;">
    <div class="table-box" >
      <div class="btn" >
          <router-link :to="{ name: 'add-blog' }" >
            Add Blog
          </router-link>
      </div>
      <h1>All Blog Data</h1>
      <table id="customers">
        <tr>
          <th>#ID</th>
          <th>Image </th>
          <th>Title </th>
          <th>Action</th>
        </tr>
        <tbody  v-for="item in blogs" :key="item.id">
          <tr>
            <td>{{ item.id }}</td>
            <td style="width: 70px; height: 60px">
              <img
                 :src="item.image"
                style="width: 100%; height: 100%"
              />
            </td>
            <td> {{ item.title }}</td>
            <td>
            <span  @click="deleteBlog(item.id)" style="background: red; margin-right: 5px; cursor: pointer;">Delete</span>
            <router-link :to="{ name: 'edit-blog', params: { id: item.id } }">Edit</router-link>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<style lang="scss" scoped>
#myModal{
.modal_footer{
  button{
  
  cursor: pointer;
  background: #c1c1c1;
  color: #fff;
  border-radius: 4px;
  text-decoration: none;
  transition: all 0.4s;
  line-height: normal;
  min-width: 120px;
  border: none;
  min-height: 40px;
  border-radius: 3px;
  margin: 0 5px;
  }
 
}
 
}
h1 {
  margin-top: 0px;
  margin-bottom: 20px;
  font-size: 24px;
  color: #444;
}
table {
  border-radius: 6px;
  overflow: hidden;
}

.container {
  width: 100%;
  background: #f5f5f780;
}
.table-box {
  padding: 50px;
  border-radius: 8px;

  .btn {
    text-align: right;
    padding-bottom: 10px;
  
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
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td,
#customers th {
  border: 1px solid rgba(0, 0, 0, 0.085);
  padding: 10px 10px;
  text-align: left;
}

#customers tr:nth-child(even) {
  background-color: #f2f2f2;
}

#customers th {
  padding-top: 8px;
  padding-bottom: 8px;
  text-align: left;
  background-color: rgb(237 236 236 / 68%);
  color: #444;
}
td{
span, a{
        text-decoration: none;
        background: skyblue;
        padding: 6px 12px;
        border-radius: 6px;
        color: #0e0d0d;
        font-weight: 600;
    }
}
</style>
