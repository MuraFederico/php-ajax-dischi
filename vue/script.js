var app = new Vue({
    el: '#app',
    data: {
      arrDiscs: [],
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api.php')
            .then(res => this.arrDiscs = res.data)
    }
  })