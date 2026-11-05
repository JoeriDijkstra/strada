<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import PlaceholderPattern from "@/components/PlaceholderPattern.vue";
import { models } from "@/routes";

defineOptions({
    layout: {
        breadcrumbs: [
            {
                title: "Models",
                href: models(),
            },
        ],
    },
});
</script>

<template>
    <table class="w-full text-sm text-left">
        <thead class="border-b bg-muted">
            <tr>
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">Slug</th>
                <th class="px-4 py-3">Public</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b">
                <td class="px-4 py-3">Test Model</td>
                <td class="px-4 py-3">test</td>
                <td class="px-4 py-3">Yes</td>
            </tr>
        </tbody>
    </table>
</template>
