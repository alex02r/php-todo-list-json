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
        },
        doTask(i){
            //let updateItem = this.todoList[i].do = !this.todoList[i].do;
            const data = {
                index_item : i
            }
            axios.post(this.API_url, data, {
                headers: { 'Content-Type':'multipart/form-data'}
            }).then(response =>{
                this.todoList = response.data
                this.getTodoList()
            })
        }
    },
}).mount('#app')