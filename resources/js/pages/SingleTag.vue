<template>
    <section class="container-lg pt-5">
        <LoaderComponent v-if="isLoading"/>
        <div v-else>
            <h2 class="mb-3">Tag: #{{tag.name}}</h2>
            <div class="row justify-content-around">
                <PostCard v-for="post in tag.posts" :key="post.id" :post="post"/>
            </div>
        </div>
    </section>
</template>

<script>
import axios from 'axios'
import LoaderComponent from '../components/LoaderComponent.vue'
import PostCard from '../components/PostCard.vue';

export default {
    name: "SingleTag",
    components: {
    LoaderComponent,
    PostCard
},
    data: function () {
        return {
            tag: {},
            isLoading: true,
        };
    },
    methods: {
        getTag(){
            axios.get('/api/tags/' + this.$route.params.id)
                .then(response => {
                this.tag = response.data.results;
                this.isLoading = false;
            })
                .catch(error => {
                console.log(error);
            });
        }
    },
    created() {
        this.getTag();
    },
}
</script>

<style>

</style>