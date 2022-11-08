<template>
  <main>

    <section class="container d-flex flex-wrap justify-content-center my-5">
      <HomeCard v-for="post in posts" :key="post.id" :singleHomeCard="post"/>
    </section>

  </main>
</template>
  
<script>
import axios from 'axios';
import HomeCard from '../components/HomeCard.vue';


export default {

  components: {
    HomeCard,
  },

  data: function () {
    return {
      posts: [],
    }
  },

  methods: {
    getPosts(postsPage = 1) {
      axios.get('/api/posts', {
        page: postsPage
      }).then((response) => {
        console.log(response.data.results.data);
        this.posts = response.data.results.data;
      }).catch((error) => {
        console.error(error);
      })
    }
  },

  created() {
    this.getPosts();
  }
}
</script>
  
<style>

</style>