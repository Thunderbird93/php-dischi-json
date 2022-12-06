const { createApp } = Vue;

createApp({
    data(){
        return{
            apiUrl: 'server.php'
        }
    },
    methods:{
        getTodos(){
            axios.get(this.apiUrl)
            .then(r => {
                console.log(r.data);
            })
        }
    },
    mounted(){
        this.getTodos();
    }

}).mount('#app');