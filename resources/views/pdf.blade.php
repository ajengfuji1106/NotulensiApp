<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notulensi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .message {
            margin: 20px 0;
            font-size: 14px;
        }
        .image {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h2>Notulensi</h2>
    
    <div class="message">
        <h2>Message:</h2>
        <p>{{ $message }}</p>
    </div>

    <h2>Images:</h2>
    <div class="images">
        @foreach ($file_path as $image)
            <div class="image">
                <img src="{{ storage_path('app/public/' . $image) }}" alt="Image" style="max-width: 100%; height: auto;">
            </div>
        @endforeach
    </div>
</body>
</html>
