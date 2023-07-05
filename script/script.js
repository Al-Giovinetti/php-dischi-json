const { createApp } = Vue;

createApp({
    data() {
        return {
            apiDiskUrl : "./server.php"
        }
    },

    methods:{
        getDisks(){
            axios.get(this.apiDiskUrl)
                .then((response) => {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
          });
        }
    },

    created() {
        this.getDisks();
    }
}).mount("#app")