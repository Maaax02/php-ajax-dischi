new Vue({
    el: '#app',
    data:{
       dischi : [],
    },
    mounted(){
          axios.get('/php-ajax-dischi/php-ajax-dischi/php/api.php') 
          .then(response => {
              this.dischi = response.data
              console.log(this.dischi)
        }) 
    }
})