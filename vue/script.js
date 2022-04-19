var app = new Vue({
    el: '#app',
    data: {
      arrDiscs: [],
      arrGenre: [''],
    },
    methods: {
      getArrGenre() {
        this.arrDiscs.forEach((disc) => {
          if (!this.arrGenre.includes(disc.genre)) {
            this.arrGenre.push(disc.genre);
          }
        });
      },
      search(event) {
        axios.get(`http://localhost/php-ajax-dischi/api.php?genre=${event.target.value}`)
        .then(res => {this.arrDiscs = res.data});
      },
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api.php?')
        .then(res => {this.arrDiscs = res.data
            this.getArrGenre();
        });
    }
  })