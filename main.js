const { createApp } = Vue;

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            todos: []
        }
    },
    methods:{
        getDischi(){
            axios.get(this.apiUrl)
            .then(r => {
                todos = r.data;
            })
        }
    },
    mounted(){
        this.getDischi();
    }

}).mount('#app');