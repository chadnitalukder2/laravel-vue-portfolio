<script setup>
import Header from './page/header.vue';
import About from './page/about.vue';
import Services from './page/services.vue';
import Resume from './page/resume.vue';
import Portfolio from './page/protfolio.vue';
import Blog from './page/blog.vue';
import Contact from './page/contact.vue';
import { ref, onMounted } from 'vue';
import axios from 'axios';

const user = ref();
onMounted(async () => {
    const data = await axios.get('/api/user');
    console.log('data', data);
})

</script>

<template>
    <div>
     <Header></Header>
     <About></About>
     <Services></Services>
     <Resume></Resume>
     <Portfolio></Portfolio>
     <Blog></Blog>
     <Contact></Contact>
    </div>
</template>



<style lang="scss" scoped>

</style>