<html>
<head>
<title>
Upload File</title>
</head>
<body>
    <form action="upload" method="post" enctype='multipart/form-data'>
    <input type="file" name="user_img"/><br><br>
    @csrf
    <button type="submit">Upload file</button>
    </form>
</body>
</html>