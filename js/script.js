console.log('vue ok', Vue);

Vue.config.devtools = true;

const app = new Vue({

    el: '#root',

    data: {
        discs: [],
    },

    mounted() {
        axios.get(`http://localhost/project/php-ajax-dischi/api/data/discs.php`).then(res => {
            this.discs = res.data;
        })
    }
})