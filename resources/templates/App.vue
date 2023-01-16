<script>
import ComponentA from "@/templates/ComponentA.vue";
import ComponentB from "@/templates/ComponentB.vue";
import { store } from "@/ts/store";

export default {
    components: {ComponentB, ComponentA},
    data() {
        return {
            store,
        }
    },
    methods: {
    }
}
</script>

<template>

    <ComponentA></ComponentA>

    <br>

    <ComponentB></ComponentB>

    <br><br>

    <button @click="store.count++">
        From B: {{ store.count }}
    </button>

</template>
