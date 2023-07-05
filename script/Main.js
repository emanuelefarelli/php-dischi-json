const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: './server.php',
      disksList: [],
    }
  },
  methods: {
    getDisks(){
        axios.get(this.apiUrl, {
            params: {}
        })
        .then((response) => {
            console.log(response);
            this.disksList = response.data;
        })
        .catch(function (error) {
            console.log(error);
        }) 
    }
  },
  created(){
    this.getDisks();
  }
}).mount('#app')