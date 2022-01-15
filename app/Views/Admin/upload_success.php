<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
    <li>name: <?= esc($uploaded_flleinfo->getBasename()) ?></li>
    <li>extension: <?= esc($uploaded_flleinfo->guessExtension()) ?></li>
</ul>

<p><?= anchor('upload', 'Upload Another File!') ?></p>

</body>
</html>