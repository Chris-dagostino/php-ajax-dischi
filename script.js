const app = new vue ({
    el:'#root',

    created(){

        axios.get('http://localhost/php-ajax-dischi/php-ajax-dischi/index.php').then ((response) =>{
            console.log(response)
        });
    }
})