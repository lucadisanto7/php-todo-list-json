<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Todo</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
<div id="app">
        <h1>Todo List</h1>
        <button @click="fetchTodos">Recover</button>
</div>
<script>
        new Vue({
            el: '#app',
            data: {
                todos: []
            },
            methods: {
                fetchTodos() {
                    axios.get('api.php')
                        .then(response => {
                            console.log('Todo ricevuti:', response.data);
                            this.todos = response.data;
                        })
                        .catch(error => {
                            console.error('C\'è stato un errore nel recupero dei todo!', error);
                        });
                }
            }
        });
    </script>
</body>

</html>