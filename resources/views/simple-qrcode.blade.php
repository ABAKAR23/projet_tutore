<!DOCTYPE html>
<html>
<head>
    <title>Simple Qrcode</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: aquamarine;
        }
        .qrcode-container {
            text-align: center;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 300px;
            margin: 20px;
        }
        .qrcode-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .qrcode-container svg {
            margin: 0 auto;
            display: block;
        }
    </style>
</head>
<body>
<div class="qrcode-container">
    <h1>Votre Code Secret</h1>
    <!-- On affiche le code QR au format SVG -->
    {!! $qrcode !!}
    <p>Scannez ce code pour accéder à vos informations.</p>
</div>
</body>
</html>
