const { createApp } = Vue;

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            dischi: []
        }
    },
    methods:{
        getDischi(){
            axios.get(this.apiUrl)
            .then(r => {
                dischi = r.data;
            })
        }
    },
    mounted(){
        this.getDischi();
    }

}).mount('#app');