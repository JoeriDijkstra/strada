<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import type { Paginated, Project } from '@/types';
import ProjectCard from '@/components/ProjectCard.vue';
import Pagination from '@/components/Pagination.vue';
import { Button } from '@/components/ui/button';
import { Icon, Plus } from '@lucide/vue';
import CreateProjectDialog from '@/components/CreateProjectDialog.vue';

defineProps<{
    projects: Paginated<Project>;
}>();
</script>

<template>
    <Head title="Projects" />

    <div class="p-8 space-y-6">
        <div class="flex justify-between">
            <div>
                <h1 class="text-2xl font-semibold">Projects</h1>
                <p class="text-muted-foreground">
                    Manage your projects.
                </p>
            </div>
            <CreateProjectDialog />
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <ProjectCard
                v-for="project in projects.data"
                :key="project.id"
                :title="project.name"
                :slug="project.slug"
            />
        </div>

        <Pagination
            v-if="projects.last_page > 1"
            :links="projects.links"
            :current-page="projects.current_page"
            :last-page="projects.last_page"
            :from="projects.from"
            :to="projects.to"
            :total="projects.total"
        />
    </div>
</template>
