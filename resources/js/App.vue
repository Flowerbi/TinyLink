<template>
    <ContainerLayout>
        <router-view></router-view>
    </ContainerLayout>
</template>

<script>
import ContainerLayout from "@/Layout/ContainerLayout.vue";

export default {
    name: "App",

    components: {
        ContainerLayout
    }
}
</script>


<style scoped>

</style>
