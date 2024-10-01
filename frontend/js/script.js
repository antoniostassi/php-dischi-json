const { createApp } = Vue

  createApp({
    data() {
      return {
        message: 'Hello Vue!'
      }
    },
    created() {
      axios

      .get('http://localhost/php-dischi-json/backend/api.php')

      .then((res) => {
        console.log(res.data);
        console.log("Helelo");
      })
      
    }
  }).mount('#app')