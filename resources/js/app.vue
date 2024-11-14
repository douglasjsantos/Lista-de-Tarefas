<!-- resources/js/app.vue -->
<template>
    <div>
        <h1>Hello, Vue in Laravel!</h1>
        <p>{{ message }}</p>
        <button @click="changeMessage">Change Message</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: "Welcome to your Vue app inside Laravel!",
        };
    },
    methods: {
        changeMessage() {
            this.message = "You clicked the button!";
        },
    },
};
</script>

<style scoped>
h1 {
    color: #42b983;
}
</style>
