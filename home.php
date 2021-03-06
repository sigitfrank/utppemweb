    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-light_blue.min.css" /> 
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </head>

    <style>
    .akun{
        margin-left: 5px;
    }
    #button {
        display: block;
        padding: 15px 20px;
        margin-bottom: 15px;
        margin-top: 15px;
        border-radius: 5px;
        border: 5px solid #4169E1;
        background: #4169E1;
        width: 150px;
        box-sizing: border-box;
        color: #FFF;
        font-size: 18px;
  
    }
    </style>
  <body>

    <div class="mdl-layout mdl-js-layout">
    <header class="mdl-layout__header">
        <div class="mdl-layout-icon"></div>
        <div class="mdl-layout__header-row">
        <form action="index.php" method="POST"><input type="submit" name="signout" size="10px" value="Sign Out" id="button"></form>
        <div class="mdl-layout-spacer"></div>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Ayi Nugraha |</a>
            <a class="mdl-navigation__link" href="">Sigit Tunggul Waskito |</a>
            <a class="mdl-navigation__link" href="">Tantut Wahyu Setyoko |</a>
        </nav>
    </div>
    </header>
    <center>
    <table border="1" class="mdl-data-table mdl-js-data-table">
  <thead>
    <tr>
        <td><center><h1><b>Sistem Inventaris Surat</h1></center></td>
    </tr>
  </thead>
    
  <tbody>
    <tr>
        <th><center><img src="inbox.png"><center></th>
        <th><h3><a href="suratmasuk.php">Surat Masuk</th>
    </tr>
      
    <tr>
      <th><center><img src="sendmail.png"><center></th>
      <th><h3><a href="suratkeluar.php">Surat Keluar</th>
    </tr>
  </tbody>
</table></center>
    
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>