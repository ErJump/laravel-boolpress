<template>
    <section class="pt-5">
        <div class="container-lg">
            <LoaderComponent v-if="isLoading" />
            <div v-else class="row justify-content-around">
                <div class="card col-5 mb-3 px-0"  v-for="tag in tags" :key="tag.id">
                    <div class="card-header">
                        <router-link :to="'/tags/' + tag.id">
                            <strong>#{{tag.name}}</strong>
                        </router-link>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li v-for="post in tag.posts" :key="post.id" class="list-group-item">
                            <router-link :to="'/posts/' + post.slug" class="text-dark">{{post.title}}</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from 'axios'
import LoaderComponent from '../components/LoaderComponent.vue'

export default {
    name: "TagsPage",
    components: {
        LoaderComponent,
    },
    data: function () {
        return {
            tags: [],
            isLoading: true,
            apiUrl: '/api/tags',
        };
    },
    methods: {
        getTags(){
            axios.get(this.apiUrl)
                .then(response => {
                this.tags = response.data.results.data;
                this.isLoading = false;
            })
                .catch(error => {
                console.log(error);
            });
        }
    },
    created() {
        this.getTags();
    },
}
</script>

<style>

</style>