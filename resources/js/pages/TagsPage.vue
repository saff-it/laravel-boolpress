<template>

<main>
    <ul>
      <li v-for="tag in tags" :key="tag.id"> {{tag.name}}</li>
    </ul>
</main>

</template>

<script>
import axios from 'axios';

export default {
    name: 'TagsPage',

    data: function() {
    return{
      tags: [],
    }
  },

  methods: {
    getTags(tagsPage =1){

      axios.get('/api/tags' , {
        page: tagsPage
      }).then((response) => {
        console.log(response.data.results.data);
        this.tags = response.data.results.data;
      }).catch((error) => {
        console.error(error);
      })
    }
  },

  created(){
    this.getTags();
  }
}
</script>

<style>

</style>