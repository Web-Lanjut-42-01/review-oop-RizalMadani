
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <div class="container">
        <h2>Menghitung BMI</h2>
        <div class="row">
          <form action="Welcome/hitung" method="POST">
            <div class="input-field col s6">
              <input id="tb" type="number" class="validate" name="tb">
              <label class="active" for="tb">Tinggi Badan</label>
            </div>

            <div class="input-field col s6">
              <input id="bb" type="number" class="validate" name="bb">
              <label class="active" for="bb">Berat Badan</label>
            </div>

            <div class="input-field col s6">
              <span>Jenis Kelamin</span>
              <p>
                <label>
                  <input name="jk" type="radio" value="l" required="" />
                  <span>Laki-laki</span>
                </label>
              </p>
              <p>
                <label>
                  <input name="jk" type="radio" value="p" required=""/>
                  <span>Perempuan</span>
                </label>
              </p>

              <button class="waves-effect waves-light btn">Submit</button>
            </div>
          </form>
        </div>
      </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    </body>
  </html> 