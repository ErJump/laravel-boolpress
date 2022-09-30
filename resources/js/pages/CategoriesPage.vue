<template>
    <section class="pt-5">
        <div class="container-lg">
            <LoaderComponent v-if="isLoading" />
            <div v-else class="row justify-content-around">
                <div class="card col-5 mb-4 px-0"  v-for="category in categories" :key="category.id">
                    <div class="card-header text-center text-white " :style="'background-color: ' + category.color">
                        <strong>{{category.name}}</strong>
                    </div>
                    <div class="list-group list-group-flush">
                        <router-link :to="'/categories/' + category.id" class="btn btn-primary">
                            Go to category
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from 'axios'
import LoaderComponent from '../components/LoaderComponent.vue'

export default {
    name: "CategoriesPage",
    components: {
        LoaderComponent,
    },
    data: function() {
        return {
            categories: [],
            isLoading: true,
        };
    },
    methods: {
        getCategories() {
            axios.get('/api/categories')
                .then(response => {
                this.categories = response.data.results;
                this.isLoading = false;
            })
                .catch(error => {
                console.log(error);
            });
        }
    },
    created() {
        this.getCategories();
    },
}
</script>

<style>

</style>