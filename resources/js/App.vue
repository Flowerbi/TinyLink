<template>
    <ContainerLayout>
        <h1 class="font-bold text-4xl pt-10 mb-4">Short Your Link!</h1>
        <div class="form mb-15">
            <input v-model="urlInput"
                   class="border border-b-gray-300 w-1/2 p-2 placeholder-gray-300 rounded-bl-sm rounded-tl-sm"
                   type="text" placeholder="URL">
            <button @click="submitUrl"
                    class="cursor-pointer hover:bg-emerald-400 transition-all bg-emerald-500 p-[9px] rounded-tr-sm rounded-br-sm">
                Create URL
            </button>
        </div>
        <div class="urls flex flex-col gap-5" v-if="Urls">
            <div class="url border border-gray-300 p-3 rounded-sm" v-for="Url in Urls">
                <div class="source-link text-2xl font-bold">URL - <a class="underline" target="_blank" :href="Url.link_source">{{ Url.link_source }}</a></div>
                <div class="shorted-link text-2xl font-bold">Новый URL - <a class="underline" target="_blank" :href="Url.link_shorted">{{ Url.link_shorted }}</a></div>
                <div class="quantity-follow text-gray-400">Количество переходов: {{ Url.quantity_follow }}</div>
                <div class="quantity-follow text-gray-400">Дата создания: {{ Url.created_at }}</div>
                <a href="#" class="hover:text-sky-300 transition-all pt-3 inline-block text-sky-500">Подробнее...</a>
            </div>
        </div>
    </ContainerLayout>
</template>

<script>
import ContainerLayout from "@/Layout/ContainerLayout.vue";
import axios from "axios";

export default {
    name: "App",

    data() {
        return {
            urlInput: '',
            Urls: []
        }
    },

    methods: {
        getUrls() {
            axios.get('/api/urls')
                .then(res => {
                    this.Urls = res.data
                })
        },
        submitUrl() {
            axios.post('/api/urls', {url: this.urlInput})
                .then(res => {
                    this.urlInput = ''
                    this.getUrls()
                })
        },
    },

    mounted() {
        this.getUrls();
    },

    components: {
        ContainerLayout
    }
}
</script>


<style scoped>

</style>
