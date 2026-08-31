<template>
    <ContainerLayout>
        <h1 class="font-bold text-4xl pt-10 mb-4">Short Your Link!</h1>
        <div class="form">
            <input v-model="urlInput"
                   class="border border-b-gray-300 w-1/2 p-2 placeholder-gray-300 rounded-bl-sm rounded-tl-sm"
                   type="text" placeholder="URL">
            <button @click="submitUrl"
                    class="cursor-pointer hover:bg-emerald-400 transition-all bg-emerald-500 p-[9px] rounded-tr-sm rounded-br-sm">
                Create URL
            </button>
        </div>
    </ContainerLayout>
</template>

<script>
import ContainerLayout from "@/Layout/ContainerLayout.vue";

export default {
    name: "App",

    data() {
        return {
            urlInput: ''
        }
    },

    methods: {
        submitUrl() {
            console.log(this.urlInput);
        }
    },

    components: {
        ContainerLayout
    }
}
</script>


<style scoped>

</style>
