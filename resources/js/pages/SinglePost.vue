<template>
    <section class="container-lg pt-5">
        <LoaderComponent v-if="isLoading"/>
        <div v-else>
            <img class="card-img-top" :src="post.post_image" alt="Image">
            <div class="card-body">
                <h5 class="card-title">{{post.title}}</h5>
                <h6 class="card-title"> Witten by : {{post.user.name + ' | ' + post.post_date}}</h6>
                <p class="card-text">{{ post.post_content }}</p>
            </div>
        </div>
    </section>
</template>

<script>
import axios from 'axios'
import LoaderComponent from '../components/LoaderComponent.vue'

export default {
    name: "SinglePost",
    components: { 
        LoaderComponent
    },
    data: function () {
        return {
            post: {},
            isLoading: true,
        };
    },
    methods: {
        getPost(){
            axios.get('/api/posts/' + this.$route.params.id)
                .then(response => {
                this.post = response.data.results;
                this.isLoading = false;
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