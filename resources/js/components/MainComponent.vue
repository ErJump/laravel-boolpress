<template>
    <main class="py-5">
        <div class="container-lg">
            <div class="d-inline-block">
                <label class="d-block" for="titleSearch">Title filter</label>
                <input name="titleSearch" type="text" v-model="titleParameter">
            </div>
            <div class="d-inline-block">
                <label class="d-block" for="postInPage">N. Posts</label>
                <input name="postInPage" type="number" v-model="postInPage">
            </div>
            <div @click="getPosts()" class="btn btn-primary d-inline">Search</div>
            <div class="row my-4 justify-content-center">
                <PostCard v-for="post in posts" :key="post.id" :post="post" />
            </div>
            <div class="d-flex align-items-center justify-content-around w-100">
                <div v-if="currentPage != 1" class="btn btn-primary" @click="getPrevPage(), getPosts()">Prev Page</div>
                <h5>{{currentPage}}</h5>
                <div class="btn btn-primary" @click="getNextPage(), getPosts()">Next Page</div>
            </div>  
        </div>
    </main>
</template>

<script>
    import axios from 'axios'
    import PostCard from './PostCard.vue'

    export default {
    name: "MainComponent",
    components: { PostCard },
    data: function () {
        return {
            posts: [],
            currentPage: 1,
            titleParameter: '',
            apiUrl: '/api/posts',
            postInPage: 10,
        };
    },
    methods: {
        getNextPage() {
            this.currentPage++;   
        },
        getPrevPage() {
            this.currentPage--;
        },
        getPosts(){
            axios.get(this.apiUrl, {
                params: {
                    title: this.titleParameter,
                    page: this.currentPage,
                    postInPage: this.postInPage,
                }
            })
                .then(response => {
                this.posts = response.data.results.data;
            })
                .catch(error => {
                console.log(error);
            });
        }
    },
    created() {
        this.getPosts();
    }, 
}
    
</script>

<style>

</style>