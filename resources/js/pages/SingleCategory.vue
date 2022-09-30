<template>
    <section class="container-lg pt-5">
        <LoaderComponent v-if="isLoading"/>
        <div v-else>
            <h2 class="mb-3">Category: <span class="badge badge-secondary" :style="'background-color: ' + category.color">{{category.name}}</span></h2>
            <div class="row justify-content-around">
                <PostCard v-for="post in category.posts" :key="post.id" :post="post"/>
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
            category: {},
            isLoading: true,
        };
    },
    methods: {
        getCategory(){
            axios.get('/api/categories/' + this.$route.params.id)
                .then(response => {
                this.category = response.data.results;
                console.log(this.category);
                this.isLoading = false;
            })
                .catch(error => {
                console.log(error);
            });
        }
    },
    created() {
        this.getCategory();
    },
}
</script>

<style>

</style>