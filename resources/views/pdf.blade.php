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
        .section {
            margin: 20px 0;
            font-size: 14px;
        }
        .images {
            margin: 10px 0;
        }
        .images img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Notulensi</h2>

    <!-- Displaying fields -->
    <div class="section">
        <strong>Hari/Tanggal:</strong> {{ $hari_tanggal }}
    </div>
    <div class="section">
        <strong>Ruang Rapat:</strong> {{ $ruang_rapat }}
    </div>
    <div class="section">
        <strong>Waktu:</strong> {{ $waktu }}
    </div>
    <div class="section">
        <strong>Surat Undangan:</strong> {{ $surat_undangan }}
    </div>
    <div class="section">
        <strong>Tipe Rapat:</strong> {{ $tipe_rapat }}
    </div>

    <!-- Displaying message -->
    <div class="section">
        <h3>Message:</h3>
        <p>{{ $message }}</p>
    </div>

    <!-- Displaying images -->
    <div class="section">
        <h3>Images:</h3>
        <div class="images">
            @foreach ($file_path as $image)
                <div>
                    <img src="{{ storage_path('app/public/' . $image) }}" alt="Image">
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
