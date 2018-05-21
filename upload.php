<html>
<head>
  <title>Form upload</title>
</head>
<body>
<h2>Upload File</h2>
<ol>
  <li>Cari file.</li>
</ol>
<hr />
<div align="center">
<form action="UploadFile.php" method="post" 
      enctype="multipart/form-data">
  <input type="hidden" name="MAX_FILE_SIZE" 
    value="500000"><br />
  <input type="file" name="file_user" size="60">
  <br /><br />
  <input type="submit" value="Upload File">
</form>
</div>
 
</body>
</html>