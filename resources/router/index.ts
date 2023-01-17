import {createRouter, createWebHistory} from "vue-router";
import Home from "@/views/Home.vue";
import About from "@/views/About.vue";
import Game from "@/views/Game.vue";

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/about',
        name: 'about',
        component: About,
    },
    {
        path: '/game',
        name: 'game',
        component: Game,
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router;
