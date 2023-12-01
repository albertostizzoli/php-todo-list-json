const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            todoList: [],
            task: "",
        }
    },
    methods: {
        //funzione per aggiungere un nuovo elemento
        addTask() {
            const data = {
                task: this.task,
                done: false,
            }

            if (this.task == "") {
                return;
            }
            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.task = '';
                this.todoList = response.data;
            })
        }
    },
    created(){
        axios.get(this.apiUrl).then((response) =>{
            this.todoList = response.data;
        });
    }
}).mount("#app");