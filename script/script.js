const { createApp } = Vue;

createApp({
    data() {
        return {
            apiDiskUrl : "../server.php"
        }
    },

    methods:{
        getDisks(){

        }
    }
}).mount("#app")