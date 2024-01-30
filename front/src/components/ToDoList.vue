<script>
import axios from 'axios';

export default {
    name: 'ToDoList',
    data() {
        return {
            todos: []
        }
    },
    mounted() {
        const t = this;
        axios.get('http://localhost/TodoApi.php')
            .then(res => {
                t.todos = res.data;
            }).catch(err => console.error(err));
    }
}

</script>

<template>
    <h1>To do list: </h1>
    <ul>
        <li v-for="todo in todos">
            {{ todo.task }}
        </li>
    </ul>
</template>