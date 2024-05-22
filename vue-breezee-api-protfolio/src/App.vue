<script setup>
import Nav from './components/Nav.vue';
import Footer from './components/footer.vue';
</script>

<template>
 <main>
  <Nav></Nav>
  <router-view />
  <Footer></Footer>
 </main>
</template>

<style>

</style>