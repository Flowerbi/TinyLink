import {createRouter, createWebHistory} from "vue-router";
import MainUrl from "@/Pages/MainUrl.vue";
import CurrentUrl from "@/Pages/CurrentUrl.vue";
const routes = [
    {
        path: '/',
        component: MainUrl,
        name: 'main-url.page'
    },
    {
        path: '/url/:url',
        component: CurrentUrl,
        name: 'current-url.page'
    }
];

const router = createRouter({
   history: createWebHistory(),
   routes
});

export default router
