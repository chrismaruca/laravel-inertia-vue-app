<script setup>
</script>

<template>
    <Head :title="` - ${$page.component}`" />
    <h1>Home {{ $page.props.user }}</h1>

    <Link class="mt-[1400px] block" :href="route('home')" preserve-scroll>Refresh</Link>
</template>