<template>
    <div class="container mx-auto">
        <div class="flex space-x-4">
            <Link :href="route('home')" :class="{ 'font-bold': $page.component === 'Home' }">Home</Link>
            <Link :href="route('about')" :class="{ 'font-bold': $page.component === 'About' }">About</Link>
        </div>
        <slot/>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3'

export default {
    components: {
        Link
    }
}
</script>

