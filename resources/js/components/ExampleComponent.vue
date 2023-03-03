<template>
    <div>
        <h1>{{ title }}</h1>
        <p>{{ message }}</p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            title: 'Welcome to my app!',
            message: 'This is a Laravel-Vue.js project.'
        }
    }
}
</script>
