<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Example</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['uploaded_file']) && $_FILES['uploaded_file']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . '/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $fileName = basename($_FILES['uploaded_file']['name']);
        $uploadFile = $uploadDir . $fileName;
        if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $uploadFile)) {
            echo "<p>File uploaded successfully: $fileName</p>";
        } else {
            echo "<p>File upload failed.</p>";
        }
    } else {
        echo "<p>No file uploaded or upload error.</p>";
    }
} else {
    // GET request: show the form
    $formHtml = <<<HTML
        <form action="" method="post" enctype="multipart/form-data">
            <label for="uploaded_file">Choose file to upload:</label><br>
            <input type="file" name="uploaded_file" id="uploaded_file"><br><br>
            <input type="submit" value="Upload">
        </form>
    HTML;
    echo $formHtml;
}
?>

</body>
</html>
