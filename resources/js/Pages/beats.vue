<template>
<h1>Hello beats</h1>
<h1>{{ name  }}</h1>
<ul>
    <li v-for="user in users" :key="user.id">{{ user.name }}</li>
</ul>
</template>

<script setup>
defineProps({ name:String ,users:Object});

</script>

<style>

</style>
