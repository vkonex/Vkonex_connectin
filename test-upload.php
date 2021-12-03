<!DOCTYPE html>
<html>

<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input id="file-upload" hidden type="file" name="fileToUpload" id="fileToUpload">
        <label for="file-upload">

            <button>Add</button>
        </label>
        <input type="submit" value="Upload Image" name="submit">
    </form>

</body>

</html>