<template>
    <AppLayout>
        <h1>{{ title }}</h1>
    </AppLayout>
</template>

<script>
import AppLayout from "../Layouts/App"

export default {
    components: {
        AppLayout
    },
    props: {
        title: String
    }
}
</script>
