const { createApp } = Vue;

createApp({
    data() {
        return {
            apiDiskUrl : "./server.php",

            disksList :[ ]
        }
    },

    methods:{
        getDisks(){
            axios.get(this.apiDiskUrl)
                .then((response) => {
                console.log(response.data)
                this.disksList = response.data
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