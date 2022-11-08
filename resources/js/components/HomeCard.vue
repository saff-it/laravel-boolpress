<template>
    <div class="card m-2" style="width: 18rem;">
        <img :src="singleHomeCard.post_image" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ singleHomeCard.title }}</h5>
            <p class="card-text">{{ singleHomeCard.post_date }}</p>
        </div>
    </div>
</template>

<script>
export default {
    props: ['singleHomeCard'],
}
</script>

<style>

</style>