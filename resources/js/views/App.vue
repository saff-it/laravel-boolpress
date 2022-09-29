<template>
  <div>
        <HeaderComponent/>

        <router-view> </router-view>

  </div>
</template>

<script>
    import HeaderComponent from '../components/HeaderComponent.vue';

export default {
    
    components: {
        HeaderComponent,
    }
}
</script>

<style>

</style>