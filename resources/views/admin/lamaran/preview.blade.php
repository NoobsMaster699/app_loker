<!-- resources/views/admin/preview.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>
</head>
<body>
    <embed src="{{ $fileUrl }}" type="application/pdf" width="100%" height="600px" />
</body>
</html>
