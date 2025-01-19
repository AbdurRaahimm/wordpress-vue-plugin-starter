<template>
    <div>
        <h1>{{ message }}</h1>
        <button @click="updateMessage">Click Me</button>
    </div>
</template>

<script>
import { ref } from 'vue';

export default {
    setup() {
        const message = ref("Hello from Vue 3 with a .vue file!");

        const updateMessage = () => {
            message.value = "You clicked the button!";
        };

        return {
            message,
            updateMessage,
        };
    },
};
</script>

<style>
h1 {
    font-family: Arial, sans-serif;
    color: #42b983;
}
button {
    margin-top: 10px;
    padding: 10px 20px;
    font-size: 16px;
}
</style>
