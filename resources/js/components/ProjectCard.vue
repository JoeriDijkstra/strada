```vue
<script setup lang="ts">
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from '@/components/ui/card';

import { Button } from '@/components/ui/button';

defineProps<{
    title: string;
    slug: string;
    description?: string;
}>();

const emit = defineEmits<{
    open: [];
    configure: [];
}>();
</script>

<template>
    <Card>
        <CardHeader>
            <CardTitle>{{ title }}</CardTitle>
            <p class="text-sm text-muted-foreground font-mono">
                {{ slug }}
            </p>
            <CardDescription v-if="description">
                {{ description }}
            </CardDescription>
        </CardHeader>

        <CardContent>
            <slot />
        </CardContent>

        <CardFooter class="justify-end gap-2">
            <Button
                variant="outline"
                @click="emit('configure')"
            >
                Configure
            </Button>

            <Button @click="emit('open')">
                Open
            </Button>
        </CardFooter>
    </Card>
</template>
```
