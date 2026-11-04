<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '@/components/PlaceholderPattern.vue';
import { models } from '@/routes';

defineOptions({
    layout: {
        breadcrumbs: [
            {
                title: 'Models',
                href: models(),
            },
        ],
    },
});
</script>

<template>
    <Head title="Models" />
    <h1>Models</h1>
    <h2>These are your models</h2>
</template>
