<template>
    <section class="container-lg pt-5">
        <img class="card-img-top" :src="post.post_image" alt="Image">
        <div class="card-body">
            <h5 class="card-title">{{post.title}}</h5>
            <h6 class="card-title"> Witten by : {{post.user.name + ' | ' + post.post_date}}</h6>
            <p class="card-text">{{ post.post_content }}</p>
        </div>
    </section>
</template>

<script>
import axios from 'axios'

export default {
    name: "SinglePost",
    data: function () {
        return {
            post: {},
        };
    },
    methods: {
        getPost(){
            axios.get('/api/posts/' + this.$route.params.id)
                .then(response => {
                this.post = response.data.results;
            })
                .catch(error => {
                console.log(error);
            });
        }
    },
    created() {
        this.getPost();
    },
}
</script>

<style>

</style>