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
            });
        },
        removeTask(index){
            const data = {
                delete: index
            }
            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.todoList = response.data;
            });  
        }
    },
    created(){
        axios.get(this.apiUrl).then((response) =>{
            this.todoList = response.data;
        });
    }
}).mount("#app");