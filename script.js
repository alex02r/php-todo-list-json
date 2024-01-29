const { createApp } = Vue;

createApp({
    data() {
        return {
            API_url: 'server.php',
            todoList:[]
        }
    },
    created() {
        this.getTodoList()
    },
    methods: {
        getTodoList(){
            axios.get(this.API_url).then(response =>{
                this.todoList = response.data;
            })
        }
    },
}).mount('#app')