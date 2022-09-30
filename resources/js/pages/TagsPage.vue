<template>
    <section class="pt-5">
        <div class="container-lg">
            <LoaderComponent v-if="isLoading"/>
            <div v-else>
                <ul>
                    <li v-for="tag in tags" :key="tag.id">
                        <router-link :to="'/tags/' + tag.id">{{tag.name}}</router-link>
                        <ul>
                            <li v-for="post in tag.posts" :key="post.id">
                                <router-link :to="'/posts/' + post.slug">{{post.title}}</router-link>
                            </li>
                        </ul>
                    </li>
                </ul>
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