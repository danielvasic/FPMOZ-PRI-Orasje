<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="static/style.css" />
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
<!------ Include the above in your HEAD tag ---------->
    <body>
    <div class="wrapper fadeInDown">
      <div id="formContent">
          <!-- Tabs Titles -->

          <!-- Login Form -->
          <form>
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="Unesite Vaše ime">
          <input type="text" id="password" class="fadeIn third" name="login" placeholder="Unesite Vašu lozinku">
          <input type="submit" class="fadeIn fourth" value="Prijava">
          </form>

          <!-- Remind Passowrd -->
          <div id="formFooter">
          <a class="underlineHover" href="#">Zaboravili ste lozinku?</a>
          </div>

      </div>
    </div>

    <div id="app">
      <ul v-if="status">
        <li v-for="stavka in lista">
          {{ stavka.tekst }}
        </li>
      </ul>
      <button v-on:click="prikaziListu">Klikni me</button>
    </div>

    <script type="text/javascript">
      new Vue ({
        el: '#app',
        data: {
          lista: [
            {tekst: "Naučiti PHP"},
            {tekst: "Naučiti JavaScript"},
            {tekst: "Napraviti REST API"},
            {tekst: "Napraviti sučelje"}
          ],
          status: true
        },
        methods: {
          prikaziListu: function () {
            this.status = !this.status;
          }
        }
      });
    </script>
    </body>
</html>