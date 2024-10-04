<script setup>
defineProps({
    test: String
})
</script>

<template>
    <Head title=" - About" />
    <div>
        <h1>About {{ test }}</h1>
    </div>
</template>