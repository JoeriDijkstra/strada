<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import type { Project } from '@/types';

defineProps<{
    projects: Project[]
}>();
</script>

<template>
    <Head title="Projects" />
    <div v-for="project in projects" :key="project.id">
        {{ project.name }}
    </div>
</template>
