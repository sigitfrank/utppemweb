<?php
include 'koneksi.php';
?>
<html>
    <style>
    #button {
            display: block;
            padding: 15px 20px;
            margin-bottom: 15px;
            margin-top: 30px;
            border-radius: 5px;
            border: 5px solid #4169E1;
            background: #4169E1;
            width: 150px;
            box-sizing: border-box;
            color: #FFF;
            font-size: 18px;
    
        }
  
    </style>
<head>
    <title>Surat Masuk</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-light_blue.min.css" /> 
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>
    <div class="mdl-layout mdl-js-layout">
    <header class="mdl-layout__header">
        <div class="mdl-layout-icon"></div>
        <div class="mdl-layout__header-row">
        <form action="home.php" method="POST"><input type="submit" name="signout" size="10px" value="Kembali" id="button"></form>
        <div class="mdl-layout-spacer"></div>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Ayi Nugraha |</a>
            <a class="mdl-navigation__link" href="">Sigit Tunggul Waskito |</a>
            <a class="mdl-navigation__link" href="">Tantut Wahyu Setyoko |</a>
        </nav>
    </div>
    </header>
    <br>
    <center><h2>Surat Masuk</h2></center>
    <br><br><br>
    <center><a href="input.php"><font color="black">Tambah Surat &Gt; </font></a></center>
    <table border="1">
        <tr>
            <td><center><h5><b>No</td>
            <td><center><h5><b>Kode</td>
            <td><center><h5><b>Tanggal</td>
            <td><center><h5><b>Perihal</td>
            <td><center><h5><b>Asal Surat</td>
            <td><center><h5><b>Tindakan</td>
        </tr>

        <?php
            $query = "SELECT * FROM masuk";
            $result = mysqli_query($conn, $query);
            if(!$result){
                die ("Query Error: ".mysqli_errno($conn).
                " - ".mysqli_error($conn));
            }

            $no = 1; 
            while($data = mysqli_fetch_assoc($result))
            {

            echo "<tr>";
            echo "<td><center><b>$no</td>"; 
            echo "<td><center><b>$data[kode]</td>"; 
            echo "<td><center><b>$data[tanggal]</td>"; 
            echo "<td><center><b>$data[perihal]</td>"; 
            echo "<td><center><b>$data[asal]</td>";  
    
            echo '<td><center><b>
                <a href="edit.php?id='.$data['kode'].'">Edit</a> /
                <a href="hapus.php?id='.$data['kode'].'"
                    onclick="return confirm(\'Hapus data?\')">Hapus</a>
            </td>';
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>