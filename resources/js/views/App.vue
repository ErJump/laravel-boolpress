<template>
    <section>
        <HeaderComponent/>
        <router-view></router-view>
    </section>
</template>

<script>
import HeaderComponent from "../components/HeaderComponent.vue";

export default {
    components: { HeaderComponent }
}
</script>

<style>

</style>