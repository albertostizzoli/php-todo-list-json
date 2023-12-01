<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP ToDo List JSON</title>
</head>

<body>
    <div id="app">
        <h1 class="text-center text-bg-success p-2">PHP TODO LIST JSON</h1>
        <div class="container">
            <div class="row mt-3">
                <div class="col-12">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between mt-2" v-for="(item, index) in todoList"
                            :key="index">
                            <div>
                                <div>{{item.task}}</div>
                            </div>
                            <div>
                                <button class="btn btn-danger" @click="removeTask(index)">Cancella</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="input-group">
                            <input type="text" class="form-control" v-model="task">
                            <button class="btn btn-primary p-3" type="button" @click="addTask">Inserisci</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.0/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/script.js"></script>
</body>

</html>