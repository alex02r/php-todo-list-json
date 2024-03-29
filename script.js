const { createApp } = Vue;

createApp({
    data() {
        return {
            API_url: 'server.php',
            newItem:'',
            edit: false,
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
        AddTask(){
            const data = {
                new_item : this.newItem
            }
            axios.post(this.API_url, data, {
                headers: { 'Content-Type':'multipart/form-data'}
            }).then(response =>{
                this.newItem = ''
                this.todoList = response.data
                this.getTodoList()
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
        },
        deleteTask(i){
            const data = {
                delete_item : i
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