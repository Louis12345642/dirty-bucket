
<script setup>
import footerVue from "@/Components/client-components/footer.vue"
import navbarVue from "@/Components/client-components/navbar.vue"

</script>

<template>
<main>
    <navbarVue/>
       <slot/>
    <footerVue/>
</main>
</template>
<style>
</style>
