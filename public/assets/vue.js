const url = "http://localhost:8080/pengadaan/cpns";
const { createApp, ref } = Vue

createApp({
  data() {
    return {
      jumlahpegawai: 'asdasds',
      simpegpns: 2222,
      cpns: []
    }
  },
    mounted() {
        axios.get(url).then(response => {
            this.cpns = response.data.data
        })
  }
}).mount('#app')
