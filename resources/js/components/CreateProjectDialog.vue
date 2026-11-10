<script setup lang="ts">
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
} from '@/components/ui/dialog';

import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';

const open = ref(false);

const form = useForm({
    name: '',
    slug: ''
});

function submit() {
    form.post('/projects', {
        onSuccess: () => {
            form.reset();
            open.value = false;
        },
    });
}
</script>

<template>
    <Dialog v-model:open="open">
        <Button @click="open = true">
            + New project
        </Button>

        <DialogContent>
            <DialogHeader>
                <DialogTitle>Create project</DialogTitle>
                <DialogDescription>
                    Give your project a name to get started.
                </DialogDescription>
            </DialogHeader>

            <form @submit.prevent="submit" class="space-y-4">
                <div class="space-y-2">
                    <Label for="name">Project name</Label>
                    <Input
                        id="name"
                        v-model="form.name"
                        placeholder="My awesome project"
                        maxlength="32"
                        minlength="3"
                    />

                    <Label for="name">Slug</Label>
                    <Input
                        id="name"
                        v-model="form.slug"
                        placeholder="MYAWP"
                        minlength="5"
                        maxlength="5"
                    />

                    <p v-if="form.errors.name" class="text-sm text-destructive">
                        {{ form.errors.name }}
                    </p>
                </div>

                <DialogFooter>
                    <Button
                        type="button"
                        variant="outline"
                        @click="open = false"
                    >
                        Cancel
                    </Button>

                    <Button type="submit" :disabled="form.processing">
                        Create project
                    </Button>
                </DialogFooter>
            </form>
        </DialogContent>
    </Dialog>
</template>
