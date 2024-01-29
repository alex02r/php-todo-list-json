const { createApp } = Vue;

createApp({
    data() {
        return {
            API_url: 'server.php',
            todoList:[]
        }
    },
    methods: {
        getTodoList(){
            axios.get(API_url).then(response =>{
                this.todoList = response.data;
            })
        }
    },
}).mount('#app')