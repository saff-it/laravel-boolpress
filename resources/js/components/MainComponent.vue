<template>
  <main>
    <ul>
      <li v-for="post in posts" :key="post.id"> {{post.title}}</li>
    </ul>
  </main>
</template>

<script>
  import axios from 'axios';

export default {
  
  data: function() {
    return{
      posts: [],
    }
  },

  methods: {
    getPosts(postsPage =1){
      axios.get('/api/posts' , {
        page: postsPage
      }).then((response) => {
        console.log(response.data.results.data);
        this.posts = response.data.results.data;
      }).catch((error) => {
        console.error(error);
      })
    }
  },

  created(){
    this.getPosts();
  }
}
</script>

<style>

</style>