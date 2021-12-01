new Vue({
  el: "#app",
  data: {
    listAlbum: [],
  },
  mounted() {
    axios.get("http://localhost:80/php-ajax-dischi/api/api.php").then((resp) => {
      this.listAlbum = resp.data.response;
    });
  },
});


