<script setup>
import { Head, Link } from '@inertiajs/vue3';
import clientLayout from '@/Layouts/client/clientLayout.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
<client-layout>
    <h1>hello friends</h1>
</client-layout>
</template>

<style>

:root{
    --navBg:#10081E;
    --btnPrimary:#5700E1;
}
.nav-background{
    background-color:var(--navBg);
    height: 80px;
}
.li-space{
    margin-left: 20px;

}
.na-bg{
    background-color:var(--navBg);

}

body{
font-family: 'Noto Serif Gujarati', serif;
font-family: 'Roboto', sans-serif;
background-color: #07020F;
}

.background-radial-gradient {
    background-color: hsl(218, 41%, 15%);
    background-image: radial-gradient(650px circle at 0% 0%,
        hsl(218, 41%, 35%) 15%,
        hsl(218, 41%, 30%) 35%,
        hsl(218, 41%, 20%) 75%,
        hsl(218, 41%, 19%) 80%,
        transparent 100%),
      radial-gradient(1250px circle at 100% 100%,
        hsl(218, 41%, 45%) 15%,
        hsl(218, 41%, 30%) 35%,
        hsl(218, 41%, 20%) 75%,
        hsl(218, 41%, 19%) 80%,
        transparent 100%);
  }
.btn-bg{
background-color: var(--navBg);

}
.card-width{
    height:350px;

}

.image-prop{
    height:100%;
    height:100px;
}
.primary-btn{
    background-color: var(--btnPrimary);
    height: 40px;
    width: 150px
}
.cover-image{
    width: 250px;
}
</style>
