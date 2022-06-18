<!-- <html>
    <head>
        <title>File Uploading Form</title>
</head>
<body>
    <h3>File Upload</h3>
    Select a file to upload:<br/>
    <form action ="/php/file_uploader.php" method="post" enctype="multipart/form-data">
        <br/>
        <input type="submit" value="Upload File"/>
</form>
</body>
</html> -->

<?php
if($_FILES['file']['name']!="")
{
    copy($_FILES['file']['name'],"/var/www/html") or
    die("Could not copy file!");
}
else
{
    die("No file specified!");
}
?>
<html>
    <head>
        <title>Uploading Completed</title>
</head>
<body>
    <h2>Uploaded File Info:</h2>
    <ul>
        <li>Sent file: <?php echo $_FILES['file']['name'];?>
        <li>File size: <?php echo $_FILES['file']['size'];?>
        <li>File type: <?php echo $_FILES['file']['type'];?>
        </ul>
</body>
</html>