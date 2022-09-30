<template>
    <section class="pt-5">
        <div class="container-lg">
            <LoaderComponent v-if="isLoading" />
            <div v-else class="row justify-content-around">
                
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