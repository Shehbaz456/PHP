<html>
<head>
    <title>file uploading </title>
</head>
<body>
    <h3>file uploading</h3>
    select a file to upload: <br>
    <form action="/php/file_upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" size="50" /><br>
        <input type="submit" value="upload.file"/>
    </form>
</body>
</html>

