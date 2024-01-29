<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>
<body>
    <div id="app">
        <header class="bg-dark p-3">
            <h1 class="text-white">Todo List</h1>
        </header>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="d-flex gap-3">
                        <div class="input-group mb-3 shadow">
                            <input type="text" class="form-control" placeholder="Aggiungi una task.." @keyup.enter="AddTask()" v-model="newItem">
                            <span class="input-group-text btn btn-dark" @click="AddTask()">Aggiungi</span>
                        </div>
                        <div class="btn btn-warning mb-3" @click="edit = !edit">
                            <i :class="!edit ? 'fas fa-pen' : 'fas fa-check'"></i>
                        </div>
                    </div>
                    <div class="bg-white rounded shadow p-3">
                        <ul class="list-unstyled">
                            <li v-for="item, index in todoList " :key="index" class="d-flex align-items-center justify-content-between border-bottom py-3">
                                <h5 :class="item.do ? 'text-decoration-line-through' : '' " role="button" @click="doTask(index)">{{ item.name }}</h5>
                                <i v-if="edit" class="fas fa-trash-can text-danger" @click="deleteTask(index)"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./script.js"></script>
</body>
</html>