<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="/pri/static/style.css" />
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.2.0/vue-resource.js"></script>
    </head>
    
    <body>
    <div class="container">
        <div class="row">
            <div class="col" id="app">
            <table v-if="podaci" class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Email</th>
                    <th>Lozinka</th>
                </tr>
                <tr v-for="korisnik in podaci">
                    <td>{{ korisnik.id }}</td>
                    <td>{{ korisnik.ime }}</td>
                    <td>{{ korisnik.prezime }}</td>
                    <td>{{ korisnik.email }}</td>
                    <td>{{ korisnik.lozinka }}</td>
                </tr>
            </table>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        Vue.use(VueResource);
        new Vue({
            el: '#app',
            data: {
                podaci: false
            },
            methods: {
                ucitajPodatke: function () {
                    let url = "http://localhost/pri/index.php/korisnici/svi";
                    this.$http.get(url).then(xhr => this.podaci = xhr.body)
                }
            }, 
            mounted() {
                this.ucitajPodatke();
            }
        })
    </script>
    </body>
</html>