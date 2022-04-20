<template>
    <Head>
        <title>About page</title>
    </Head>
    <AppLayout>
        <h1>{{ title }}</h1>
    </AppLayout>
</template>

<script>
import AppLayout from "../Layouts/App"
import { Head } from "@inertiajs/inertia-vue3"

export default {
    components: {
        AppLayout, Head
    },
    props: {
        title: String
    }
}
</script>
