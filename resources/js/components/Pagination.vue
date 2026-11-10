<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

type PaginationLink = {
    url: string | null;
    label: string;
    active: boolean;
};

defineProps<{
    links: PaginationLink[];
    currentPage: number;
    lastPage: number;
    from: number | null;
    to: number | null;
    total: number;
}>();
</script>

<template>
    <div class="flex items-center justify-between">
        <p class="text-sm text-muted-foreground">
            Showing {{ from ?? 0 }} to {{ to ?? 0 }}
            of {{ total }} results
        </p>

        <div class="flex items-center gap-1">
            <Link
                v-for="(link, index) in links"
                :key="index"
                :href="link.url ?? '#'"
                :class="[
                    'px-3 py-2 text-sm rounded-md',
                    link.active
                        ? 'bg-primary text-primary-foreground'
                        : 'hover:bg-muted',
                    !link.url
                        ? 'pointer-events-none opacity-40'
                        : '',
                ]"
                v-html="link.label"
            />
        </div>
    </div>
</template>
