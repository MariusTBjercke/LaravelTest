<script>
import {mapState} from "vuex";
import Home from "@/views/Home.vue";

export default {
    components: {
        Home,
    },
    computed: {
        ...mapState(['user'])
    }
}
</script>

<template>
    <router-view></router-view>
</template>
