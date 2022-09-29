<template>
    <div class="card col-5 m-2">
        <img class="card-img-top" :src="post.post_image" alt="Image">
        <div class="card-body">
            <h5 class="card-title">
                {{post.title}}
            </h5>
            <h6 class="card-title"> Witten by : {{post.user.name + ' | ' + post.post_date}}</h6>
            <p class="card-text">{{ post.post_content }}</p>
            <router-link class="btn btn-primary" :to="'/posts/' + post.id">Go to post</router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: "PostCard",
    props: {
        post: {
        type: Object,
        required: true,
        },
    },
};

</script>

<style>

</style>