<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">BoolPress</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link to="/" class="nav-link">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/about" class="nav-link">About</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/tags" class="nav-link">Tags</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/categories" class="nav-link">Categories</router-link>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Back-office</a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style>

</style>