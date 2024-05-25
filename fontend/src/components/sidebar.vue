<template>
    <div class="side-bar-wrapper">
        <router-link active-class="active" :to="{ name: 'dashboard' }">Dashboard</router-link>
        <router-link active-class="active" :to="{ name: 'all-header' }"> Header</router-link>
     
        
    </div>
</template>


<script setup>
// import { defineProps } from 'vue'

// const props = defineProps({
//   user: String
// })

</script>

<style lang="scss" scoped>

.side-bar-wrapper {
    display: flex;
    flex-direction: column;
    width: 200px;
    align-items: center;
    gap: 15px;
    border-right: 1px solid #EAECF0;
    height: 100vh;
    background: #fff5ef;
    padding: 14px;
    padding-top: 30px;
    a {
        text-decoration: none;
        font-weight: 500;
        font-size: 18px;
         border: 1px solid #ff6b00;
        padding: 10px 15px;
        width: calc(100% - 30px);
        color: #ff6b00;
        background: white;
        border-radius: 6px;
        box-shadow: 2px 2px 3px 2px #e3dfdf7a;
        &.active {
            background: #ff6b00;
            color: #fff;
            border-radius: 8px;
        }
    }
}


</style>