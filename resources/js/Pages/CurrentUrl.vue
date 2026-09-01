<template>
    <router-link class="hover:text-white transition-all mt-7 mb-3 inline-block text-gray-400 underline text-lg" :to="{name: 'main-url.page'}">Back</router-link>
    <div class="url-info border border-gray-200 rounded-md text-gray-200 p-5 mb-10">
        <div class="source-link text-2xl font-bold">URL -
            <a class="underline" target="_blank"
               :href="Url.link_source">
                {{
                    Url.link_source
                }}
            </a>
        </div>
        <div class="shorted-link text-2xl font-bold">Новый URL -
            <a @click="getUrls()" class="underline"
               target="_blank" :href="Url.link_shorted">
                {{
                    Url.link_shorted
                }}</a></div>
        <div class="quantity-follow text-gray-400">Общее количество переходов: {{ Url.quantity_follow }}</div>
        <div class="quantity-follow text-gray-400">Дата создания: {{ Url.created_at }} UTC</div>
    </div>
    <div class="ips flex flex-col gap-4 pb-15" v-if="Ips">
        <div class="ip bg-sky-700 py-3 px-5" v-for="Ip in Ips">
            <div class="ip__follow text-xl">IP - {{ Ip.ip_follow }}</div>
            <div class="time__follow text-lg text-gray-300">Date Open - {{ Ip.time_follow }} UTC</div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "CurrentUrl",

    data() {
        return {
            Url: [],
            Ips: []
        }
    },

    methods: {
        getUrl() {
            axios.get(`/api/urls/${this.$route.params.url}`)
                .then(res => {
                    this.Url = res.data
                })
        },
        getIps(){
            axios.get(`/api/urls/${this.$route.params.url}/ips`)
                .then(res => {
                    this.Ips = res.data
                })
        }
    },

    mounted() {
        this.getUrl()
        this.getIps()
    }
}
</script>

<style scoped>

</style>
