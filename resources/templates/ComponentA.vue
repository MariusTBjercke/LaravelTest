<script>
import {store} from "@/ts/store";

export default {
    data() {
        return {
            store
        }
    }
}
</script>

<template>From A: {{ store.count }}</template>
