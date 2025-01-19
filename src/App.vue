<script setup>
import { ref } from 'vue';

    const message = ref("Hello from Vue 3 with a .vue file!");

    const updateMessage = () => {
        message.value = "You clicked the button!";
    };

</script>

<template>
  <div>
    <h1>{{ message }}</h1>
    <button @click="updateMessage">Click Me</button>
  </div>
</template>

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
