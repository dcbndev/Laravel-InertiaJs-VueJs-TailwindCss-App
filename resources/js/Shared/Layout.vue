<template>
    <div class="container mx-auto">
        <ul>
            <li>
                <Link href="/">
                    Home
                </Link>
            </li>
            <li>
                <Link href="/about">
                    About
                </Link>
            </li>
        </ul>
        <slot />
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

