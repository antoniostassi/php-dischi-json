const { createApp } = Vue

createApp({

    data() {
        return {
            albumsData: []
        }
    },
    created() {
        this.apiCall();
    },

    methods: {
        apiCall() {
            axios

            .get('http://localhost/php-dischi-json/backend/api.php')

            .then((res) => {
                this.albumsData = (res.data);
            })
        },
        myLog() {
            console.log(this.albumsData);
        }
    }
}).mount('#app')