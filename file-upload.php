<!DOCTYPE html>
<html>

<head>
    <title>File Upload</title>
</head>

<body>
    <h2>Upload a File</h2>
    <!-- File Upload Form -->
    <form action="" method="post" enctype="multipart/form-data">
        Select file to upload:<br><br>
        <input type="file" name="myfile" required>
        <br><br>
        <input type="submit" name="upload" value="Upload File">
    </form>
    <hr>
</body>

</html>

<?php
// When the form is submitted
if (isset($_POST["upload"])) {

    // Allowed file types (you can change these)
    $allowedTypes = ["image/jpeg", "image/png", "application/pdf"];

    // Maximum file size (in bytes) – here: 2MB
    $maxSize = 2 * 1024 * 1024;

    $file = $_FILES["myfile"];
    $fileName = $file["name"];
    $fileType = $file["type"];
    $fileSize = $file["size"];
    $tmpName  = $file["tmp_name"];

    // Validation
    if (!in_array($fileType, $allowedTypes)) echo "<p style='color:red;'>Error: Only JPEG, PNG, or PDF files are allowed.</p>";
    elseif ($fileSize > $maxSize) echo "<p style='color:red;'>Error: File size must be less than 2MB.</p>";
    else {
        // Move file to server folder named uploads
        if (!is_dir("uploads")) mkdir("uploads", 0777, true);
        $dest = "uploads/" . basename($fileName);
        if (move_uploaded_file($tmpName, $dest)) {
            echo "<p style='color:green;'>File uploaded successfully!</p>";
            echo "<p>Stored as: $dest</p>";
        } else echo "<p style='color:red;'>Error uploading file.</p>";
    }
}
?>