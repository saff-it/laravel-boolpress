<template>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://127.0.0.1:8000/admin/posts">Boolpress</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <router-link class="nav-link active" to="/">Home</router-link>
                    </li>

                    <li class="nav-item">
                        <router-link class="nav-link active" to="/about">About</router-link>
                    </li>

                    <li class="nav-item">
                        <router-link class="nav-link active" to="/gallery">Gallery</router-link>
                    </li>

                    <li class="nav-item">
                        <router-link class="nav-link active" to="/tags">Tags</router-link>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: 'HeaderComponent',
}
</script>

<style>

</style>