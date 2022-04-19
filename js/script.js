new Vue ({
    el: '#app',
    data: {
        arrAlbumSong: [],
    },
    created () {
        axios.get("./db/api_js.php").then((response) => {this.arrAlbumSong = response.data.response});
    },
})